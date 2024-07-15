<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ChiTietGioHangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('tb_chi_tiet_gio_hang')->insert([
            [
                'gio_hang_id' => 1,
                'san_pham_id' => 1,
                'so_luong' => 1,
            ],
            [
                'gio_hang_id' => 2,
                'san_pham_id' => 2,
                'so_luong' => 2,
            ],
        ]);
    }
}
