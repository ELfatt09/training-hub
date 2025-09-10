<?php

namespace App\Http\Controllers;

use App\Models\Training;
use App\Models\TrainingMaterial;
use App\Models\trainings_subscriber;
use App\Models\TrainingSection;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TrainingsSubscriberController extends Controller
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
    public function create(Request $request)
    {
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $trainingId = $request->input('training_id');
        $userId = Auth::user()->id;

        $subscriber = trainings_subscriber::where('training_id', $trainingId)
            ->where('user_id', $userId)
            ->first();

        if (!$subscriber) {
            $lastSectionId = TrainingSection::where('training_id', $trainingId)->orderBy('order')->first()->id;
            trainings_subscriber::create([
                'training_id' => $trainingId,
                'user_id' => $userId,
                'last_section_id' => $lastSectionId,
                'last_material_id' => TrainingMaterial::where('training_id', $trainingId)->orderBy('order')->first()->id,
            ]);
        }

        return redirect()->route('training.show', ['slug' => Training::find($trainingId)->slug]);
    }

    /**
     * Display the specified resource.
     */
    public function show(trainings_subscriber $trainings_subscriber)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(trainings_subscriber $trainings_subscriber)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, trainings_subscriber $trainings_subscriber)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(trainings_subscriber $trainings_subscriber)
    {
        //
    }
}
