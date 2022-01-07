<?php

use App\Http\Controllers\BabController;
use App\Http\Controllers\MaterialController;
use App\Http\Controllers\SoalController;
use App\Http\Controllers\StageController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\studentDetailController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('homepage');
});

Route::get('/profile', function () {
    return view('detailStudent');
});

Route::get('/quizView1', function () {
    return view('quizView2');
});

Route::resource('bab', BabController::class);
Route::resource('material', MaterialController::class);
Route::resource('stage', StageController::class);
Route::resource('soal', SoalController::class);
Route::resource('studentDetail', studentDetailController::class);
Route::get('/login', function(){
    return view('login');
});
Route::get('/register', function(){
    return view('register');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


