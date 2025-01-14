<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('email', 255)->unique();
            $table->string('password', 255);
            $table->tinyInteger('tinh_trang')->default(1);
            $table->timestamps();
            $table->tinyInteger('role')->default(0);
            $table->date('birthDay')->nullable();
            $table->string('phoneNumber', 20)->nullable();
            $table->string('name', 255)->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('users');
    }
}