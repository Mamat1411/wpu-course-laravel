<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->sentence(mt_rand(1, 5)),
            'author' => fake()->name(),
            'slug' => fake()->unique()->slug(mt_rand(1, 5), false),
            'body' => fake()->realText()
        ];
    }
}
