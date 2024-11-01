<?php

namespace Database\Factories;

use App\Models\Address;
use Illuminate\Database\Eloquent\Factories\Factory;

class AddressFactory extends Factory
{
    protected $model = Address::class;

    public function definition()
    {
        return [
            'user_id' => $this->faker->numberBetween(1, 50),
            'address_line_1' => $this->faker->streetAddress,
            'address_line_2' => $this->faker->optional()->secondaryAddress,
            'address_line_3' => $this->faker->optional()->streetName,
            'city' => $this->faker->city,
            'postal_code' => $this->faker->postcode,
            'country' => $this->faker->country,
            'is_default' => $this->faker->boolean(20) // 20% chance of being true
        ];
        
    }
}
