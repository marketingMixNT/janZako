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
        Schema::create('rooms', function (Blueprint $table) {
            $table->id();
            $table->json('meta_title')->nullable();
            $table->json('meta_desc')->nullable();
            $table->json('title')->unique();
            $table->json('slug')->unique();
            $table->json('short_desc');
            $table->json('desc');
            $table->json('beds');
            $table->json('bathroom');
            $table->json('equipment');
            $table->text('thumbnail');
            $table->text('gallery');
            $table->integer('sort')->nullable();
            $table->foreignId('apartment_id')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rooms');
    }
};
