<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->bigIncrements('id');
            $table->string('user_id')->nullable();
            $table->string('order_code')->nullable();
            $table->string('payment_type')->nullable();
            $table->string('payment_id')->nullable();
            $table->string('payment_amount')->nullable();
            $table->string('blnc_trans')->nullable();
            $table->string('stripe_order_id')->nullable();
            $table->string('subtotal')->nullable();
            $table->string('shipping')->nullable();
            $table->string('vat')->nullable();
            $table->string('total')->nullable();
            $table->string('status')->nullable()->default(0);
            $table->string('status_code')->nullable();
            $table->string('return_order')->default(0)->nullable();
            $table->string('month')->nullable();
            $table->string('date')->nullable();
            $table->string('year')->nullable();
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
        Schema::dropIfExists('orders');
    }
}
