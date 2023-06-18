<?php

namespace App\Http\Controllers;

use App\Models\Testimoni;
use App\Models\Pendaftar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;

class TestimoniController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.testimoni.index', [
            'testimoni' => Testimoni::paginate(8)->withQueryString()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pendaftars = Pendaftar::all();
        return view('admin.testimoni.create', [
            'pendaftars' => $pendaftars
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'foto'=> 'image|file|max:2000',
            'nama' => 'required',
            'asal_sekolah' => 'required',
            'prestasi' => 'required|max:255',
            'deskripsi' => 'required|max:300',

        ]);
        if($request->file('foto')){
             $validatedData['foto'] = $request->file('foto')->store('testimoni-image');
        }
       
        Testimoni::create($validatedData);
        return redirect('/testimoni')->with('success', 'Data Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Testimoni  $testimoni
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $testimoni = Testimoni::all()->where('id', $id)->first();
        return view('admin.testimoni.show', [
            'testimoni' => $testimoni
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Testimoni  $testimoni
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $testimoni = Testimoni::all()->where('id', $id)->first();
        return view('admin.testimoni.edit',[
            'testimoni' => $testimoni,
            
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Testimoni  $testimoni
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $rules = [
            'foto'=> 'image|file|max:2000',
            'nama' => 'required|max:255',
            'prestasi' => 'required|max:255',
            'asal_sekolah' => 'required|max:255',
            'deskripsi' => 'required|max:300',

        ];
        
        $validatedData = $request->validate($rules);
        if($request->oldImage){
            Storage::delete($request->oldImage);
        }
        
        if($request->file('foto')){
            $validatedData['foto'] = $request->file('foto')->store('testimoni-image');
       }
        
        Testimoni::where('id', $id)
                    ->update($validatedData);
        return redirect('/testimoni')->with('success', 'Data Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Testimoni  $testimoni
     * @return \Illuminate\Http\Response
     */
    public function destroy($Idtestimoni)
    {
        dd($Idtestimoni);
        if($testimoni->foto){
            Storage::delete($testimoni->foto);
        }
        Testimoni::destroy('id', $testimoni->id);
        return redirect('/testimoni')->with('success', 'Data Berhasil Dihapus');
    }
}
