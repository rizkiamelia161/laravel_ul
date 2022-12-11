<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('master');
});

Route::get('datakasus', function () {
    return view('datakasus');
});

Route::get('dashboard', function () {
    return view('dashboard');
});

Route::get('/siswas', [SiswasController::class, 'index'])->name('admin.siswa.view');
Route::get('/siswas/create', [SiswasController::class, 'createview'])->name('admin.siswa.createview');
Route::post('/siswas/create', [SiswasController::class, 'createsave'])->name('admin.siswa.createsave');
Route::delete('/siswas/hapus/{id}', [SiswasController::class, 'hapussiswa'])->name('admin.siswa.hapussiswa');

Route::get('/gurus', [GurusController::class, 'index'])->name('admin.guru.view');