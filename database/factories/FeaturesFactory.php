<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Features;

class FeaturesFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Features::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'icon' => $this->faker->text(),
            'title' => '{}',
            'description' => '{}',
        ];
    }
}
