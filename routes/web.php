<?php

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

Route::get('siswas', function () {
    return view('siswas');
});
Route::get('createsiswa', function () {
    return view('createsiswa');
});

// Route::get('/dashboard', [DashboardController::class, 'dashboard']);