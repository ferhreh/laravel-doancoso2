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
        Schema::create('don_hang', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id'); // ID người dùng
            $table->string('maDonHang')->unique(); // Mã đơn hàng
            $table->string('tenKhachHang'); // Tên khách hàng
            $table->string('tenDonHang'); // Tên đơn hàng
            $table->string('hinhThucMua', 50); // Hình thức mua (chuỗi)
            $table->dateTime('ngayDatHang'); // Ngày đặt hàng
            $table->decimal('tongTien', 15, 2); // Tổng tiền
            $table->integer('soLuong'); // Số lượng
            $table->tinyInteger('trangThai')->default(1); // Trạng thái đơn hàng
            $table->text('ghiChu')->nullable(); // Ghi chú
            $table->timestamps();

            // Ràng buộc khóa ngoại
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('don_hang');
    }
};