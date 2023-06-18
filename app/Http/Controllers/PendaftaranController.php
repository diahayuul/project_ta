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

        return view('pendaftaran', compact('kategoriprogram', 'program' ), []);
    }
    public function store(Request $request, Program $program)
    {
        try {
            $validatedData = $request->validate([
                'nama' => 'required',
                'email' => 'required|unique:users',
                'no_telp' => 'required',
                'asal_sekolah' => 'required',
                'alamat' => 'required',
                'nama_program' => 'required',
                'harga' => 'required',
                'jenis_pembayaran'=>'required',            
            ]);

            $data = new Pendaftar;
            $data->id_user = $request->id_user;
            $data->asal_sekolah = $request->asal_sekolah;
            $data->alamat = $request->alamat;
            $data->id_program = $request->id_program;
            $data->jenis_pembayaran = $request->jenis_pembayaran;
            $data->save();

            return redirect('/bimbel/program/pembayaran');
        } catch (\Throwable $th) {
            throw $th;
        }
        
        
    }

}
