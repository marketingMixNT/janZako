<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Apartment;
use App\Models\TestimonialHome;

class TestimonialHomeFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = TestimonialHome::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'name' => '{}',
            'source' => '{}',
            'content' => '{}',
            'sort' => $this->faker->numberBetween(-10000, 10000),
            'apartment_id' => Apartment::factory(),
        ];
    }
}
