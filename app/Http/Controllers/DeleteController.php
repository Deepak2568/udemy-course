<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
class DeleteController extends Controller
{
    //
    public function publice_delete() {
        if(File::exists(public_path("images/download.jpg"))) {
            File::delete(public_path("images/download.jpg"));
            dd('File Delete Successfully');
        } else {
            dd('File not found');
        }
    }

    public function publice_storage() {
        if(Storage::exists("public/download.jpg")) {
            Storage::delete("public/download.jpg");
            dd('Storage Delete Successfully');
        }else {
            dd('File not found');
        }
    }
}
