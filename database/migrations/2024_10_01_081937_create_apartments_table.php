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

            // Meta
            $table->json('meta_title')->nullable();
            $table->json('meta_desc')->nullable();
            $table->json('title')->unique();
            $table->json('slug')->unique();

            // Contact Information
            $table->text('phone');
            $table->text('mail');
            $table->text('address');
            $table->text('city');

            // Booking Information
            $table->text('booking_link');
            $table->text('booking_script');

            // Images
            $table->text('logo');
            $table->text('thumbnail');
            $table->text('about_images');
            $table->text('banner_rooms');
            $table->text('banner_gallery');
            $table->text('banner_contact');

            // Descriptions
            $table->json('short_desc');
            $table->json('about_heading');
            $table->json('about_text_first');
            $table->json('about_text_second');
            $table->json('rooms_heading');
            $table->json('rooms_text');

            // Map
            $table->text('map');
            $table->text('map_link');

            // Reviews
            $table->integer('google_reviews')->nullable();
            $table->integer('google_reviews_average')->nullable();
            $table->text('google_reviews_link')->nullable();
            $table->integer('tripadvisor_reviews')->nullable();
            $table->integer('tripadvisor_reviews_average')->nullable();
            $table->text('tripadvisor_reviews_link')->nullable();

            // Slider
            $table->json('slider_heading')->nullable();
            $table->text('slider_images');

            $table->integer('sort')->nullable();
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
