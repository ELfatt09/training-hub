<?php

namespace App\Http\Controllers;

use App\Models\Training;
use App\Http\Controllers\TrainingsSubscriberController;
use App\Models\TrainingMaterial;
use App\Models\TrainingSection;
use App\Models\trainingSubscriber;
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
    if (!in_array($material->id, $completedTrainingMaterialsIds)) {
        $trainingSubscriber->last_material_id = $material->id;
        $trainingSubscriber->last_section_id = $material->trainingSection->id;
        $trainingSubscriber->save();

    }


    $completedTrainingSectionsIds = $trainingSubscriber->completedTrainingSections()->pluck('id')->toArray();
    $completedTrainingMaterialsIds = $trainingSubscriber->completedTrainingMaterials()->pluck('id')->toArray();

    $previousTrainingMaterial = TrainingMaterial::where('section_id', $material->section_id)
        ->where('order', '<', $material->order)
        ->orderBy('order', 'desc')
        ->first();

    $nextTrainingMaterial = TrainingMaterial::where('section_id', $material->section_id)
        ->where('order', '>', $material->order)
        ->orderBy('order')
        ->first();
    
    $isLastMaterial = $this->isLastMaterialInTraining($material->id);

    if ($isLastMaterial) {
        $trainingSubscriber->is_completed = true;
        $trainingSubscriber->save();
    }

    $trainingSubscriber->refresh();



    return view('pelatihan.materi', compact('material', 'trainingSubscriber', 'training', 'completedTrainingSectionsIds', 'completedTrainingMaterialsIds', 'previousTrainingMaterial', 'nextTrainingMaterial', 'isLastMaterial'));
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

function isLastMaterialInTraining(int $materialId){
    $material = TrainingMaterial::find($materialId);
    $section = $material->trainingSection;
    $training = $material->trainingSection->training;
    
    if (!$section->order === $training->trainingSections->max('order')){
        return false;
    }

    if (!$material->order === $section->trainingMaterials->max('order')){
        return false;
    }

    return true;
}

    public function isTrainingCompleted(int $trainingSubscriberId){
        $trainingSubscriber = trainingSubscriber::find($trainingSubscriberId);
        if ($trainingSubscriber->last_section_id === TrainingSection::where('training_id', $trainingSubscriber->training_id)->max('order')->id && $trainingSubscriber->last_material_id === TrainingMaterial::where('section_id', $trainingSubscriber->last_section_id)->max('order')->id){
            $trainingSubscriber->is_completed = true;
            return true;
        }
        return false;
    }
    /**
     * Show the form for editing the specified resource.
     */






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
