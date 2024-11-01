<?php

namespace Database\Factories;

use App\Models\Review;
use Illuminate\Database\Eloquent\Factories\Factory;

class ReviewFactory extends Factory
{
    protected $model = Review::class;

    public function definition()
    {
        return [
            'product_id' => $this->faker->numberBetween(1, 50),
            'user_id' => $this->faker->numberBetween(1, 50),
            'rating' => $this->faker->numberBetween(1, 5),
            'title' => $this->faker->sentence(1),
            'body' => $this->faker->paragraph(3)
        ];
    }
}
