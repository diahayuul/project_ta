<?php

namespace Database\Seeders;

use App\Models\KategoriProgram;
use Illuminate\Database\Seeder;

class KategoriProgramSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        KategoriProgram::create([
            'nama_kategori' => 'SD',
            'deskripsi' => 'Sobat GET yang masih duduk di bangku SD tentunya ingin masuk SMP favorit dong? Bergabung dengan GET untuk membantu meningkatkan prestasimu.'
        ]);
        KategoriProgram::create([
            'nama_kategori' => 'SMP',
            'deskripsi' => 'Sobat GET yang duduk di bangku SMP tentunya ingin masuk SMA favorit dong? Bergabung dengan GET untuk membantu meningkatkan prestasimu.'
        ]);
        KategoriProgram::create([
            'nama_kategori' => 'SMA',
            'deskripsi' => 'Sobat GET yang duduk di bangku SMA tentunya ingin masuk PT favorit dong? Bergabung dengan GET untuk membantu meningkatkan prestasimu.'
        ]);
    }
}
