<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ConditionTag;

class ConditionTagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ConditionTag::factory()->count(15)->create();
    }
}
