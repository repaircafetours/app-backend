<?php

use App\Http\Controllers\VisitorController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get("/v1/visitors/{visitor}", [VisitorController::class, 'show']);
Route::get("/v1/visitors", [VisitorController::class, 'index']);
Route::post("/v1/visitors", [VisitorController::class, 'store']);
Route::patch("/v1/visitors/{visitor}", [VisitorController::class, 'update']);
Route::delete("/v1/visitors/{visitor}", [VisitorController::class, 'destroy']);