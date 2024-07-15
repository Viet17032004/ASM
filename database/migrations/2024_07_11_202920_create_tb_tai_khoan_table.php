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
        Schema::create('tb_tai_khoan', function (Blueprint $table) {
            $table->id();
            $table->string('anh_dai_dien')->nullable();
            $table->string('ho_ten');
            $table->string('email')->unique();
            $table->string('so_dien_thoai')->nullable();
            $table->string('gioi_tinh')->nullable();
            $table->string('dia_chi')->nullable();
            $table->date('ngay_sinh')->nullable();
            $table->string('mat_khau');
            $table->foreignId('chuc_vu_id')->constrained('tb_chuc_vu');
            $table->boolean('trang_thai')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_tai_khoan');
    }
};
