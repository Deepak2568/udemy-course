<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UploadController extends Controller
{
    //
    public function upload() {
        return view("imageupload");
    }
    public function store(Request $request) {
        $request->validate([
            "image" => "required|image|mimes:png,jpg,jpeg,gif,svg|max:2048"
        ]);

        // create image with name based on the time
        $imageup = time() .".". $request->image->extension();
        // move image with images folder inside the public folder
        $request->image->move(public_path("images"), $imageup);
        return back()->with("success","Image Upload Successfully")->withImage($imageup);
    }
}
