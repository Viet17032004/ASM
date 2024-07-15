<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PhuongThucThanhToanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('tb_phuong_thuc_thanh_toan')->insert([
            ['ten_phuong_thuc' => 'Cash on Delivery'],
            ['ten_phuong_thuc' => 'Credit Card'],
        ]);

    }
}
