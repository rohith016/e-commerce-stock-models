<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    protected $model = Product::class;

    public function definition()
    {
        return [
            'name' => $this->faker->words(3, true),  // Generates a product name with 3 words
            'description' => $this->faker->sentence(10),  // Generates a short description with 10 words
            'price' => $this->faker->randomFloat(2, 5, 500),  // Generates a random price between 5 and 500 with 2 decimal places
            'stock_quantity' => $this->faker->numberBetween(0, 100),  // Generates a stock quantity between 0 and 100
            'category_id' => $this->faker->numberBetween(1, 10),  // Generates a category ID between 1 and 10
            'status' => $this->faker->randomElement(['active', 'inactive']),  // Sets status as either 'active' or 'inactive'
        ];
        
        
    }
}
