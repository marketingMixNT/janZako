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
            'desc' => '{}',
            'equipment' => '{}',
            'thumbnail' => $this->faker->text(),
            'gallery' => $this->faker->text(),
            'sort' => $this->faker->numberBetween(-10000, 10000),
        ];
    }
}
