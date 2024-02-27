<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $fillable = [
        'nis',
        'nama',
        'tanggal_lahir',
        'kelas',
        'alamat'
    ];

    public function Kelas()
    {
        return $this->belongsTo(StudentClass::class, 'kelas', 'id');
    }
}
