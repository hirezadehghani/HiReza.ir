<?php

namespace Database\Factories;

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
    public function definition()
    {
        return [
            'title' => $this->faker->realText(rand(30, 46),1),
            // 'excerpt' => $this->faker->realText(300, 1),
            // 'body' => $this->faker->realText(10000,1),
            'excerpt' => '<p>' . implode('</p><p>', $this->faker->paragraphs(2)) . '</p>',
            'body' => '<p>' . implode('</p><p>', $this->faker->paragraphs(6)) . '</p>',
            'slug' => $this->faker->slug(),
            'category_id' => Category::all()->random()->id,
            'user_id' => User::all()->random()->id,
            'published_at' => $this->faker->dateTimeThisYear(),
        ];
    }
}
