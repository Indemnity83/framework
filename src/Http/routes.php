<?php

// API Routes ...
Route::group([
    'prefix' => 'api',
    'middleware' => 'api',
    'name' => 'api.',
    'namespace' => 'Solder\Framework\Http\Controllers',
], function () {

    // Modpack Routes ...
    Route::apiResource('modpacks', 'ModpacksController');
});
