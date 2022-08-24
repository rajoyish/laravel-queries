<?php

namespace Database\Factories;

use App\Models\Comment;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class CommentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    protected $model = Comment::class;

    public function definition()
    {
        return [
            'content' => fake()->paragraph(),
            'user_id' => fake()->numberBetween(1, 10),
            'rating' => fake()->numberBetween(1, 5),
        ];
    }
}
