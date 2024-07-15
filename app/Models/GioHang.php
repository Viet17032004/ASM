<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GioHang extends Model
{
    use HasFactory;

     protected $fillable = [
        'nguoi_dung_id',
     ];
     public $table = 'tb_gio_hang';

     public $timestamp = false;

     public function NguoiDung(){
        return $this->belongsTo(TaiKhoan::class,'nguoi_dung_id');
     }
}
