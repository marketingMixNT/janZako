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
        Schema::create('homes', function (Blueprint $table) {
            $table->id();
            $table->json('meta_title')->nullable();
            $table->json('meta_desc')->nullable();
            $table->json('slider_title');
            $table->json('slider_subtitle');
            $table->text('slider_images');
            $table->text('phone');
            $table->text('mail');
            $table->text('logo');
            $table->text('map')->nullable();
            $table->text('booking_script');
            $table->text('booking_link');
            $table->json('about_heading');
            $table->json('about_text_first');
            $table->json('about_text_second');
            $table->text('about_images');
            $table->json('rooms_heading');
            $table->json('rooms_text');
            $table->json('testimonials_heading');
            $table->json('testimonials_text');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('homes');
    }
};
