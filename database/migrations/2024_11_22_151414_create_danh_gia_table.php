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
        Schema::create('danh_gia', function (Blueprint $table) {
            $table->id(); // ID tự tăng
            $table->unsignedBigInteger('user_id'); // Người đánh giá
            $table->unsignedBigInteger('don_hang_id'); // Liên kết với đơn hàng
            $table->unsignedBigInteger('nuoc_hoa_id'); // Liên kết với sản phẩm (nước hoa)
            $table->integer('rating')->checkBetween(1, 5); // Số sao từ 1 đến 5
            $table->text('comment'); // Nội dung đánh giá (bắt buộc, trên 10 ký tự)
            $table->string('image', 255)->nullable(); // Hình ảnh (tùy chọn)
            $table->string('video', 255)->nullable(); // Video (tùy chọn)
            $table->timestamps(); // Tạo cột created_at và updated_at tự động

            // Ràng buộc khóa ngoại
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade'); // Khi xóa người dùng, đánh giá sẽ bị xóa
            $table->foreign('don_hang_id')->references('id')->on('don_hang')->onDelete('cascade'); // Khi xóa đơn hàng, đánh giá sẽ bị xóa
            $table->foreign('nuoc_hoa_id')->references('id')->on('nuoc_hoa')->onDelete('cascade'); // Khi xóa sản phẩm, đánh giá sẽ bị xóa
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('danh_gia');
    }
};
