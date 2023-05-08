<?php

namespace App\Http\Controllers;

use App\Models\Fasilitas;
use App\Models\KategoriProgram;
use App\Models\Testimoni;
use App\Models\Tentor;
use App\Models\Program;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    
    public function index()
    {
        $fasilities = Fasilitas::all();
        $testimonis = Testimoni::all();
        $kategoriprogram = KategoriProgram::all();
        $tentor = Tentor::all();
        
        return view('home',  compact('fasilities', 'testimonis', 'kategoriprogram', 'tentor'), [
            "title" => "Home"
        ]);

    }

    public function show_about() {
        $kategoriprogram = KategoriProgram::all();
        return view('about',  compact('kategoriprogram' ), [
            "title" => "Contact"
        ]);
    
    }
    public function show_contact() {
        $kategoriprogram = KategoriProgram::all();
        return view('contact',  compact('kategoriprogram' ), [
            "title" => "Contact"
        ]);
    
    }
    public function show_program($nama_kategori)
    {
        $kategoriprogram = KategoriProgram::all();
        $kategori = KategoriProgram::all()->where('nama_kategori', $nama_kategori)->first();
        $program = $kategori->Program()->get();
        
        return view('program', compact('kategoriprogram', 'kategori', 'program' ), [

        ]);
        
    }

}
