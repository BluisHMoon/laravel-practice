<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Gallery>
 */
class GalleryFactory extends Factory
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
            'content' => $this->faker->realText(100),
            'pic' => 'images/mustache'. rand(1, 9) . '.jpg',
            'published' => true,
            'sort' => rand(1, 9),
        ];
    }
}
