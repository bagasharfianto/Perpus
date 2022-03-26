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
    return view('welcome');
});
Route::get('Dashboard', function () {
    return view('Admin/Dashboard');
});
Route::get('DataBuku', function () {
    return view('Admin/DataBuku');
});
Route::get('DataPeminjam', function () {
    return view('Admin/DataPeminjam');
});
Route::get('PengajuanPeminjam', function () {
    return view('Admin/PengajuanPeminjam ');
});
Route::get('Laporan', function () {
    return view('Admin/Laporan');
});

