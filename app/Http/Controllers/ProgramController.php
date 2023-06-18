<?php

namespace App\Http\Controllers;

use App\Models\Program;
use App\Models\KategoriProgram;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProgramController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $programs = Program::paginate(5)->withQueryString();
        return view('admin.program.index', [
            'programs' => $programs
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kategori_program = KategoriProgram::all();
        return view('admin.program.create', [
            'kategori_program' => $kategori_program
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
            'nama' => 'required|max:100',
            'kategori_id' => 'required',
            'harga' => 'required',
            'deskripsi' => 'required|max:255',

        ]);

        $validatedData['gambar'] = $request->file('gambar')->store('program-image');
        Program::create($validatedData);
        return redirect('/program')->with('success', 'Data Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Program  $program
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $program = Program::all()->where('id', $id)->first();
        return view('admin.program.show', [
            'program' => $program,
            
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Program  $program
     * @return \Illuminate\Http\Response
     */
    public function edit(Program $program)
    {
        $kategori_program = KategoriProgram::all();
        return view('admin.program.edit',[
            'program' => $program,
            'kategori_program' => $kategori_program,
            
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Program  $program
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Program $program)
    {
        $rules = [
            'nama' => 'required|max:100',
            'kategori_id' => 'required',
            'harga' => 'required',
            'deskripsi' => 'required|max:255',
        ];
        
        $validatedData = $request->validate($rules);

        if($request->oldImage){
            Storage::delete($request->oldImage);
        }
        $validatedData['gambar'] = $request->file('gambar')->store('program-image');
        
        Program::where('id', $program->id)
                    ->update($validatedData);
        return redirect('/program')->with('success', 'Data Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Program  $program
     * @return \Illuminate\Http\Response
     */
    public function destroy(Program $program)
    {
        Program::destroy('id', $program->id);
        return redirect('/program')->with('success', 'Data Berhasil Dihapus');
    }
}
