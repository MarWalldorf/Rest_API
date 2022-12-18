<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PeopleController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::get('walldorf/305420/people{people}',[PeopleController::class, 'show_all']);
Route::get('walldorf/305420/people{people}',[PeopleController::class, 'show']);
Route::post('walldorf/305420/people{people}',[PeopleController::class, 'create']);
Route::put('walldorf/305420/people{people}',[PeopleController::class, 'update']);
Route::delete('walldorf/305420/people{people}',[PeopleController::class, 'destroy']);


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::apiResource('people',PeopleController::class);
