<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;
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
    public function definition()
    {
        return [
            'user_id'=>User::factory(), //ID d'un utilisateur qui existe déjà
            'title' => $title = $this->faker->sentence,
            'slug' => Str::slug($title),
            'content' => $this->faker->paragraph,
        ];
    }
}
