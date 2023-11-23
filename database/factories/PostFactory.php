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
            //
            'title' => $this->faker->word,
            'slug' => Str::slug($this->faker->sentence),
            'afficher' => $this->faker->boolean,
            'type' => $this->faker->randomElement(['type1', 'type2', 'type3']),
           // 'lien' =>  $this->faker->url,
            'description' => $this->faker->sentence,
            'content' => $this->faker->paragraph,
            'category_id' => $this->faker->numberBetween(1,10),
            'author' => $this->faker->name(),
        ];
    }
}
