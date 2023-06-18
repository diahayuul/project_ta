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
            'name' => 'Agnesia Mayrich',
            'no_telp' => '082131222999',
            'email' => 'agnesia@gmail.com',
            'password' => bcrypt('12345'),
        ]);
        User::create([
            'name' => 'Aqila Nahda',
            'no_telp' => '082134598788',
            'email' => 'aqila@gmail.com',
            'password' => bcrypt('12345'),
        ]);
        User::create([
            'name' => 'Asyifa Rahmawati',
            'no_telp' => '081330555735',
            'email' => 'asyifa@gmail.com',
            'password' => bcrypt('12345'),
        ]);
        User::create([
            'name' => 'Aurelia Esyifa',
            'no_telp' => '0896123455544',
            'email' => 'aurelia@gmail.com',
            'password' => bcrypt('12345'),
        ]);
        User::create([
            'name' => 'Christie Mulyanto',
            'no_telp' => '081325444342',
            'email' => 'christie@gmail.com',
            'password' => bcrypt('12345'),
        ]);
        User::create([
            'name' => 'Kamila Rizki',
            'no_telp' => '082111155544',
            'email' => 'kamila@gmail.com',
            'password' => bcrypt('12345'),
        ]);
        User::create([
            'name' => 'M. Rizqi Al-Fattah',
            'no_telp' => '089765432111',
            'email' => 'rizqi@gmail.com',
            'password' => bcrypt('12345'),
        ]);
        User::create([
            'name' => 'M. Zayyin',
            'no_telp' => '085677225533',
            'email' => 'zayyin@gmail.com',
            'password' => bcrypt('12345'),
        ]);
        User::create([
            'name' => 'M. Rasyid',
            'no_telp' => '082131269948',
            'email' => 'rasyid@gmail.com',
            'password' => bcrypt('12345'),
        ]);
        User::create([
            'name' => 'Naufal Abiyu',
            'no_telp' => '082134547657',
            'email' => 'naufal@gmail.com',
            'password' => bcrypt('12345'),
        ]);
        User::create([
            'name' => 'Nadien Amirah',
            'no_telp' => '089645632454',
            'email' => 'nadien@gmail.com',
            'password' => bcrypt('12345'),
        ]);
        User::create([
            'name' => 'Satria Tirta',
            'no_telp' => '081356467854',
            'email' => 'satria@gmail.com',
            'password' => bcrypt('12345'),
        ]);
        User::create([
            'name' => 'Viona Deswita',
            'no_telp' => '081365477654',
            'email' => 'viona@gmail.com',
            'password' => bcrypt('12345'),
        ]);
    }
}
