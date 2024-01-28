<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    //
    public function store(Request $request) {
        // dd($request->all());
        $this->validate($request, [
            "name" => "required",
            "email"=> "required",
            "password"=> "required|confirmed",
        ]);
        $student = new User;
        $student->name = $request->name;
        $student->email = $request->email;
        $student->password = Hash::make($request->password);

        $student->save();
        Auth::login($student);
        return redirect()->route("dashboard");
    }
}
