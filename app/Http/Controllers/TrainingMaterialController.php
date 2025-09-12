<?php

namespace App\Http\Controllers;

use App\Models\Training;
use App\Models\TrainingMaterial;
use App\Models\TrainingSection;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TrainingMaterialController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
   public function show(String $slug)
{
    $material = TrainingMaterial::where('slug', $slug)->firstOrFail();
    $training = $material->trainingSection->training;

    // ambil data subscriber training ini
    $trainingSubscriber = Auth::user()
        ->subscribedTrainings
        ->where('training_id', $training->id)
        ->firstOrFail();

    $completedTrainingMaterialsIds = $trainingSubscriber->completedTrainingMaterials()->pluck('id')->toArray();

    // ambil materi terakhir yg udah selesai
    $lastMaterialId = $trainingSubscriber->last_material_id;

    // kalau user mau akses material di luar urutan
    if (!$this->isNextMaterial($material, $lastMaterialId) && !in_array($material->id, $completedTrainingMaterialsIds)) {
        $lastMaterial = TrainingMaterial::find($lastMaterialId);

        return redirect()
            ->route('pelatihan.materi', $lastMaterial->slug)
            ->with('error', 'Selesaikan materi sebelumnya terlebih dahulu.');
    }

    // update progres kalau emang ini materi berikutnya
    $trainingSubscriber->last_material_id = $material->id;
    $trainingSubscriber->last_section_id = $material->trainingSection->id;
    $trainingSubscriber->save();

    $trainingSubscriber->refresh();

    return view('pelatihan.materi', compact('material', 'trainingSubscriber'));
}

private function isNextMaterial(TrainingMaterial $currentMaterial, ?int $lastMaterialId): bool
{
    if (!$lastMaterialId) {
        // kalau belum ada progres sama sekali, berarti material pertama
        $firstMaterial = $currentMaterial->trainingSection
            ->training
            ->trainingSections()
            ->orderBy('order')
            ->first()
            ->trainingMaterials()
            ->orderBy('order')
            ->first();

        return $currentMaterial->id === $firstMaterial->id;
    }

    $lastMaterial = TrainingMaterial::findOrFail($lastMaterialId);

    // ambil materi selanjutnya dalam section yang sama
    $nextInSameSection = TrainingMaterial::where('section_id', $lastMaterial->section_id)
        ->where('order', '>', $lastMaterial->order)
        ->orderBy('order')
        ->first();

    if ($nextInSameSection) {
        return $currentMaterial->id === $nextInSameSection->id;
    }

    // kalau udah habis, cek ke section berikutnya
    $nextSection = TrainingSection::where('training_id', $lastMaterial->trainingSection->training_id)
        ->where('order', '>', $lastMaterial->trainingSection->order)
        ->orderBy('order')
        ->first();

    if ($nextSection) {
        $firstMaterialInNextSection = $nextSection->trainingMaterials()->orderBy('order')->first();
        return $currentMaterial->id === $firstMaterialInNextSection->id;
    }

    return false; // kalau ga ada lanjutannya
}


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(TrainingMaterial $trainingMaterial)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, TrainingMaterial $trainingMaterial)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(TrainingMaterial $trainingMaterial)
    {
        //
    }
}
