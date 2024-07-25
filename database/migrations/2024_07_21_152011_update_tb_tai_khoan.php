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
        //
        Schema::table('tb_tai_khoan', function (Blueprint $table) {
            //
            $table->softDeletes();//Thêm 1 trường deleteted_at đê xóa mềm


        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
        Schema::table('tb_tai_khoan', function (Blueprint $table) {

            $table->dropSoftDeletes();
            //
        });
    }
};
