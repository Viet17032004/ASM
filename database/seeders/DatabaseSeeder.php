<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            ChucVuSeeder::class,
            TaiKhoanSeeder::class,
            DanhMucSeeder::class,
            SanPhamSeeder::class,
            HinhAnhSpSeeder::class,
            BinhLuanSeeder::class,
            DonHangSeeder::class,
            PhuongThucThanhToanSeeder::class,
            ChiTietDonHangSeeder::class,
            GioHangSeeder::class,
            ChiTietGioHangSeeder::class,
            TrangThaiDonHangSeeder::class,

        ]);
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
