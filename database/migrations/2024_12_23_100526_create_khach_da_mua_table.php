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
        Schema::create('khach_da_mua', function (Blueprint $table) {
            $table->id();
            $table->foreignId('khachHangID')->constrained('khach_hang')->onDelete('cascade')->onUpdate('cascade');
            $table->string('name');
            $table->text('ghiChu')->nullable();
            $table->string('hinhThuc')->nullable();
            $table->decimal('tongTien', 10, 2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('khach_da_mua');
    }
};
