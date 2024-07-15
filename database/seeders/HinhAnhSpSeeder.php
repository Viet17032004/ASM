<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class HinhAnhSpSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('tb_hinh_anh_sp')->insert([
            ['san_pham_id' => 1, 'link_anh' => 'laptop_abc_1.jpg'],
            ['san_pham_id' => 1, 'link_anh' => 'laptop_abc_2.jpg'],
            ['san_pham_id' => 2, 'link_anh' => 'tshirt_xyz_1.jpg'],
        ]);
    }
}
