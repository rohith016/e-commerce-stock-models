<?php

namespace Database\Factories;

use App\Models\AffiliateProgram;
use Illuminate\Database\Eloquent\Factories\Factory;

class AffiliateProgramFactory extends Factory
{
    protected $model = AffiliateProgram::class;

    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'commission_rate' => $this->faker->numberBetween(1, 5),
            'start_date' => $this->faker->date(),
            'end_date' => $this->faker->date(),
        ];
    }
}
