<?php

namespace Database\Seeders;

use App\Models\Rate;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $rates = [
            ['rating' => 5, 'recipe_id' => '1'],
            ['rating' => 4, 'recipe_id' => '2'],
            ['rating' => 3, 'recipe_id' => '3'],
            ['rating' => 5, 'recipe_id' => '4'],
            ['rating' => 4, 'recipe_id' => '5'],
            ['rating' => 3, 'recipe_id' => '6'],
            ['rating' => 5, 'recipe_id' => '7'],
            ['rating' => 4, 'recipe_id' => '8'],
            ['rating' => 3, 'recipe_id' => '9'],
            ['rating' => 5, 'recipe_id' => '10'],
        ];

        foreach ($rates as $rate) {
            Rate::create($rate);
        }
    }
}
