<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ChucVuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('tb_chuc_vu')->insert([
            ['ten_chuc_vu' => 'Admin'],
            ['ten_chuc_vu' => 'User'],
        ]);
    }
}
