<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Admin 1',
            'no_telp' => '089612325717',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('12345'),
            'is_admin' => true,
        ]);

        User::create([
            'name' => 'Ayu',
            'no_telp' => '089612325717',
            'email' => 'ayu@gmail.com',
            'password' => bcrypt('12345'),
        ]);
    }
}
