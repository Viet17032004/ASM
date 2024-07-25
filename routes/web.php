<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Admins\AdminController;
use App\Http\Middleware\CheckRoleAdminMiddleware;
use App\Http\Controllers\Admins\DanhMucController;
use App\Http\Controllers\Admins\DonHangController;
use App\Http\Controllers\Admins\GioHangController;
use App\Http\Controllers\Admins\SanPhamController;
use App\Http\Controllers\Admins\BinhLuanController;
use App\Http\Controllers\Admins\TaiKhoanController;
use App\Http\Controllers\Admins\ChucVuControllerName;

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

// Route::get('login',[AuthController::class,'showFormLogin']);
// Route::post('login',[AuthController::class,'login'])->name('login');
// Route::get('register',[AuthController::class,'showFormRegister']);
// Route::post('register',[AuthController::class,'register'])->name('register');
// Route::post('logout',[AuthController::class,'logout'])->name('logout');

// Route::get('/admin',[AdminController::class, 'index'])->name('admin');


// Route::get('/admin',[AdminController::class, 'index'])->name('admin')->middleware('auth', 'check.role.admin');

// Route::middleware(['admin'])->group(function () {
//     Route::get('/admin',[AdminController::class, 'index'])->name('admin');
// });
// Route::middleware(['check.role.admin'])->group(function () {
//     Route::get('/admin',[AdminController::class, 'index'])->name('admin');
// });
Auth::routes();


Route::middleware(['check.role.admin'])->group(function () {
    Route::get('/admin',[AdminController::class, 'index'])->name('admin');
});



//  Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


    // Route::get('/admin',[AdminController::class, 'index'])->name('admin');


//Route admin
    // Route::middleware(['auth','check.role.admin'])->prefix('admins')
    // ->as('admins')
    // ->group(function (){
    //     Route::get('/admin',[AdminController::class, 'index'])->name('admin');
    //     Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
        
 
    //      });