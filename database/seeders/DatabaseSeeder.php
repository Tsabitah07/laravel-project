<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\StudentClass;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
         StudentClass::create([
             'nama_kelas' => 'X RPL 1'
         ]);

        StudentClass::create([
            'nama_kelas' => 'X RPL 2'
        ]);

        StudentClass::create([
            'nama_kelas' => 'XI RPL 1'
        ]);

        StudentClass::create([
            'nama_kelas' => 'XI RPL 2'
        ]);

        StudentClass::create([
            'nama_kelas' => 'XII RPL 1'
        ]);

        StudentClass::create([
            'nama_kelas' => 'XII RPL 2'
        ]);

        StudentClass::create([
            'nama_kelas' => 'X Animasi 1'
        ]);

        StudentClass::create([
            'nama_kelas' => 'X Animasi 2'
        ]);

        StudentClass::create([
            'nama_kelas' => 'XI Animasi 1'
        ]);

        \App\Models\Student::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
