<?php

namespace App\Http\Controllers;

use App\Models\Training;
use App\Models\TrainingMaterial;
use App\Models\trainingSubscriber;
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
        $trainingId = $request->training_id;
        $userId = Auth::user()->id;

        try{
        $subscriber = trainingSubscriber::where('training_id', $trainingId)
            ->where('user_id', $userId)
            ->first();
        }
        catch(\Exception $e) {
            $subscriber = null;
        }

        if ($subscriber == null) {
            $lastSection = TrainingSection::where('training_id', $trainingId)
    ->orderBy('order')
    ->first();

$lastMaterial = $lastSection 
    ? TrainingMaterial::where('section_id', $lastSection->id)
        ->orderBy('order')
        ->first()
    : null;


            $subscriber = trainingSubscriber::create([
                'training_id' => $trainingId,
                'user_id' => $userId,
                'last_section_id' => $lastSection->id,
                'last_material_id' => $lastMaterial->id,
            ]);
        }


        return redirect()->route('training.show', ['slug' => Training::find($trainingId)->slug]);
    }

    /**
     * Display the specified resource.
     */
    public function show(trainingSubscriber $trainingSubscriber)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(trainingSubscriber $trainingSubscriber)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, trainingSubscriber $trainingSubscriber)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(trainingSubscriber $trainingSubscriber)
    {
        //
    }
}
