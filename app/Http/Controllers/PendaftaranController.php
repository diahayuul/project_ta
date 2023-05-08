<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\KategoriProgram;
use App\Models\Program;
use App\Models\Pendaftar;

class PendaftaranController extends Controller
{
    public function index(Program $program)
    {
        $kategoriprogram = KategoriProgram::all();
        $program = Program::all()->where('id', $program->id)->first();

        return view('pendaftaran', compact('kategoriprogram', 'program' ), [

        ]);
    }
    public function store(Request $request, Program $program)
    {
        $validated = $request->validate([
            'nama' => 'required',
            'email' => 'required',
            'no_telp' => 'required',
            'asal_sekolah' => 'required',
            'alamat' => 'required',
            'jenis_bayar'=>'required',
            
        ]);
        $validatedData['id_user'] = auth()->user()->id;
        $validatedData['asal_sekolah'] = $request;
        $validatedData['alamat'] = $request;
        $validatedData['jenis_pembayaran'] = $request;
        $validatedData['id_program'] = Program::all()->where('id', $program->id)->first();

        return($validatedData);

        Pendaftar::create($validatedData);
        return redirect('/bimbel/program/pembayaran');
        
    }

}
