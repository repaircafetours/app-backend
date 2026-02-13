<?php

use App\Http\Controllers\VolunteerController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/volunteer', [VolunteerController::class, 'index']);

Route::get('/volunteer/{id}', [VolunteerController::class, 'show']);
