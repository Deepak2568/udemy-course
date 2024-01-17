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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/', function () {
//     return view("welcome");
// });

// inhertitance template and layouts
Route::get("/", function () {
    return view("home.index");
});

Route::get("/contact", function () {
    return view("home.contact");
});

Route::get("/post/{id}", function ($id) { 
    $posts = [
        1 =>  [ 
            "title"=> "Welome",
            'name' => 'Jesuraja Deepak',
            "is_new" => true,
            "has_element" => 1
        ],
        2=> [ 
            "title"=> "Contact",
            'name' => 'Jesuraja Deepak Contact',
            "is_new" => false
        ]
    ] ;
    return view("home.post" , ['posts' => $posts[$id]]);
});