<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\;
use App\Models\Home;
use App\Models\Slides;

class HomeFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Home::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'meta_title' => '{}',
            'meta_desc' => '{}',
            'slider_title' => '{}',
            'slider_subtitle' => '{}',
            'slider_images' => $this->faker->text(),
            'phone' => $this->faker->phoneNumber(),
            'mail' => $this->faker->text(),
            'logo' => $this->faker->text(),
            'map' => $this->faker->text(),
            'booking_script' => $this->faker->text(),
            'booking_link' => $this->faker->text(),
            'about_heading' => '{}',
            'about_text_first' => '{}',
            'about_text_second' => '{}',
            'about_images' => $this->faker->text(),
            'rooms_heading' => '{}',
            'rooms_text' => '{}',
            'testimonials_heading' => '{}',
            'testimonials_text' => '{}',
            'slides_id' => Slides::factory(),
            '_id' => ::factory(),
        ];
    }
}
