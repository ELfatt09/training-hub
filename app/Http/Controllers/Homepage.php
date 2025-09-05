<?php

namespace App\Http\Controllers;

use App\Models\Training;
use Illuminate\Http\Request;

class Homepage extends Controller
{
    public static function index()
    {
        $topTrainings = Training::all();

        $data = [
            'title' => 'Homepage',
            'topTrainings' => $topTrainings,
        ];


        return view('dashboard', $data);
    }
}
