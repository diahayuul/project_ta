<?php

namespace Database\Seeders;

use App\Models\Testimoni;
use Illuminate\Database\Seeder;

class TestimoniSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Testimoni::create([
            'nama' => 'Aqila Nahda Rafanda',
            'prestasi' => 'Rangking 5',
            'asal_sekolah' => 'Kelas 2- UPT SD Negeri 24 Gresik',
            'deskripsi' => 'Temannya banyak, senang sekali, ada guru baik, belajar senang, ada game kuis. Belajar menjadi nyaman. Belajar menjadi sehat, ruangannya bersih'
        
        ]);
        Testimoni::create([
            'nama' => 'Christie Mulyanto',
            'prestasi' => 'Rangking 3',
            'asal_sekolah' => 'Kelas 2- UPT SD Negeri 23 Gresik',
            'deskripsi' => 'Aku les di LBB GET aku senang sekali, les disini karena banyak temannya. Kelasnya memakai AC dan guru favoritku Bu Putri, Bu Anita, Pak Rahmat. Temanku baik semua. Ayo jadi juara!!!'
        
        ]);
        Testimoni::create([
            'nama' => 'Kamila Riski Muslimah',
            'prestasi' => 'Rangking 3',
            'asal_sekolah' => 'Kelas 5-UPT SD Negeri 28 Gresik',
            'deskripsi' => 'Belajar di GET seru sekali, ruangannya dingin. Teman-teman baik semua, tempatnya nyaman sekali'
        
        ]);
        Testimoni::create([
            'nama' => 'Viona Deswita M.',
            'prestasi' => 'Rangking 3',
            'asal_sekolah' => 'Kelas 9-UPT SMP Negeri 3 Gresik',
            'deskripsi' => 'Selama saya mengikuti bimbingan belajar di GET, saya mendapatkan banyak wawasan dan ilmu pengetahuan yang belum saya ketahui. Selain itu saya juga bertemu banyak guru yang sangat ramah dan disiplin. Mari bergabung dengan GET untuk menjadi juara.'
        
        ]);
    }
}
