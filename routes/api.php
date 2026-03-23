<?php

use App\Http\Controllers\Api\CampuseController;
use App\Http\Controllers\Api\EmployeController;
use App\Http\Controllers\Api\TrajetController;
use App\Http\Controllers\Api\VoitureController;
use Illuminate\Support\Facades\Route;

Route::apiResource('employe', EmployeController::class);
Route::apiResource('campuse', CampuseController::class);
Route::apiResource('trajet', TrajetController::class);
Route::apiResource('voiture', VoitureController::class);
