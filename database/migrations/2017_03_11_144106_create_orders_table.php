<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->increments('order_id');
            $table->string('order_amount')->nullabel()->comment="Сумма заказа";
            $table->string('order_client_name')->nullable()->comment="Имя клиента";
            $table->string('order_client_address')->nullable()->comment="Адрес клиента";
            $table->string('order_client_phone')->nullable()->comment="Телефон клиента";
            $table->string('order_comment')->nullable()->comment="Комментарий к заказу";
            $table->boolean('order_is_active')->default(true)->comment="Комментарий к заказу";
            $table->timestamps();
        });

        Schema::create('orders_to_goods', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('order_id');
            $table->integer('good_id');
        });
}

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('orders');
        Schema::drop('orders_to_goods');
    }
}
