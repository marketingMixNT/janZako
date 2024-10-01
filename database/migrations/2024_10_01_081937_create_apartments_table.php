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
        Schema::create('apartments', function (Blueprint $table) {
            $table->id();
            $table->json('meta_title')->nullable();
            $table->json('meta_desc')->nullable();
            $table->json('title')->unique();
            $table->json('slug')->unique();
            $table->text('map');
            $table->text('booking_script');
            $table->text('phone');
            $table->text('mail');
            $table->text('address');
            $table->text('logo');
            $table->text('thumbnail');
            $table->json('short_desc');
            $table->json('about_heading');
            $table->json('about_text_first');
            $table->json('about_text_second');
            $table->text('about_images');
            $table->json('rooms_heading');
            $table->json('rooms_text');
            $table->integer('sort')->nullable();
            $table->json('slider_heading')->nullable();
            $table->text('slider_images');
            $table->integer('google_reviews');
            $table->integer('google_reviews_average');
            $table->text('google_reviews_link');
            $table->integer('tripadvisor_reviews');
            $table->integer('tripadvisor_reviews_average');
            $table->text('tripadvisor_reviews_link');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('apartments');
    }
};
