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
        Schema::create('testimonial_homes', function (Blueprint $table) {
            $table->id();
            $table->json('name');
            $table->json('source');
            $table->json('content');
            $table->integer('sort')->nullable();
            $table->boolean('home')->default(false);
            $table->foreignId('apartment_id')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('testimonial_homes');
    }
};
