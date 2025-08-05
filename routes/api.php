<?php

use App\Http\Controllers\Api\SclassController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');


Route::get('/class', [SclassController::class, 'index']);
Route::post('/class/store', [SclassController::class, 'store']);
