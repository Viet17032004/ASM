<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DonHangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('tb_don_hang')->insert([
            [
                'ma_don_hang' => 'DH001',
                'nguoi_dung_id' => 1,
                'ten_nguoi_nhan' => 'Nguyen Van A',
                'email_nguoi_nhan' => 'nguyenvana@example.com',
                'so_dien_thoai_nguoi_nhan' => '0909123456',
                'dia_chi_nguoi_nhan' => 'Hanoi',
                'ngay_dat' => '2023-07-12 10:00:00',
                'tong_tien' => 1500.00,
                'ghi_chu' => 'Please deliver between 9am-5pm',
                'phuong_thuc_thanh_toan_id' => 1,
                'trang_thai_id' => 1,
            ],
            [
                'ma_don_hang' => 'DH002',
                'nguoi_dung_id' => 2,
                'ten_nguoi_nhan' => 'Tran Thi B',
                'email_nguoi_nhan' => 'tranthib@example.com',
                'so_dien_thoai_nguoi_nhan' => '0909234567',
                'dia_chi_nguoi_nhan' => 'HCMC',
                'ngay_dat' => '2023-07-13 14:00:00',
                'tong_tien' => 20.00,
                'ghi_chu' => 'Leave at the front door',
                'phuong_thuc_thanh_toan_id' => 2,
                'trang_thai_id' => 2,
            ],
        ]);
    }
}
