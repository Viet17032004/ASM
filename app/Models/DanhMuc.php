<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\DB;

class DanhMuc extends Model
{
    use HasFactory;
    protected $table = 'tb_danh_muc';
    public function getAll()
    {
    $listDanhMuc = DB::table('tb_danh_muc')
    ->orderByDesc('id')
    ->get();
    return $listDanhMuc;

    }

    public function createDanhMuc($data)
    {
        DB::table('tb_danh_muc')->insert([
            'hinh_anh' => $data['hinh_anh'],
    'ten_danh_muc' => $data['ten_danh_muc'],
    'mo_ta' => $data['mo_ta'],
        ]);
    }
   public function getDanhMuc($id){
    $tb_danh_muc = DB::table('tb_danh_muc')->where('id',$id)->first();
    return $tb_danh_muc;
   }
   public function updateDanhMuc($id,$data)
   {
       DB::table('tb_danh_muc')->where('id',$id)->update($data);
   }
   public function deleteProduct($id)
   {
       DB::table('san_phams')->where('id',$id)->delete();
   }
   use SoftDeletes;
   protected $fillable = [
    'hinh_anh',
    'ten_danh_muc',
    'mo_ta',
   
];

}
