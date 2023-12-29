<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

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
       // ['title', 'slug', 'afficher', 'type', 'lien', 'description', 'content', 'category_id', 'author'];
        return [
             'title'=> $this->faker->sentence,
            'slug' => $this->faker->slug,
            'description' => $this->faker->paragraph,
            'content' => $this->faker->paragraphs(3, true),
            'author' => $this->faker->name,
            'category_id' =>$this->faker->numberBetween(1, 4),
            //'lien' => $this->faker->url,
            'type' => $this->faker->word,
            'views_count' => $this->faker->numberBetween(0, 1000),
            'is_featured' => $this->faker->boolean,
            'published_at' => $this->faker->dateTimeBetween('-1 year', 'now'),

        ];

    }
}
