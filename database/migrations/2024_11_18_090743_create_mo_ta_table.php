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
        Schema::create('mo_ta', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('nuoc_hoa_id');
            $table->text('noi_dung'); // Nội dung chi tiết
            $table->timestamps();
            // Định nghĩa khoa ngoại
            $table->foreign('nuoc_hoa_id')
            ->references('id')
            ->on('nuoc_hoa')
            ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mo_ta');
    }
};
