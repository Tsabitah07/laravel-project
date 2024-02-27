<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\StudentClass;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboard($id)
    {
        return view("admin.dashboard", [
            "title" => "Dashboard",
            'user' => User::find($id)
        ]);
    }

    public function student(){
        return view('admin/student', [
            'student' => Student::latest()->simplePaginate(7)
        ]);
    }

    public function kelas(){
        return view('admin.class',[
            'class' => StudentClass::latest()->simplePaginate(5),
            'no'=>1
        ]);
    }
}
