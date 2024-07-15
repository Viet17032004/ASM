<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DanhMucSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('tb_danh_muc')->insert([
            ['hinh_anh' => 'category1.jpg', 'ten_danh_muc' => 'Electronics', 'mo_ta' => 'Various electronic items'],
            ['hinh_anh' => 'category2.jpg', 'ten_danh_muc' => 'Clothing', 'mo_ta' => 'Men and women clothing'],
        ]);
    }
}
