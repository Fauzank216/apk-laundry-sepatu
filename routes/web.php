<?php

use App\Http\Controllers\Api\TransactionController as ApiTransactionController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\TransactionDetailController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/admin/dashboard', function () {
    return view('admin.dashboard');
})->name('admin.dashboard');

Route::resource('/admin/users', UserController::class);
Route::resource('/admin/services', ServiceController::class);
Route::resource('/admin/customers', CustomerController::class);

Route::get('/transactions/history', [TransactionController::class, 'history'])->name('admin.transaction.history');
Route::get('/transactions/detail', function () {
    return view('admin.transactions.detail');
})->name('admin.transactions.detail');
Route::resource('/transactions', TransactionController::class);
//API route
Route::get('/api/customers', [CustomerController::class, 'search']);
Route::POST('/api/transactions', [TransactionController::class, 'store']);

//customer route
Route::get('/customers/dashboard', function () {
    return view('customer.index');
})->name('customer.dashboard');