<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('booking_id');
            $table->integer('user_id');
            $table->string('city_village');
            $table->string('house');
            $table->integer('phone');
            $table->string('email');
            $table->string('postal_code');
            $table->string('service_name');
            $table->integer('service_quantity');
            $table->integer('price');
            $table->string('booking_status')->default('pending');
            $table->string('payment_status')->default('pending');
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
};