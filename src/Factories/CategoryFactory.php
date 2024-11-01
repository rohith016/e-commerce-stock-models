<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

class CategoryFactory extends Factory
{
    protected $model = Category::class;

    public function definition()
    {
        return [
            'name' => $this->faker->words(5, true),  
            'parent_category_id' => $this->faker->numberBetween(1, 10),  // Generates a category ID between 1 and 10
        ];
    }
}
