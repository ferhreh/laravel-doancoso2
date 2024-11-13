<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNuocHoaTable extends Migration
{
    public function up()
    {
        Schema::create('nuoc_hoa', function (Blueprint $table) {
            $table->id();
            $table->string('thuongHieu', 255);
            $table->string('name', 255);
            $table->string('gioiTinh', 255);
            $table->string('nongDo', 255);
            $table->string('dungTich', 255);
            $table->string('doLuuHuong', 255);
            $table->string('doToaHuong', 255);
            $table->decimal('giaTienLon', 15, 2)->nullable();
            $table->decimal('giaTienNho', 15, 2)->nullable();
            $table->string('dungTichNho', 255);
            $table->string('image', 255)->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('nuoc_hoa');
    }
}
