<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Category;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Category>
 */
class CategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Category::class;

    public function definition()
    {
        return [
            //
            'title' => $this->faker->realText(10),
            'pic' => 'assets/img/recent-posts-'. rand(1, 4) .'.jpg',
            'desc' => $this->faker->realText(200),
            'enabled' => true,
            'sort' => rand(0, 10)
        ];
    }
}
