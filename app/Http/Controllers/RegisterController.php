<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\KategoriProgram;
use App\Models\User;

class RegisterController extends Controller
{
    public function index(){
        $kategoriprogram = KategoriProgram::all();
        return view('register', compact('kategoriprogram'), [
            'title' => 'Register',
            'active' => 'register'
        ]);
    }

    public function register(Request $request) 
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'no_telp' => 'required|min:11|max:15',
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|min:5',
        ]);

        $validatedData['password'] = bcrypt($validatedData['password']);

        User::create($validatedData);
        return redirect('/login')->with('success', 'Berhasil mendaftar akun. Silahkan login terlebih dahulu!');
    }
}
