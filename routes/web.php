<?php

use App\Http\Controllers\EmployeController;
use App\Http\Controllers\VoitureController;
use Illuminate\Support\Facades\Route;

Route::get('/employes', [EmployeController::class, 'index'])->name('employes.index');
Route::get('/employe/{id}', [EmployeController::class, 'show'])
    ->middleware('employe.possedeVoiture')
    ->middleware('employe.appartientCampus')
    ->name('employe.show');
Route::get('/employe/{id}/verifier', [EmployeController::class, 'verifier'])->name('employes.verifier');

Route::get('/voitures/create/{id}', [VoitureController::class, 'create'])->name('voitures.create');

Route::post('/voitures/{id}/store', [VoitureController::class, 'store'])->name('voitures.store');

//Route::get('/voitures', [VoitureController::class, 'index'])->name('voitures.index');
//
Route::get('/voitures/{id}', [VoitureController::class, 'show'])
    ->middleware('voitures.inferieurA8Places')
    ->name('voitures.show');

Route::get('/', function () {
    return view("layouts.base");
});

//Route::resource('employes', EmployeController::class);
//Route::resource('voitures', VoitureController::class);

