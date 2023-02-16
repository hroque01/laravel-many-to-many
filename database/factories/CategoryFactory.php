<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Category>
 */
class CategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'code' => fake()->regexify('[A-Z] [0-9] {5}'),
            'name' => fake()->words(rand(1, 5), true),
            'description' => fake()->text(rand(50, 200)),
        ];
    }
}