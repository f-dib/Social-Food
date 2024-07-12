<?php

namespace Database\Seeders;

use App\Models\Allergen;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AllergenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $allergens = [
            ['name' => 'Arachidi e derivati', 'type' => 'Arachidi'],
            ['name' => 'Frutta a guscio', 'type' => 'Frutta a guscio'],
            ['name' => 'Latte e derivati', 'type' => 'Latte'],
            ['name' => 'Molluschi', 'type' => 'Molluschi'],
            ['name' => 'Pesce', 'type' => 'Pesce'],
            ['name' => 'Sesamo', 'type' => 'Sesamo'],
            ['name' => 'Soia', 'type' => 'Soia'],
            ['name' => 'Crostacei', 'type' => 'Crostacei'],
            ['name' => 'Glutine', 'type' => 'Glutine'],
            ['name' => 'Lupini', 'type' => 'Lupini'],
            ['name' => 'Senape', 'type' => 'Senape'],
            ['name' => 'Sedano', 'type' => 'Sedano'],
            ['name' => 'Anidride solforosa e solfiti', 'type' => 'Solfiti'],
            ['name' => 'Uova e derivati', 'type' => 'Uova'],
        ];

        foreach ($allergens as $allergen) {
            Allergen::create($allergen);
        }
    }
}
