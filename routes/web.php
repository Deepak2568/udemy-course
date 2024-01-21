<?php

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


// Tinker is a command line tool. It is used to create a data and insert into database manually
// save()
// delete()
// find()
// make()
// create()

// Collections : 
// collection class is a poweful laravel wrapper on array type
// Collections have lot of handly method that allows to filtering, sorting and other array specific.
// ->first() - it is used to take the first record of the database.
// ->count()