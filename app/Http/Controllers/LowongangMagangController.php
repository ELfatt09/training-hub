<?php

namespace App\Http\Controllers;

use App\Models\LowonganMagang;
use Illuminate\Http\Request;

class LowongangMagangController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $lowonganMagangs = LowonganMagang::all();
        return view('magang.magang', compact('lowonganMagangs'));
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
        $AnotherLowonganMagangs = LowonganMagang::all();
        $lowonganMagang = LowonganMagang::where('slug', $slug)->first();
        return view('magang.detail-magang', compact('lowonganMagang', 'AnotherLowonganMagangs'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(LowonganMagang $LowonganMagang)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, LowonganMagang $LowonganMagang)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(LowonganMagang $LowonganMagang)
    {
        //
    }
}
