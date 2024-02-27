<?php

namespace App\Models;

class  About
{
    public static function all()
    {
        $about = new \stdClass();
        $about->id = 7;
        $about->nis = "8776564";
        $about->nama = "Inas";
        $about->kelas = "11 PPLG 2";
        $about->image = "image/profile.jpeg";

        return $about;
    }
}
