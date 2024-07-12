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
            ['rating' => 5],
            ['rating' => 4],
            ['rating' => 3],
            ['rating' => 5],
            ['rating' => 4],
            ['rating' => 3],
            ['rating' => 5],
            ['rating' => 4],
            ['rating' => 3],
            ['rating' => 5],
        ];

        foreach ($rates as $rate) {
            Rate::create($rate);
        }
    }
}
