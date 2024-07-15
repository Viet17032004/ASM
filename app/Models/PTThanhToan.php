<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PTThanhToan extends Model
{
    use HasFactory;
    protected $fillable = [
        'ten_phuong_thuc'
    ];
    public $table = 'tb_phuong_thuc_thanh_toan';

    public $timestamp = false;

    public function DonHangs(){
        return $this->hasMany(DonHang::class, 'phuong_thuc_thanh_toan_id');
    }
}
