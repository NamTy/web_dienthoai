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
            $table->bigIncrements('product_id');
            $table->char('product_name');
            $table->text('product_content');
            $table->decimal('product_price');
            $table->integer('product_discount');
            $table->string('product_image_link');
            $table->text('product_image_list');
            $table->integer('product_view');
            $table->integer('buyed');
            $table->integer('rate_total');
            $table->integer('rate_count');
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
