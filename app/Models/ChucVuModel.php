<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class ChucVuModel extends Model
{
    use HasFactory;
    public function getAll()
    {
    $listChucVu = DB::table('tb_chuc_vu')
    ->orderByDesc('id')
    ->get();
    return $listChucVu;

    }

    public function createChucVu($data)
    {
        DB::table('tb_chuc_vu')->insert([
           
    'ten_chuc_vu' => $data['ten_chuc_vu'],
   
        ]);
    }

}
