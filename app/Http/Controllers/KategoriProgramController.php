<?php

namespace App\Http\Controllers;

use App\Models\KategoriProgram;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class KategoriProgramController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.kategoriprogram.index', [
            'kat_program' => KategoriProgram::paginate(5)->withQueryString()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.kategoriprogram.create');
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
            'nama_kategori' => 'required|max:100|unique:kategori_programs',
            'deskripsi' => 'required|max:300',
        ]);

        $validatedData['gambar'] = $request->file('gambar')->store('kategori-image');
        KategoriProgram::create($validatedData);
        return redirect('/kategori-program')->with('success', 'Data Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $kategori = KategoriProgram::all()->where('id', $id)->first();
        return view('admin.kategoriprogram.show', [
            'kategori' => $kategori
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $kategori = KategoriProgram::all()->where('id', $id)->first();
        return view('admin.kategoriprogram.edit',[
            'kategori' => $kategori,
            
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $rules = [
            'nama_kategori' => 'required|max:100',
            'deskripsi' => 'required|max:300',
        ];
        
        $validatedData = $request->validate($rules);

        if($request->oldImage){
            Storage::delete($request->oldImage);
        }
        $validatedData['gambar'] = $request->file('gambar')->store('kategori-image');
        
        KategoriProgram::where('id', $id)
                    ->update($validatedData);
        return redirect('/kategori-program')->with('success', 'Data Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $kategori = KategoriProgram::find($id);
        // if($kategori->foto){
        //     Storage::delete($tentor->foto);
        // }
        KategoriProgram::destroy('id', $id);
        $kategori->program()->delete();

        return redirect('/kategori-program')->with('success', 'Data Berhasil Dihapus');
    }
}
