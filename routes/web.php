<?php

use App\Http\Controllers\NinjaController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/tut', function () {
    return view('tuts.home');
});

Route::get('/tut/ninjas', [NinjaController::class, 'index'])->name('ninjas.index');

Route::get('/tut/ninjas/create', [NinjaController::class, 'create'])->name('ninjas.create');

Route::get('/tut/ninjas/{id}', [NinjaController::class, 'show'])->name('ninjas.show');
