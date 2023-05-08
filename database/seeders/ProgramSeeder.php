<?php

namespace Database\Seeders;

use App\Models\Program;
use Illuminate\Database\Seeder;

class ProgramSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Program::create([
            'kategori_id' => 1,
            'nama' => 'Program 1-3 SD',
            'harga' => '115000',
            'deskripsi' => 'Program belajar untuk kelas 1-3 SD',
        ]);

        Program::create([
            'kategori_id' => 1,
            'nama' => 'Program 4-5 SD',
            'harga' => '125000',
            'deskripsi' => 'Program belajar untuk kelas 4&5 SD',
        ]);

        Program::create([
            'kategori_id' => 1,
            'nama' => 'Program 6 SD',
            'harga' => '135000',
            'deskripsi' => 'Program belajar untuk kelas 6 SD',
        ]);

        Program::create([
            'kategori_id' => 2,
            'nama' => 'Program Kelas 7 SMP',
            'harga' => '165000',
            'deskripsi' => 'Program belajar untuk kelas 7 SMP',
        ]);

        Program::create([
            'kategori_id' => 2,
            'nama' => 'Program Kelas 8 SMP',
            'harga' => '165000',
            'deskripsi' => 'Program belajar untuk kelas 8 SMP',
        ]);

        Program::create([
            'kategori_id' => 2,
            'nama' => 'Program Kelas 9 SMP',
            'harga' => '175000',
            'deskripsi' => 'Program belajar untuk kelas 9 SMP',
        ]);

        Program::create([
            'kategori_id' => 3,
            'nama' => 'Program Kelas 10 SMA',
            'harga' => '195000',
            'deskripsi' => 'Program belajar untuk kelas 10 SMA',
        ]);

        Program::create([
            'kategori_id' => 3,
            'nama' => 'Program Kelas 11 SMA',
            'harga' => '195000',
            'deskripsi' => 'Program belajar untuk kelas 11 SMA',
        ]);

        Program::create([
            'kategori_id' => 3,
            'nama' => 'Program Kelas 12 SMA',
            'harga' => '200000',
            'deskripsi' => 'Program belajar untuk kelas 12 SMA',
        ]);
    }
}
