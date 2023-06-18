<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\KategoriProgram;
use App\Models\Program;
use App\Models\Pendaftar;
use App\Models\Fasilitas;
use App\Models\Tentor;
use App\Models\Testimoni;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\Tentor::factory(10)->create();

        
        $this->call([
            FasilitasSeeder::class,
            KategoriProgramSeeder::class,
            ProgramSeeder::class,
            PendaftarSeeder::class,
            TestimoniSeeder::class,
            TentorSeeder::class,
            UserSeeder::class,

        ]);

        
    }
}
