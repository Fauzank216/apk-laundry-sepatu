<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/admin/dashboard', function () {
    return view('admin.index');
});

Route::get('/admin/petugas', function () {
    return view('admin.petugas.index');
});

Route::get('/admin/pelanggan', function () {
    return view('admin.pelanggan.index');
});

Route::get('/admin/layanan', function () {
    return view('admin.layanan.index');
});

Route::get('/transaksi', function () {
    return view('admin.transaksi.index');
});

Route::get('/transaksi/history', function () {
    return view('admin.transaksi.history');
});
