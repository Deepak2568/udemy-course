<?php

namespace App\Http\Controllers;

use App\Mail\TestMailer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class TestMail extends Controller
{
    //
    public function index() {
        // dd($name);
        mail::to("jesurajadeepak@gmail.com")->send(new TestMailer());
        return view("email.test");
    }
}
