<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\perpustakaan;
use App\Http\Controllers\cast;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
})->name('dashboard');
Route::get('/create', function () {
    return view('cast.create');
});

// Route::get('/perpustakaan/anggota', [Perpustakaan::class, 'anggota'])->name('get_anggota');

// Route::get('/perpustakaan/buku', [Perpustakaan::class, 'buku'])->name('get_buku');

// Route::get('/perpustakaan/pe', [Perpustakaan::class, 'petugas'])->name('get_petugas');

route::resource('/cast',castcontroller::class);
