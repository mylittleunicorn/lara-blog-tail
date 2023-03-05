<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
class PostFactory extends Factory
{

    public function definition(): array
    {
        return [
            'title' => fake()->sentence(),
            'excerpt' => fake()->paragraph(),
            'body' => fake()->paragraph(mt_rand(5, 10)),
            'status' => fake()->randomElement(['publish' ,'draft']),
            'user_id' => mt_rand(1, 3),
            'category_id' => mt_rand(1, 5),
        ];
    }
}
