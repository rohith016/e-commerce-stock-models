<?php

namespace Database\Factories;

use App\Models\Inventory;
use Illuminate\Database\Eloquent\Factories\Factory;

class InventoryFactory extends Factory
{
    protected $model = Inventory::class;

    public function definition()
    {
        return [
            'product_id' => $this->faker->numberBetween(1, 50),
            'location' => $this->faker->sentence(1),
            'quantity' => $this->faker->numberBetween(1, 50),
            'last_updated_at' => $this->faker->dateTimeBetween('-1 years', 'now')
        ];
    }
}
