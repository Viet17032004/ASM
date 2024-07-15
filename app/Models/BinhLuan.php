<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BinhLuan extends Model
{
    use HasFactory;
    protected $fillable = [
        'tai_khoan_id',
        'san_pham_id',
        'noi_dung',
        'thoi_gian'
        
    ];
    public $table = 'tb_binh_luan';

    public $timestamp = false;

    public function TaiKhoans(){
        return $this->belongsTo(TaiKhoan::class, 'tai_khoan_id');
    }
    public function SanPhams(){
        return $this->belongsTo(SanPham::class, 'san_pham_id');
    }
}
