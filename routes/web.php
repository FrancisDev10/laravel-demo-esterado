<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ControllerCalculator;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/calculator', [ControllerCalculator::class, 'showCalculatorPage']);


  


Route::get('/hehe', function () {
    return view('demo');

});
  

Route::get('/index', function () {
    return view('mypages.index');
})->name('index');//name routes

  
Route::get('/gallery', function () {
    return view('mypages.gallery');
})->name('gallery');


Route::get('/services', function () {
    return view('mypages.services');
})->name('services');





Route::get('/hehe2', function () {
    return view('demo2');

})->name('dionarD');
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
