<?php

namespace App\Http\Controllers;

use App\Models\Pendaftar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PendaftarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    private $pendaftar;
    
    public function __construct(Pendaftar $pendaftar)
    {
        $this->pendaftar = $pendaftar;
    }

    public function index()
    {
        $pendaftars = $this->pendaftar->allData();
        // dd($pendaftars);

        return view('admin.pendaftar.index', compact('pendaftars',
    ));
    }

    public function update(Pendaftar $pendaftar)
    {
        // $pendaftars = Pendaftar::all()->where('id', $pendaftar->id)->first();
        $pendaftar = Pendaftar::findOrFail($pendaftar->id);
        $pendaftar->status = 'Sudah Diverifikasi';
        $pendaftar->save();
        // Pendaftar::where('id', $pendaftar->id)
        //     ->where('status', $pendaftar->status)
        //     ->update(['status'=>'Sudah Diverifikasi']);
        return redirect('/pendaftar');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pendaftar  $pendaftar
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pendaftar $pendaftar)
    {
        //
    }
}
