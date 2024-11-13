<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DigitalmediaController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
# method get
use App\Http\Controllers\AnimalController;

// Method GET
Route::get('/animals', [AnimalController::class, 'index']);

// Method POST
Route::post('/animals/store', [AnimalController::class, 'store']);

// Method PUT
Route::put('/animals/{id}', [AnimalController::class, 'update']);
Route::put('/animals/update/{id}', [AnimalController::class, 'update']);

// Method DELETE
Route::delete('/animals/{id}', [AnimalController::class, 'destroy']);



// UTS BACKEND SEMESTER 3
Route::get('/news', [DigitalmediaController::class, 'index']); 
Route::post('/news', [DigitalmediaController::class, 'store']);
Route::put('/news/{id}', [DigitalmediaController::class, 'update']);
Route::get('/news/{id}', [DigitalmediaController::class, 'show']);
Route::delete('/news/{id}', [DigitalmediaController::class, 'destroy']);
Route::get('/news/search/{title}', [DigitalmediaController::class, 'search']);
Route::delete('/news/{id}', [DigitalmediaController::class, 'destroy']);
Route::get('/news/category/sport', [DigitalmediaController::class, 'getSport']);
Route::get('/news/category/finance', [DigitalmediaController::class, 'getFinance']);
Route::get('/news/category/automotive', [DigitalmediaController::class, 'getAutomotive']);


