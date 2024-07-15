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
        Schema::create('tb_chi_tiet_don_hang', function (Blueprint $table) {
            $table->id();
            $table->foreignId('don_hang_id')->constrained('tb_don_hang');
            $table->foreignId('san_pham_id')->constrained('tb_san_pham');
            $table->integer('so_luong');
            $table->decimal('gia', 15, 2);
            $table->decimal('thanh_tien', 15, 2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_chi_tiet_don_hang');
    }
};
