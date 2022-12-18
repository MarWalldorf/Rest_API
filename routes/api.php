<?php
declare(strict_types=1);
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PersonController;
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
Route::get('walldorf/305420/people{people}',[PersonController::class, 'show_all']);
Route::get('walldorf/305420/people{people}',[PersonController::class, 'show']);
Route::post('walldorf/305420/people{people}',[PersonController::class, 'create']);
Route::put('walldorf/305420/people{people}',[PersonController::class, 'update']);
Route::delete('walldorf/305420/people{people}',[PersonController::class, 'destroy']);


