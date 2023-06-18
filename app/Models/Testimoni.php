<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Testimoni extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function pendaftar(){
        return $this->belongsTo(Pendaftar::class, 'pendaftar_id');
    }

    public function user(){
        return $this->belongsTo(User::class, 'user_id');
    }

    public function allData()
    {
        return DB::table('testimonis')
            ->leftJoin('pendaftars', 'pendaftars.id', '=', 'testimonis.pendaftar_id' )
            ->leftJoin('users', 'users.id', '=','testimonis.user_id' )
            ->get();
    }
}
