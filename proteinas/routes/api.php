<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TipoController;

Route::get('/tipos',[TipoController::class,'index']);
Route::post('/tipos',[TipoController::class,'store']);
Route::get('/tipos/{id}',[TipoController::class,'show']);
Route::put('/tipos/{id}',[TipoController::class,'update']);
Route::delete('/tipos/{id}',[TipoController::class,'destroy']);
