<?php

namespace Database\Factories;

use App\Models\Payment;
use Illuminate\Database\Eloquent\Factories\Factory;

class PaymentFactory extends Factory
{
    protected $model = Payment::class;

    public function definition()
    {
        return [
            'order_id' => $this->faker->numberBetween(1, 50),
            'payment_method' => $this->faker->sentence(1),
            'amount' => $this->faker->randomFloat(2, 5, 500),
            'status' => $this->faker->randomElement(['pending', 'paid']),
            'transaction_id' => $this->faker->sentence(1),
            'payment_at' => $this->faker->dateTime(),
        ];
    }
}
