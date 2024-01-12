<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Article>
 */
class ArticleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->words(3, true),
            'slug' => Str::slug(fake()->words(3, true), '-'),
            'article_category_id' => rand(1, 5),
            'user_id' => 1,
            'thumbnail' => fake()->image('storage/app/public', 640, 480, null, false),
            'content' => fake()->paragraph(10, true),
            'keyword' => fake()->words(),
            'status' => true
        ];
    }
}
