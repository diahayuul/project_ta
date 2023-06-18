<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\KategoriProgram;
use App\Models\Program;
use App\Models\Pendaftar;
use App\Models\Tentor;

class DashboardController extends Controller
{
    public function index()
    {
        $kategori = KategoriProgram::all()->count();
        $program = Program::all()->count();
        $pendaftar = Pendaftar::where('status', 'Belum Diverifikasi')->count();
        $tentor = Tentor::all()->count();

        return view('admin.dashboard', compact('kategori', 'program', 'pendaftar', 'tentor'), [
            "title" => "Dashboard"
        ]);

    }
}
