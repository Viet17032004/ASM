<?php

namespace App\Http\Controllers\Admins;

use App\Models\DonHang;
use App\Models\SanPham;
use App\Models\TaiKhoan;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\FuncCall;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    //
    public function index(){
        // Lấy danh sách tất cả người dùng
        $users = TaiKhoan::all();   
        $sanphamm = SanPham::all();
        $donhangg = DonHang::all();


        // Đếm số lượng người dùng
        $userCount = $users->count();
        $sanphammax = $sanphamm->count();
        $donhangmax = $donhangg->count(); 


        return view('admins.admin.index', compact('users', 'userCount',
        'sanphamm','sanphammax',
        'donhangg','donhangmax'
    
    ));
    }
    public function __construct()
    {
        // $this->middleware('auth');
        
    }

}
