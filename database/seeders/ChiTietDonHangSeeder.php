<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ChiTietDonHangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('tb_chi_tiet_don_hang')->insert([
            [
                'don_hang_id' => 1,
                'san_pham_id' => 1,
                'so_luong' => 1,
                'gia' => 1500.00,
                'thanh_tien' => 1500.00,
            ],
            [
                'don_hang_id' => 2,
                'san_pham_id' => 2,
                'so_luong' => 1,
                'gia' => 20.00,
                'thanh_tien' => 20.00,
            ],
        ]);
    }
}
