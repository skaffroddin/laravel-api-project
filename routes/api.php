<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;


//Public Api
Route::get('/students',[StudentController::class, 'index']);
Route::get('/students/{id}',[StudentController::class, 'show']);
Route::post('/students',[StudentController::class, 'store']);
Route::put('/students/{id}',[StudentController::class, 'update']);
Route::delete('/students/{id}', [StudentController::class, 'destroy']);
Route::get('/students/search/{city}', [StudentController::class, 'search']);



