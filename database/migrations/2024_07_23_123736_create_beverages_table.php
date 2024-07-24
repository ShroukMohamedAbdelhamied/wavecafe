<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBeveragesTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('beverages', function (Blueprint $table) {
            $table->id();
            $table->string('beverage_title', 100);
            $table->text('beverage_content');
            $table->decimal('beverage_price', 8, 2);
            $table->boolean('published');
            $table->boolean('special');
            $table->string('beverage_image', 100);
            $table->unsignedBigInteger('category_id');
            $table->foreign('category_id')->references('id')->on('categories');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('beverages');
    }
}
