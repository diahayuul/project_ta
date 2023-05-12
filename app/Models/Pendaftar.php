<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pendaftar extends Model
{
    use HasFactory;
    protected $table = 'pendaftar';
    protected $guarded = ['id'];

    public function user()
    {
        return $this->hasOne(User::class, 'id_user');
    }
}
