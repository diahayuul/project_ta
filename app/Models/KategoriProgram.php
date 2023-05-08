<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KategoriProgram extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function getRouteKeyName()
    {
        return 'nama_kategori';
    }

    public function Program(){
        return $this->hasMany(Program::class, 'kategori_id', 'id');
    }
}
