<?php

namespace App\Http\Controllers;

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
        $trainingSubscriber = Auth::user()->subscribedTrainings->findOrFail($material->trainingSection->training->id)->first();

        $completedTrainingMaterialsIds = Auth::user()->subscribedTrainings->findOrFail($training->id)->first()->completedTrainingMaterials()->pluck('id')->toArray();

        if (!in_array($material->id, $completedTrainingMaterialsIds)) {
            $this->nextMaterial($material->id, $trainingSubscriber->last_material_id);
        }

        return view('pelatihan.materi', compact('material', 'trainingSubscriber'));
    }

    public function nextMaterial(int $materialId, int $lastMaterialId) {
        #check if there is a next material
        $material = TrainingMaterial::findOrFail($materialId);
        $lastMaterial = TrainingMaterial::findOrFail($lastMaterialId);

                $trainingSubscriber = Auth::user()->subscribedTrainings->findOrFail($material->trainingSection->training->id)->first();


        #check if this material is one material ahead 1 order from last material and in the same section 
        if (!$material->order == $lastMaterial->order + 1 && $material->section_id == $lastMaterial->section_id) {
            #check in the next section if its first material are the next material of the last material
            if($materialId == $lastMaterial->section->trainingSections()->where('order', '>', $lastMaterial->section->order)->orderBy('order')->first()->trainingMaterials()->orderBy('order')->first()->id) {
                $nextMaterial = $material;

                $trainingSubscriber->last_section_id = $lastMaterial->section_id;

            } else {
                return back()->with('error', 'Anda belum menyelesaikan materi sebelumnya');
            
            }
        }

        $nextMaterial = $material;

        $trainingSubscriber->last_material_id = $material->id;

        $trainingSubscriber->save();

        return view('pelatihan.materi', compact('nextMaterial', 'trainingSubscriber'))->with('success', 'Anda berhasil menyelesaikan materi sebelumnya');

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
