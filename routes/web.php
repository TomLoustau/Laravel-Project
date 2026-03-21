<?php

use App\Http\Controllers\EmployeController;
use App\Http\Controllers\VoitureController;
use Illuminate\Support\Facades\Route;

// Route::get('/employes', [EmployeController::class, 'index'])->name('employes.index');
// Route::get('/employe/{id}', [EmployeController::class, 'show'])->name('employes.show');
Route::get('/employe/{id}/verifier', [EmployeController::class, 'verifier'])->name('employes.verifier');

Route::get('/', function () {
    return view("layouts.base");
});

Route::resource('employes', EmployeController::class);
Route::resource('voitures', VoitureController::class);

