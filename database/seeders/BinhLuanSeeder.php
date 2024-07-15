<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BinhLuanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('tb_binh_luan')->insert([
            [
                'tai_khoan_id' => 1,
                'san_pham_id' => 1,
                'noi_dung' => 'Great laptop, very fast!',
                'thoi_gian' => now(),
                'trang_thai' => true,
            ],
            [
                'tai_khoan_id' => 2,
                'san_pham_id' => 2,
                'noi_dung' => 'Nice t-shirt, comfortable to wear.',
                'thoi_gian' => now(),
                'trang_thai' => true,
            ],
        ]);
    }
}
