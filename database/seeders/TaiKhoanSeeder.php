<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class TaiKhoanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('tb_tai_khoan')->insert([
            [
                'anh_dai_dien' => 'avatar1.jpg',
                'ho_ten' => 'Nguyen Van A',
                'email' => 'nguyenvana@example.com',
                'so_dien_thoai' => '0909123456',
                'gioi_tinh' => 'Nam',
                'dia_chi' => 'Hanoi',
                'ngay_sinh' => '1990-01-01',
                'mat_khau' => Hash::make('password'),
                'chuc_vu_id' => 1,
                'trang_thai' => true,
            ],
            [
                'anh_dai_dien' => 'avatar2.jpg',
                'ho_ten' => 'Tran Thi B',
                'email' => 'tranthib@example.com',
                'so_dien_thoai' => '0909234567',
                'gioi_tinh' => 'Nu',
                'dia_chi' => 'HCMC',
                'ngay_sinh' => '1992-02-02',
                'mat_khau' => Hash::make('password'),
                'chuc_vu_id' => 2,
                'trang_thai' => true,
            ],
        ]);
    }
}
