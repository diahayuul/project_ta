<?php

namespace App\Http\Controllers;

use App\Models\Tentor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class TentorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.tentor.index', [
            'tentor' => Tentor::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.tentor.create');
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
            'nama' => 'required|max:255',
            'posisi' => 'required',
            'linkedin' => 'required',
            'instagram' => 'required',

        ]);

        $validatedData['foto'] = $request->file('foto')->store('tentor-image');
        Tentor::create($validatedData);
        return redirect('/tentor')->with('success', 'Data Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Tentor  $tentor
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tentor = Tentor::all()->where('id', $id)->first();
        return view('admin.tentor.show', [
            'tentor' => $tentor
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Tentor  $tentor
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tentor = Tentor::all()->where('id', $id)->first();
        return view('admin.tentor.edit',[
            'tentor' => $tentor,
            
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Tentor  $tentor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $rules = [
            'foto'=> 'image|file|max:2000',
            'nama' => 'required|max:255',
            'posisi' => 'required',
            'linkedin' => 'required',
            'instagram' => 'required'
        ];
        
        $validatedData = $request->validate($rules);
        if($request->oldImage){
            Storage::delete($request->oldImage);
        }
        $validatedData['foto'] = $request->file('foto')->store('tentor-image');
        
        Tentor::where('id', $id)
                    ->update($validatedData);
        return redirect('/tentor')->with('success', 'Data Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tentor  $tentor
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tentor $tentor)
    {
        if($tentor->foto){
            Storage::delete($tentor->foto);
        }
        Tentor::destroy('id', $tentor->id);
        return redirect('/tentor')->with('success', 'Data Berhasil Dihapus');
    }
}
