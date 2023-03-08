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
        Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('category_id');
            $table->string('category_name');
            $table->string('service_name');
            $table->string('slug');
            $table->string('tage_line');
            $table->decimal('price');
            $table->decimal('discount_price')->nullable();
            $table->longText('description');
            $table->longText('inclusion');
            $table->boolean('status');
            $table->string('image');
            $table->string('thumbnail_image');
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
        Schema::dropIfExists('services');
    }
};
