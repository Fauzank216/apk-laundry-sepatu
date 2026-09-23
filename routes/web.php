<?php

use App\Http\Controllers\CustomerController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/admin/dashboard', function () {
    return view('admin.index');
});

Route::resource('/admin/users', UserController::class);
Route::resource('/admin/services', ServiceController::class);
Route::resource('/admin/customers', CustomerController::class);


Route::get('/transactions', function () {
    return view('admin.transaksi.index');
});

Route::get('/transactions/history', function () {
    return view('admin.transaksi.history');
});