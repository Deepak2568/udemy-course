<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ResourceController;
use App\Http\Controllers\SingleController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Controller can group related request handling logic into a single class
// It is a main part of the laravel framework
// C statnds for Controller

Route::get('/home',[HomeController::class,'index'])->name('c.home');
Route::get('/about',[HomeController::class,'about'])->name('c.about');

// single Action Controller
Route::get('/invoke',SingleController::class);

// Resource Controller
Route::resource('user', ResourceController::class)->only('index','show');
// Route::resource('user', ResourceController::class)->except('index','show');
// Route::resource('user', ResourceController::class);