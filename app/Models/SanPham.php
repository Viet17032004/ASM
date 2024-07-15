<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class SanPham extends Model
{
    use HasFactory;
    protected $table = 'tb_san_pham';

    public function getAll(){
        $tb_san_pham = DB::table('tb_san_pham')
        ->join('tb_danh_muc','tb_san_pham.danh_muc_id','=', 'tb_danh_muc.id')
        ->orderBy('tb_san_pham.id','DESC')
        ->get();
        return $tb_san_pham;
    }
//Thêm sản phẩm
public function createSanPham($data)
    {
        DB::table('tb_san_pham')->insert([
    'ten_san_pham' => $data['ten_san_pham'],
    'so_luong' => $data['so_luong'],
    'gia_san_pham' => $data['gia_san_pham'],
    'gia_khuyen_mai' => $data['gia_khuyen_mai'],
    'ngay_nhap' => $data['ngay_nhap'],
    
    'mo_ta' => $data['mo_ta'],
    'danh_muc_id' => $data['danh_muc_id'],
        ]);
            
    }

}
