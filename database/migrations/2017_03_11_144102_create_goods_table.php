<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGoodsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('goods', function (Blueprint $table) {
            $table->increments('good_id');
            $table->string('good_name')->comment="Название товара";
            $table->string('good_vendor_code')->nullabel()->comment="артикул товара";
            $table->float('good_old_price')->nullable()->comment="Старая цена товара";
            $table->float('good_price')->nullable()->comment="Цена товара";
            $table->float('good_weight')->nullable()->comment="Вес товара";
            $table->string('good_description')->nullable()->comment="Описание категории";
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
        Schema::drop('goods');
    }
}
