<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Cart;

class CartSeeder extends Seeder
{
    public function run()
    {
        Cart::factory()->count(10)->create(); 
    }
}
