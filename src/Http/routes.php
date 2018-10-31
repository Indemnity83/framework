<?php

// API Routes ...
Route::prefix('api')
    ->name('api.')
    ->middleware('api')
    ->namespace('Solder\Framework\Http\Controllers')
    ->group(function () {

        // Modpack Routes ...
        Route::apiResource('modpacks', 'ModpacksController');
    });
