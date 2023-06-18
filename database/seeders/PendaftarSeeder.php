<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Pendaftar;

class PendaftarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Pendaftar::create([
            'id_user' => 2,
            'asal_sekolah' => 'SDN 22 Gresik',
            'alamat' => 'Jl. Sunan Giri Gg.4 No.1',
            'id_program' => 3,
            'jenis_pembayaran' => 'Transfer Bank',
        ]);
        Pendaftar::create([
            'id_user' => 3,
            'asal_sekolah' => 'SDN 23 Gresik',
            'alamat' => 'Jl. Dr. Wahidin Sh No.3',
            'id_program' => 2,
            'jenis_pembayaran' => 'Cash',
        ]);
        Pendaftar::create([
            'id_user' => 4,
            'asal_sekolah' => 'SDN 18 Gresik',
            'alamat' => 'Jl. Mayjend Sungkono No.5',
            'id_program' => 1,
            'jenis_pembayaran' => 'Cash',
        ]);
        Pendaftar::create([
            'id_user' => 5,
            'asal_sekolah' => 'SDN 23 Gresik',
            'alamat' => 'Jl. RA. Kartini No17',
            'id_program' => 2,
            'jenis_pembayaran' => 'Transfer Bank',
        ]);
        Pendaftar::create([
            'id_user' => 6,
            'asal_sekolah' => 'SD Nurul Islah',
            'alamat' => 'Perum Giri Asri Blok H No.22',
            'id_program' => 3,
            'jenis_pembayaran' => 'Transfer Bank',
        ]);
        Pendaftar::create([
            'id_user' => 7,
            'asal_sekolah' => 'SD Nurul Islah',
            'alamat' => 'Jl. Sunan Giri No.70',
            'id_program' => 3,
            'jenis_pembayaran' => 'Cash',
        ]);
        Pendaftar::create([
            'id_user' => 8,
            'asal_sekolah' => 'SD Nurul Islah',
            'alamat' => 'Jl. Sunan Giri Gg.5 No.17',
            'id_program' => 3,
            'jenis_pembayaran' => 'Cash',
        ]);
        Pendaftar::create([
            'id_user' => 9,
            'asal_sekolah' => 'MI Al-Falah Kedanyang',
            'alamat' => 'Perum GKGA Blok C No.2',
            'id_program' => 1,
            'jenis_pembayaran' => 'Transfer Bank',
        ]);
        Pendaftar::create([
            'id_user' => 10,
            'asal_sekolah' => 'SMPN 3 Gresik',
            'alamat' => 'Perum Giri Asri Blok G No.10',
            'id_program' => 4,
            'jenis_pembayaran' => 'Transfer Bank',
        ]);
        Pendaftar::create([
            'id_user' => 11,
            'asal_sekolah' => 'SMPN 4 Gresik',
            'alamat' => 'Jl. Proklamasi No.54',
            'id_program' => 5,
            'jenis_pembayaran' => 'Transfer Bank',
        ]);
        Pendaftar::create([
            'id_user' => 12,
            'asal_sekolah' => 'MTS Maarif Gresik',
            'alamat' => 'Jl. Sunan Giri Gg.X No.33',
            'id_program' => 6,
            'jenis_pembayaran' => 'Transfer Bank',
        ]);
        
    }
}
