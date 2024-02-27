<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;

class StudentsData
{
    private static $students = [
        [
            "id" => 1,
            "nis" => "56787",
            "nama" => "Kia",
            "kelas" => "11 PPLG 2",
            "alamat" => "jl. depok 23"
        ], [
            "id" => 2,
            "nis" => "76587",
            "nama" => "Shinta",
            "kelas" => "11 PPLG 2",
            "alamat" => "jl. jepara 27"
        ], [
            "id" => 3,
            "nis" => "45457",
            "nama" => "Cita",
            "kelas" => "11 PPLG 2",
            "alamat" => "jl. tangsel 24"
        ], [
            "id" => 4,
            "nis" => "34576",
            "nama" => "Mazaya",
            "kelas" => "11 Animasi 2",
            "alamat" => "jl. bekasi 25"
        ], [
            "id" => 5,
            "nis" => "87764",
            "nama" => "Keesa",
            "kelas" => "11 Animasi 2",
            "alamat" => "jl. jogja 29"
        ]
    ];

    public static function all()
    {
        return self::$students;
    }
}
