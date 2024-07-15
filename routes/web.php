<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admins\AdminController;
use App\Http\Controllers\Admins\BinhLuanController;
use App\Http\Controllers\Admins\ChucVuControllerName;
use App\Http\Controllers\Admins\DanhMucController;
use App\Http\Controllers\Admins\DonHangController;
use App\Http\Controllers\Admins\GioHangController;
use App\Http\Controllers\Admins\SanPhamController;
use App\Http\Controllers\Admins\TaiKhoanController;

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
});

Route::resource('sanpham', SanPhamController::class);
Route::resource('taikhoan', TaiKhoanController::class);
Route::resource('danhmuc', DanhMucController::class);
Route::resource('donhang', DonHangController::class);
Route::resource('binhluan', BinhLuanController::class);
Route::resource('chucvu', ChucVuControllerName::class);
Route::resource('giohang', GioHangController::class);




Route::get('/admin',[AdminController::class, 'index'])->name('admin');



