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

$data = [
    1 =>  [ 
        "title"=> "User1",
        'name' => 'Jesuraja Deepak',
        "dob" => '1996-10-26'
    ],
    2=> [ 
        "title"=> "User2",
        'name' => 'Abishake',
        "dob" => '2001-08-28'
    ],
    3=> [ 
        "title"=> "User3",
        'name' => 'Paulraj',
        "dob" => '1960-08-28'
    ],
    4=> [ 
        "title"=> "User4",
        'name' => 'Rani',
        "dob" => '1965-08-28'
    ]
] ;

Route::get('/foreach', function () use($data){ 
    return view('home.foreach', ['data'=> $data]);
});