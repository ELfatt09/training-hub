<?php

use App\Http\Controllers\Homepage;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TrainingController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route('dashboard');
});

Route::get('/dashboard', function () {
    return Homepage::index();
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/detail-pelatihan/{slug}', [TrainingController::class, 'show'])->name('detail-pelatihan');

Route::get('/pelatihan', [TrainingController::class, 'index'])->name('pelatihan');

Route::get('/materi', function(){
    return view('pelatihan/materi');
})->name('materi');

Route::get('/magang', function(){
    return view('magang/magang');
})->name('magang');

Route::get('/detail-magang', function(){
    return view('magang/detail-magang');
})->name('detail-magang');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
