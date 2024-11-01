<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\AffiliateProgram;

class AffiliateProgramSeeder extends Seeder
{
    public function run()
    {
        AffiliateProgram::factory()->count(10)->create(); 
    }
}
