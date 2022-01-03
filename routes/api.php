<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\Auth\LoginController;
use App\Http\Controllers\Api\Auth\RegisterController;
use App\Http\Controllers\Api\BabController;
use App\Http\Controllers\Api\StageController;
use App\Http\Controllers\Api\SoalController;
use App\Http\Controllers\Api\opsiJawabanController;
use App\Http\Controllers\Api\HistoryController;
use App\Http\Controllers\Api\StudentsController;
use App\Http\Controllers\Api\materialStudentController;
use App\Http\Controllers\Api\MaterialController;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('register', [RegisterController::class, 'register']);
Route::post('login', [LoginController::class, 'login']);
Route::post('refresh', [LoginController::class, 'refresh']);

Route::group(['middleware' => 'auth:api'], function(){
    Route::apiResource('bab', BabController::class);
    Route::apiResource('stage', StageController::class);
    Route::apiResource('soal', SoalController::class);
    Route::apiResource('opsiJawaban', opsiJawabanController::class);
    Route::apiResource('history', HistoryController::class);
    Route::apiResource('student', StudentsController::class);
    Route::apiResource('materialStudent', materialStudentController::class);
    Route::apiResource('material', MaterialController::class);
    Route::post('logout', [LoginController::class, 'logout']);
});
