<?php

namespace App\Http\Controllers;

use App\Models\Student;
// use App\Models\StudentsData;
use App\Models\StudentClass;
use Illuminate\Http\Request;
use Session;
use Validator;

class StudentsController extends Controller
{
    public function index(){
        return view("student.all", [
            "title" => "Student",
            "no" => 1,
            "students" => Student::all(),
        ]);
    }

    public function show($student)
    {
        return view('student.detail', [
            'title'=> 'detail-student',
            'student' => Student::find($student)
        ]);
    }

    public function create()
    {
        return view('student.add', [
            'title' => 'add-student',
            'student' => new Student(),
            'kelas' => StudentClass::all()
        ]);
    }

    public function store(Request $request){
        $validator = $request->validate(
            [
                'nis' => 'required|string',
                'nama' => 'required|string',
                'tanggal_lahir' => 'required|date',
                'kelas' => 'required|string',
                'alamat' => 'required|string'
            ]
        );

         $student = new Student();

         $student->nis = $validator['nis'];
         $student->nama = $validator['nama'];
         $student->tanggal_lahir = $validator['tanggal_lahir'];
         $student->kelas = $validator['kelas'];
         $student->alamat = $validator['alamat'];

         $student->save();

//        $result = Student::create($validator);

//        if($result){
            // Session::flash('Success', 'Data siswa berhasil di tambah');
            // return redirect('/student/all');

        return redirect('/admin/student')->with('Success', 'Data Siswa berhasil di tambah');
//        }
    }

    public function destroy(Student $student){
        $result = Student::destroy($student->id);

        if($result){
            return redirect('/admin/student')->with('Success', 'Data berhasil di hapus');
        }
    }

    public function edit(Student $student){
        $kelas = StudentClass::all();

        return view('student.edit',[
            'title' => 'edit-data',
            'student' => $student,
            'kelas' => $kelas
        ]);
    }

    public function update(Request $request, Student $student){
        $validator = $request->validate([
            'nis' => 'required|string',
            'nama' => 'required|string',
            'tanggal_lahir' => 'required|date',
            'kelas' => 'required|string',
            'alamat' => 'required|string'
        ]);

        $result = Student::where('id', $student->id)->update($validator);

        if($result){
            return redirect('/admin/student')->with('Success', 'Data berhasil di ubah');
        }
    }

}

