<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SanPhamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('tb_san_pham')->insert([
            [
                'ten_san_pham' => 'Laptop ABC',
                'so_luong' => 50,
                'gia_san_pham' => 1500.00,
                'gia_khuyen_mai' => 1400.00,
                'ngay_nhap' => '2023-07-10',
                'mo_ta' => 'High performance laptop',
                'danh_muc_id' => 1,
                'trang_thai' => true,
            ],
            [
                'ten_san_pham' => 'T-shirt XYZ',
                'so_luong' => 200,
                'gia_san_pham' => 20.00,
                'gia_khuyen_mai' => 18.00,
                'ngay_nhap' => '2023-07-11',
                'mo_ta' => 'Comfortable cotton t-shirt',
                'danh_muc_id' => 2,
                'trang_thai' => true,
            ],
        ]);
    }
}
