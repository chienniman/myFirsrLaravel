<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('items', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('items_img_path')->nullable()->comment('商品圖片路徑');
            $table->string('items_name')->nullable()->comment('商品名稱');
            $table->integer('items_price')->nullable()->comment('商品價格');
            $table->string('items_context')->nullable()->comment('商品描述');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('items');
    }
};
