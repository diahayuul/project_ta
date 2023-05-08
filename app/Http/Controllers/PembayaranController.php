<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\KategoriProgram;

class PembayaranController extends Controller
{
    public function index()
    {
        $kategoriprogram = KategoriProgram::all();
        return view('pembayaran',  compact('kategoriprogram' ));
    }
}
