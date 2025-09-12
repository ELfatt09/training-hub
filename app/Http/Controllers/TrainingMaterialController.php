<?php

namespace App\Http\Controllers;

use App\Models\TrainingMaterial;
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
        $trainingSubscriber = Auth::user()->subscribedTrainings->findOrFail($material->trainingSection->training->id)->first();
        return view('pelatihan.materi', compact('material', 'trainingSubscriber'));
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
