<?php

namespace App\Http\Controllers;

use App\Models\Major;
use App\Models\Training;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TrainingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public static function index(Request $request)
    {
        $search = $request->query('search');
        $selectedMajor = $request->query('major');
        $type = $request->query('type');

        $trainings = Training::query();

        if (!empty($search)) {
            $trainings->where(function ($query) use ($search) {
                $query->where('title', 'LIKE', "%{$search}%")
                    ->orWhere('description', 'LIKE', "%{$search}%");
                });
            }

        if (!empty($selectedMajor)) {
            $trainings->whereHas('major', function ($query) use ($selectedMajor) {
                $query->where('major_id', $selectedMajor);
            });
        }

        if (!empty($type)) {
            $trainings->where('type', $type);
        }

        $majors = Major::all();

        $trainings = $trainings->get();

        if ($trainings->isEmpty()) {
            $trainings = collect();
        }

        return view('pelatihan.pelatihan', compact('trainings', 'majors'));
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
    public static function show(string $slug)
    {
        $completedTrainingMaterialsIds = [];
        $completedTrainingSectionsIds = [];
        $training = Training::where('slug', $slug)->with('trainingSections.trainingMaterials', 'trainingReviews')->firstOrFail();
        if (Auth::user()->subscribedTrainings()->where('training_id', $training->id)->exists()) {
             $completedTrainingSectionsIds = Auth::user()->subscribedTrainings->findOrFail($training->id)->first()->completedTrainingSections()->pluck('id')->toArray();
        $completedTrainingMaterialsIds = Auth::user()->subscribedTrainings->findOrFail($training->id)->first()->completedTrainingMaterials()->pluck('id')->toArray();
        }
       


        
        return view('pelatihan.detail_pelatihan', compact('training', 'completedTrainingSectionsIds', 'completedTrainingMaterialsIds'));
    }

    public function nextMaterial(int $slug) {
        
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Training $training)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Training $training)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Training $training)
    {
        //
    }
}

