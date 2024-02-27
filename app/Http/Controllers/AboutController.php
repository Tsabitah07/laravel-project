<?php

namespace App\Http\Controllers;

use App\Models\About;

class AboutController extends Controller
{
    public function index()
    {
        $about = About::all();
        return view("about", [
            "title" => "About",
            "nama" => $about->nama,  // Access the properties of the $about object
            "kelas" => $about->kelas,
            "image" => $about->image,
        ]);
    }
}
