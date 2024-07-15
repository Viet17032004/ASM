<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('tb_don_hang', function (Blueprint $table) {
            $table->id();
            $table->string('ma_don_hang')->unique();
            $table->foreignId('nguoi_dung_id')->constrained('tb_tai_khoan');
            $table->string('ten_nguoi_nhan');
            $table->string('email_nguoi_nhan');
            $table->string('so_dien_thoai_nguoi_nhan');
            $table->string('dia_chi_nguoi_nhan');
            $table->dateTime('ngay_dat');
            $table->decimal('tong_tien', 15, 2);
            $table->text('ghi_chu')->nullable();
            $table->foreignId('phuong_thuc_thanh_toan_id')->constrained('tb_phuong_thuc_thanh_toan');
            $table->foreignId('trang_thai_id')->constrained('tb_trang_thai_don_hang');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_don_hang');
    }
};
