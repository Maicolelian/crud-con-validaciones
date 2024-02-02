<?php

use App\Http\Controllers\PacienteController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::resource('pacientes', PacienteController::class);

Auth::routes();

Route::get('/home', [App\Http\Controllers\PacienteController::class, 'index'])->name('home');
