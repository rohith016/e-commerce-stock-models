<?php

namespace Database\Factories;

use App\Models\Order;
use Illuminate\Database\Eloquent\Factories\Factory;

class OrderFactory extends Factory
{
    protected $model = Order::class;

    public function definition()
    {
        return [
            'user_id' => $this->faker->numberBetween(1, 50),
            'order_status' => $this->faker->randomElement(['pending', 'shipped', 'delivered', 'cancelled']),
            'payment_status' => $this->faker->randomElement(['paid', 'pending', 'failed']),
            'total_amount' => $this->faker->randomFloat(2, 5, 500),
            'status' => $this->faker->boolean(20)
        ];
    }
}
