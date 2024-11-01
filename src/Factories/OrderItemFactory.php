<?php

namespace Database\Factories;

use App\Models\OrderItem;
use Illuminate\Database\Eloquent\Factories\Factory;

class OrderItemFactory extends Factory
{
    protected $model = OrderItem::class;

    public function definition()
    {
        return [
            'order_id' => $this->faker->numberBetween(1, 50),
            'product_id' => $this->faker->numberBetween(1, 50),
            'quantity' => $this->faker->numberBetween(1, 50),
            'price' => $this->faker->randomFloat(2, 5, 500)
        ];
    }
}
