<?php

use App\Http\Controllers\DeleteController;
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
    return view('public_storage');
});

Route::get('/delete/public',[DeleteController::class,'publice_delete'])->name('public');
Route::get('/delete/storage',[DeleteController::class,'publice_storage'])->name('storage');
