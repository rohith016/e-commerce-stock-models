<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Refund;

class ReviewSeeder extends Seeder
{
    public function run()
    {
        Refund::factory()->count(20)->create(); 
    }
}
