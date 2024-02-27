<?php

namespace App\Http\Controllers;

use App\Models\StudentClass;
use Illuminate\Http\Request;
use Session;

class ClassController extends Controller
{
    public function index()
    {
        return view('class.all', [
            "title" => "kelas",
            "no" => 1,
            "class" => StudentClass::all()
        ]);
    }

    public function edit($kelas)
    {
        return view('class.edit',[
            "title" => "edit-kelas",
            "kelas" => StudentClass::find($kelas)
        ]);
    }

    public function update(Request $request, $kelas)
    {
        $kelas = StudentClass::find($kelas);

        if ($kelas) {
            $kelas->update([
                'nama_kelas' => $request->nama_kelas,
            ]);

            return redirect('/admin/class')->with('success', 'Data kelas berhasil diperbarui.');
        }
    }

    public function destroy(StudentClass $kelas)
    {
        $result = StudentClass::destroy($kelas->id);

        if ($result) {
            return redirect('/admin/class')->with('success', 'Data kelas berhasil dihapus.');
        }
    }

    public function create()
    {
        return view('class.add', [
            'title' => 'Add Kelas',
            'kelas' => new StudentClass(),
        ]);
    }

    public function store(Request $request)
    {
        $validator = $request->validate([
            'nama_kelas' => 'required',
        ]);

         StudentClass::create($validator);

         return redirect('/admin/class')->with('success', 'Data kelas berhasil ditambahkan.');
    }
}
