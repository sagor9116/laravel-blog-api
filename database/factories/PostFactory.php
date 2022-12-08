<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\User;

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
        $title = $this->faker->unique()->sentence();

        return [
            'title'       => $title,
            'slug'        => Str::slug($title),
            'description' => $this->faker->paragraph(),
            'image'       => $this->faker->imageUrl(),
            'author_id'   => User::all()->random()->id
        ];
    }
}
