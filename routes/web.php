<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\perpustakaan;

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

Route::get('/perpustakaan/anggota', [Perpustakaan::class, 'anggota'])->name('get_anggota');

Route::get('/perpustakaan/buku', [Perpustakaan::class, 'buku'])->name('get_buku');

Route::get('/perpustakaan/petugas', [Perpustakaan::class, 'petugas'])->name('get_petugas');