<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCartItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cart_items', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('cart_id')->unsigned();
            $table->string('name', 255);
            $table->bigInteger('product_id')->unsigned();
            $table->integer('quantity')->default(1);
            $table->string('image', 255)->nullable();
            $table->decimal('giaTienLon', 15, 2)->nullable();
            $table->decimal('giaTienNho', 15, 2)->nullable();
            $table->string('dungTichNho', 255);
            $table->string('dungTich', 255);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cart_items');
    }
}
