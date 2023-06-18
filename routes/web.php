<?php

use App\Models\KategoriProgram;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\TentorController;
use App\Http\Controllers\PesertaController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProgramController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FasilitasController;
use App\Http\Controllers\PendaftarController;
use App\Http\Controllers\TestimoniController;
use App\Http\Controllers\PembayaranController;
use App\Http\Controllers\PendaftaranController;
use App\Http\Controllers\KategoriProgramController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/bimbel/program/pembayaran', function () {
    $kategoriprogram = KategoriProgram::all();
    return view('pembayaran',  compact('kategoriprogram' )
    );
});

Route::get('/', [HomeController::class, 'index'],);
Route::get('/about', [HomeController::class, 'show_about'],);
Route::get('/contact', [HomeController::class, 'show_contact'],);

Route::get('/bimbel/program/{kategoriprogram:nama_kategori}', [HomeController::class, 'show_program'],);
Route::get('/bimbel/program/{program:id}/pendaftaran', [PendaftaranController::class, 'index'],)->middleware('auth');
Route::post('/bimbel/program/{program:id}/pendaftaran', [PendaftaranController::class, 'store'],);

// Route::get('/bimbel/program/pembayaran', [PembayaranController::class, 'index'],);



Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);


Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'register']);

Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth');

Route::get('/profile', [ProfileController::class, 'edit'])->middleware('auth');
Route::post('/profile/edit', [ProfileController::class, 'update'])->middleware('auth');
Route::post('/profile/update-image', [ProfileController::class, 'update_image'])->middleware('auth');

Route::get('/profile-peserta', [ProfileController::class, 'edit'])->middleware('auth');



Route::resource('/fasilitas', FasilitasController::class)->middleware('is_admin');

Route::resource('/tentor', TentorController::class)->middleware('is_admin');

Route::resource('/testimoni', TestimoniController::class)->middleware('is_admin');

Route::resource('/kategori-program', KategoriProgramController::class)->middleware('is_admin');

Route::resource('/program', ProgramController::class)->middleware('is_admin');

Route::resource('/pendaftar', PendaftarController::class)->middleware('is_admin');

Route::resource('/peserta', PesertaController::class)->middleware('is_admin');





