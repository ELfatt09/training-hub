<?php

namespace App\Http\Controllers;

use App\Models\Major;
use App\Models\Training;
use Illuminate\Http\Request;

class Homepage extends Controller
{
    public static function index()
    {
        $topTrainings = Training::all();
        $majors = Major::all();

        $data = [
            'title' => 'Homepage',
            'topTrainings' => $topTrainings,
            'majors' => $majors
        ];


        return view('dashboard', $data);
    }
}
