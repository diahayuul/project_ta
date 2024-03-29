<?php

namespace App\Models;

use App\Models\Pendaftar;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Support\Facades\DB;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    // protected $table = 'users';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $guarded = ['id'];
    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function pendaftar(){
        return $this->hasOne(Pendaftar::class, 'id_user', 'id');
    }
    
    public function program(){
        return $this->hasOne(Program::class, 'id', 'id');
    }


    public function allData()
    {
        return DB::table('users')
            ->leftJoin('pendaftars', 'users.id', '=', 'pendaftar.id_user')
            // ->leftJoin('programs', 'pendaftars.id_program', '=', 'programs.id')
            //->leftJoin('kategori_programs', 'pendaftars.id_kategori', '=', 'kategori_programs.id')
            ->get();
    }
}
