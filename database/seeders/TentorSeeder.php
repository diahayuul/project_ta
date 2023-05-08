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
            'nama' => 'Diah Ayu',
            'posisi' => 'programmer',
            'linkedin' => 'linkedin.com/in/diahayulst',
            'instagram' => 'instagram.com/diahayulst'
        ]);
    }
}
