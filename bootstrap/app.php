<?php

use App\Http\Middleware\AppartientCampus;
use App\Http\Middleware\InferieurA8Places;
use App\Http\Middleware\PossedeVoiture;
use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware): void {
        $middleware->alias([
            'employe.possedeVoiture' => PossedeVoiture::class,
            'employe.appartientCampus' => AppartientCampus::class,
            'voitures.inferieurA8Places' => InferieurA8Places::class,
        ]);
    })
    ->withExceptions(function (Exceptions $exceptions): void {
        //
    })->create();
