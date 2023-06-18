<?php

namespace Database\Seeders;

use App\Models\Tentor;
use Illuminate\Database\Seeder;

class TentorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Tentor::create([
            'nama' => 'Rachmad',
            'posisi' => 'Pendiri',
            'linkedin' => 'https://www.linkedin.com/home',
            'instagram' => 'https://www.instagram.com/',
        ]);
        Tentor::create([
            'nama' => 'Raka',
            'posisi' => 'Tentor Matematika',
            'linkedin' => 'https://www.linkedin.com/home',
            'instagram' => 'https://www.instagram.com/',
        ]);
        Tentor::create([
            'nama' => 'Yunita',
            'posisi' => 'Tentor Bahasa Inggris',
            'linkedin' => 'https://www.linkedin.com/home',
            'instagram' => 'https://www.instagram.com/',
        ]);
        Tentor::create([
            'nama' => 'Rachmad',
            'posisi' => 'Tentor Bahasa Indonesia',
            'linkedin' => 'https://www.linkedin.com/home',
            'instagram' => 'https://www.instagram.com/',
        ]);
        Tentor::create([
            'nama' => 'Mulan',
            'posisi' => 'Tentor IPA',
            'linkedin' => 'https://www.linkedin.com/home',
            'instagram' => 'https://www.instagram.com/',
        ]);
    }
}
