<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\creatineController;

Route::get('/creatinas', [creatineController::class, 'index']);
Route::get('/creatinas/{id}',[creatineController::class, 'show']);

Route::post('/creatinas',[creatineController::class, 'store']);
Route::put('/creatinas/{id}',[creatineController::class,'update']);
Route::delete('/creatinas/{id}',[creatineController::class,'destroy']);