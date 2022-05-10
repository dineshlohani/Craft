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
            $table->bigIncrements('id');
            $table->integer('category_id');
            $table->integer('subcategory_id')->nullable();
            $table->string('product_name')->unique();
            $table->string('product_code')->unique();
            $table->string('selling_price');
            $table->mediumText('product_desc');
            $table->string('product_quantity');
            $table->string('product_color')->nullable();
            $table->string('product_size')->nullable();
            $table->string('product_weight')->nullable();
            $table->string('product_dimension')->nullable();
            $table->string('product_diameter')->nullable();
            $table->string('product_material')->nullable();
            $table->string('image_one')->nullable();
            $table->string('image_two')->nullable();
            $table->string('image_three')->nullable();
            $table->string('video_link')->nullable();
            $table->string('audio_link')->nullable();
            $table->string('discount_price')->nullable();
            $table->integer('best_selling')->nullable();
            $table->integer('new_arrival')->nullable();
            $table->integer('deal_week')->nullable();
            $table->integer('status')->nullable();
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
