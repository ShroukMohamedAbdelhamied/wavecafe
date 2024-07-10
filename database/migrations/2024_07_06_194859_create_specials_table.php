<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('specials', function (Blueprint $table) {
            $table->id();
            $table->string('title', 100);
            $table->string('content', 100);
            $table->string('price', 100);
            $table->boolean('published');
            $table->boolean('special');
            $table->string('image', 100);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('specials');
    }
};
