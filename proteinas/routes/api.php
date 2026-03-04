<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TipoController;
use App\Http\Controllers\ProteinaController;

Route::get('/tipos',[TipoController::class,'index']);
Route::post('/tipos',[TipoController::class,'store']);
Route::get('/tipos/{id}',[TipoController::class,'show']);
Route::put('/tipos/{id}',[TipoController::class,'update']);
Route::delete('/tipos/{id}',[TipoController::class,'destroy']);

Route::get('/proteinas',[ProteinaController::class,'index']);
Route::post('/proteinas',[ProteinaController::class,'store']);
Route::get('/proteinas/{id}',[ProteinaController::class,'show']);
Route::put('/proteinas/{id}',[ProteinaController::class,'update']);
Route::delete('/proteinas/{id}',[ProteinaController::class,'destroy']);
