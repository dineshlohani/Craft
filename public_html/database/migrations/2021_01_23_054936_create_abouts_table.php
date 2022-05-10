<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAboutsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('abouts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('about_title')->nullable();
            $table->mediumText('about_desc')->nullable();
            $table->string('about_image')->nullable();
            $table->string('image_color')->nullable();
            $table->string('ship_info')->nullable();
            $table->string('return_info')->nullable();
            $table->string('quality_info')->nullable();
            $table->string('wrapping_info')->nullable();
            $table->string('video_link_image')->nullable();
            $table->string('video_link')->nullable();
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
        Schema::dropIfExists('abouts');
    }
}
