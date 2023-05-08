<?php

namespace Database\Seeders;

use App\Models\Fasilitas;
use Illuminate\Database\Seeder;

class FasilitasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Fasilitas::create([
            'nama' => 'Rekam Belajar Setiap Bulan',
            'icon' => 'fa-book',
            'deskripsi' => 'Diberikan laporan hasil belajar setiap bulannya.'
        ]);
        Fasilitas::create([
            'nama' => 'Pengajar Lulusan PTN Terbaik',
            'icon' => 'fa-user-graduate',
            'deskripsi' => 'Dibimbing oleh pengajar alumni PTN terbaik dengan IPK min 3.3'
        ]);
        Fasilitas::create([
            'nama' => 'Kelas Full AC',
            'icon' => 'fa-home',
            'deskripsi' => 'Ruangan kelas full AC dengan maksimal 10 siswa per-kelas.'
        ]);
        Fasilitas::create([
            'nama' => 'Pertemuan 4 Kali dalam Seminggu',
            'icon' => 'fa-chalkboard-teacher',
            'deskripsi' => 'Pertemuan dilaksanakan 4 kali dalam seminggu dengan durasi 60 menit.'
        ]);
    }
}
