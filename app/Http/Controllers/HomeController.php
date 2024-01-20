<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index() {
        return view("cont.home");
    }

    public function about() {
        return view("cont.about");
    }
}
