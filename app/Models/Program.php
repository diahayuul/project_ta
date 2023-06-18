<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Program extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function kategori_program(){
        return $this->belongsTo(KategoriProgram::class, 'kategori_id');
    }

    public function pendaftar()
    {
        return $this->hasOne(Pendaftar::class, 'id_program', 'id');
    }
    

}
