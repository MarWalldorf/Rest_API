<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PersonController;


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('walldorf/305420/person',[PersonController::class,'index']);
Route::get('walldorf/305420/person/{id}',[PersonController::class,'show']);
Route::post('walldorf/305420/person',[PersonController::class,'upload']);
Route::put('walldorf/305420/person/edit/{id}',[PersonController::class,'edit']);
Route::delete('walldorf/305420/person/edit/{id}',[PersonController::class,'delete']);

