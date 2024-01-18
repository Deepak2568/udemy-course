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


// Route::get('fun/response', function () use($data) {
//     return response($data, 201)->header('content-type', 'application/json')->cookie('init_cookie','Jesuraja Deepak' , 3600);
// });

Route::get('fun/json', function () use($data) {
    return response()->json($data, 200);
});

Route::get('fun/away', function () {
    return redirect()->away('https://google.com');
});

// return back - it is used to return back url
// ->name('') - it declared named route

// filedownload
Route::get('fun/download', function () {
    return response()->download(public_path('PXL_20221112_064829485.jpg'));
});

// Group middleware

Route::prefix('/fun')->name('fun.')->group(function () use($data) {
    Route::get('response', function () use($data) {
        return response($data, 201)->header('content-type', 'application/json')->cookie('init_cookie','Jesuraja Deepak' , 3600);
    })->name('respnses');
    
    Route::get('json', function () use($data) {
        return response()->json($data, 200);
    })->name('json');
    
    Route::get('away', function () {
        return redirect()->away('https://google.com');
    })->name('away');
    
    // return back - it is used to return back url
    // ->name('') - it declared named route
    
    // filedownload
    Route::get('download', function () {
        return response()->download(public_path('PXL_20221112_064829485.jpg'));
    })->name('download');
});


// Request user input
Route::get('/userinput', function () {
    // dd(request()->all());
    dd((int)request()->input('limit',1));
});

// Middleware
Route::get('/middleware', function () {
    return 'welcome middleware';
})->middleware('auth');