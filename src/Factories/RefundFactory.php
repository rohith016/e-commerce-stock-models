<?php

namespace Database\Factories;

use App\Models\Refund;
use Illuminate\Database\Eloquent\Factories\Factory;

class RefundFactory extends Factory
{
    protected $model = Refund::class;

    public function definition()
    {
        return [
            'order_id' => $this->faker->numberBetween(1, 50),
            'amount' => $this->faker->numberBetween(1, 50),
            'reason' => $this->faker->sentence(4),
            'status' => $this->faker->randomElement(['initiated', 'processing', 'completed', 'cancelled', 'refunded', 'refunded_partially', 'pending_refund', 'partially_refunded', 'partially_refunded_partially', 'partially_refunded_completed']),
            'processed_at' => $this->faker->dateTimeBetween('-1 month', 'now')
        ];
    }
}
