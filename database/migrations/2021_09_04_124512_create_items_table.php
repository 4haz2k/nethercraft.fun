<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItemsTable extends Migration
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
            $table->text("title")->comment('Название предмета');
            $table->float('price')->comment('Цена предмета');
            $table->text('item_meta')->comment('Идентификатор предмета в игре');
            $table->text('category')->comment('Категория предмета');
            $table->text('img')->comment('Ссылка на изображение');
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
        Schema::dropIfExists('items');
    }
}
