<?php

use App\Http\Controllers\NhanvienController;
use App\Models\nhanvien;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('nhanviens', NhanvienController::class);

// Route này không có sẵn trong resource controller
Route::get('nhanviens/{nhanvien}/confirm-delete', [NhanvienController::class, 'confirmDelete'])
    ->name('nhanviens.confirm-delete');