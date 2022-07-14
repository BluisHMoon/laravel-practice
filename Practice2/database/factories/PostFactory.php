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

    public function definition()
    {
        return [
            //
            'title' => $this->faker->realText(30),
            'content' => $this->faker->realText(150),
            'pic' => $this->faker->image('public/images', 376, 295, null, false),
            'published' => $this->faker->boolean(true),
        ];
    }
}
