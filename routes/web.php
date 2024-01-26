<?php

use Illuminate\Support\Facades\Route;
use Intervention\Image\Laravel\Facades\Image;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    $image = Image::make('images/example.jpg')->resize('300','200');
    return $image->response('jpg');
});
