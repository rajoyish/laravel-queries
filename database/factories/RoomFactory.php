<?php

namespace Database\Factories;

use App\Models\Room;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class RoomFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    protected $model = Room::class;

    public function definition()
    {
        return [
            'room_number' => fake()->unique()->numberBetween(1, 30),
            'room_size' => fake()->numberBetween(1, 5),
            'price' => fake()->numberBetween(100, 600),
            'description' => fake()->paragraph(),
        ];
    }
}
