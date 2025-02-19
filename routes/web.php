<?php

use App\Http\Controllers\AdminDashboard;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\TransactionController;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth:admin'])->group(function () {
    Route::get('/', [AdminDashboard::class, 'index'])->name('dashboard');
    Route::get('/supplier', [SupplierController::class, 'index'])->name('suppliers');
    Route::get('/supplier/show/{id}', [SupplierController::class, 'show']);
    Route::get('/supplier/create', [SupplierController::class, 'create']);
    Route::post('/supplier/create', [SupplierController::class, 'store']);
    Route::get('/supplier/edit/{id}', [SupplierController::class, 'edit'])->name('supplier-edit');
    Route::put('/supplier/edit/{id}', [SupplierController::class, 'update']);
    Route::delete('/supplier/destroy/{id}', [SupplierController::class, 'destroy']);
    Route::get('/transactions', [TransactionController::class, 'index'])->name('transactions');
    Route::get('/transactions/create', [TransactionController::class, 'create']);
    Route::post('/transactions/create', [TransactionController::class, 'store']);
    Route::post('/create', [AdminDashboard::class, 'store']);
    Route::delete('/products/destroy/{id}', [ProductController::class, 'destroy']);
    Route::get('/products/edit/{id}', [ProductController::class, 'edit']);
    Route::put('/products/edit/{id}', [ProductController::class, 'update']);
    Route::get('/products', [ProductController::class, 'index'])->name('products');
    Route::get('/products/create', [ProductController::class, 'create']);
    Route::post('/products/create', [ProductController::class, 'store']);
    Route::get('/register', [AuthController::class, 'register']);
    Route::post('/register', [AuthController::class, 'storeRegister']);
    Route::get('/logout', [AuthController::class, 'logout']);
    Route::post('/logout', [AuthController::class, 'logout']);
});

Route::get('/login', [AuthController::class, 'login'])->name('login');

Route::post('/submit-login', [AuthController::class, 'store']);
