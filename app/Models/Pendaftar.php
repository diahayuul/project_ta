<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Pendaftar extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function user()
    {
        return $this->hasOne(User::class, 'id_user');
    }

    public function program()
    {
        return $this->hasOne(Program::class, 'id_program');
    }

    public function kategori()
    {
        return $this->hasOne(KategoriProgram::class, 'id', 'id');
    }


    public function allData()
    {
        // return DB::table('pendaftars')
        //     ->leftJoin('users', 'users.id', '=', 'pendaftars.id_user')
        //     ->leftJoin('programs', 'programs.id', '=', 'pendaftars.id_program')
        //     //->leftJoin('kategori_programs', 'pendaftars.id_kategori', '=', 'kategori_programs.id')
        //     ->get(['pendaftars.id as id_pendaftar, users.name, programs.nama, programs.harga, pendaftars.jenis_pembayaran, pendaftars.status']);

        return DB::table('pendaftars')
            ->leftJoin('users', 'users.id', '=', 'pendaftars.id_user')
            ->leftJoin('programs', 'programs.id', '=', 'pendaftars.id_program')
            ->get(['pendaftars.id as id_pendaftar', 'users.name', 'programs.nama', 'programs.harga', 'pendaftars.jenis_pembayaran', 'pendaftars.status']);
    }
}
