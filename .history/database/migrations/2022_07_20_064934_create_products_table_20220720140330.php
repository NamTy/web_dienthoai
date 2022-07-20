<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id('id');
            $table->string('name');
            $table->integer('category_id');
            $table->text('content');
            $table->decimal('price');
            $table->integer('discount');
            $table->string('image_link');
            $table->text('image_list');
            $table->integer('view');
            $table->integer('buyed');
            $table->integer('rate_total');
            $table->integer('reate_count');
            $table->integer('created');
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
        Schema::dropIfExists('products');
    }
}
