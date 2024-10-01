<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\GalleryHome;

class GalleryHomeFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = GalleryHome::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'category' => '{}',
            'images' => $this->faker->text(),
        ];
    }
}
