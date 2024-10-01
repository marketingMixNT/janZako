<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Apartment;
use App\Models\Room;

class RoomFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Room::class;

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
            'short_desc' => '{}',
            'desc' => '{}',
            'equipment' => '{}',
            'thumbnail' => $this->faker->text(),
            'gallery' => $this->faker->text(),
            'sort' => $this->faker->numberBetween(-10000, 10000),
            'apartment_id' => Apartment::factory(),
        ];
    }
}
