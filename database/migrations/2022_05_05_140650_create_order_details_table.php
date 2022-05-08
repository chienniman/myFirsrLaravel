<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    //主資料
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_details', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->integer('subTotal')->nullable()->change();//金額小記
            $table->integer('shipping_fee')->nullable()->change();//運費
            $table->integer('total')->nullable()->change();//總計
            $table->integer('product_qty')->nullable()->change();//品項數量
            $table->string('name')->nullable()->change();//姓名
            $table->string('phone')->nullable()->change();//電話
            $table->string('email')->nullable()->change();//信箱
            $table->string('address')->nullable()->change();//地址
            $table->integer('pay_way')->nullable()->change(); //付款方式 避免編碼錯誤 ex:1.貨到付款 2.信用卡
            $table->integer('delivery_way')->nullable()->change();//送貨方式
            $table->string('shop_address')->nullable()->change();//取貨超商
            $table->integer('status')->nullable()->change();//訂單狀態 1.未付款 2.已付款 3.已出貨  4.已結單 5.已取消
            $table->string('ps')->nullable()->change();//備註
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('order_details');
    }
};
