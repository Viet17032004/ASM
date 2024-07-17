<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class TaiKhoan extends Model
{
  
    use HasFactory;
    protected $table = 'tb_tai_khoan';
      //Cách 1 : Sử dụng Query Buider
    public function getAll()
    {
        $tb_tai_khoan = DB::table('tb_tai_khoan')
            ->join('tb_chuc_vu', 'tb_tai_khoan.chuc_vu_id', '=', 'tb_chuc_vu.id')
            ->select('tb_tai_khoan.*', 'tb_chuc_vu.ten_chuc_vu')
            ->orderBy('tb_tai_khoan.id', 'DESC')
            ->get();

        return $tb_tai_khoan;
    }
//Xử lý thêm sản phẩm 
public function createTaiKhoan($data)
    {
        DB::table('tb_tai_khoan')->insert([
    'anh_dai_dien' => $data['anh_dai_dien'],
    'ho_ten' => $data['ho_ten'],
    'email' => $data['email'],
    'so_dien_thoai' => $data['so_dien_thoai'],
    'gioi_tinh' => $data['gioi_tinh'],
    'dia_chi' => $data['dia_chi'],
    'ngay_sinh' => $data['ngay_sinh'],
    'mat_khau' => $data['mat_khau'],
    'chuc_vu_id' => $data['chuc_vu_id'],
        ]);
            
    }
public function getUser($id){
    $tb_tai_khoan = DB::table('tb_tai_khoan')->where('id',$id)->first();
    return $tb_tai_khoan;
}


}
