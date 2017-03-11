<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->increments('categorie_id');
            $table->string('categorie_name')->comment="Название категории";
            $table->string('categorie_slug')->comment="Метка категории";
            $table->string('categorie_color')->nullable()->comment="Цвет категории";
            $table->string('categorie_description')->nullable()->comment="Описание категории";
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
        Schema::drop('categories');
    }
}
