<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Apartment;

class ApartmentFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Apartment::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'meta_title' => '{}',
            'meta_desc' => '{}',
            'title' => '{}',
            'slug' => '{}',
            'map' => $this->faker->text(),
            'booking_script' => $this->faker->text(),
            'phone' => $this->faker->phoneNumber(),
            'mail' => $this->faker->text(),
            'address' => $this->faker->text(),
            'logo' => $this->faker->text(),
            'gallery' => $this->faker->text(),
            'sort' => $this->faker->numberBetween(-10000, 10000),
            'slider_heading' => '{}',
            'slider_images' => $this->faker->text(),
            'google_reviews' => $this->faker->numberBetween(-10000, 10000),
            'google_reviews_average' => $this->faker->numberBetween(-10000, 10000),
            'google_reviews_link' => $this->faker->text(),
            'tripadvisor_reviews' => $this->faker->numberBetween(-10000, 10000),
            'tripadvisor_reviews_average' => $this->faker->numberBetween(-10000, 10000),
            'tripadvisor_reviews_link' => $this->faker->text(),
        ];
    }
}
