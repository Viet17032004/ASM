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
        Schema::create('tb_san_pham', function (Blueprint $table) {
            $table->id();
            $table->string('ten_san_pham');
            $table->integer('so_luong');
            $table->decimal('gia_san_pham', 15, 2);
            $table->decimal('gia_khuyen_mai', 15, 2)->nullable();
            $table->date('ngay_nhap');
            $table->text('mo_ta')->nullable();
            $table->foreignId('danh_muc_id')->constrained('tb_danh_muc');
            $table->boolean('trang_thai')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_san_pham');
    }
};
