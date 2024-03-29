<?php

namespace Database\Factories;
use App\Models\Post;
use App\Models\Category;
use App\Models\User;

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
            'title' => $this->faker->sentence,
            'excerpt' => $this->faker->sentence,
            'body' => $this->faker->paragraph,
            'category_id' => Category::factory(),
            'user_id' => User::factory(),
            'slug' => $this->faker->slug,
            'published_at' => $this->faker->dateTimeBetween('-1 year', 'now'),
            //
        ];
    }
}
