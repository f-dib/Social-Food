<?php

namespace Database\Seeders;

use App\Models\Ingredient;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class IngredientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $ingredients = [
            ['name' => 'Pasta'],
            ['name' => 'Uova'],
            ['name' => 'Pancetta'],
            ['name' => 'Pecorino'],
            ['name' => 'Pepe'],
            ['name' => 'Caffè'],
            ['name' => 'Zucchero'],
            ['name' => 'Mascarpone'],
            ['name' => 'Savoiardi'],
            ['name' => 'Riso'],
            ['name' => 'Zafferano'],
            ['name' => 'Burro'],
            ['name' => 'Vino bianco'],
            ['name' => 'Gelatina'],
            ['name' => 'Latte'],
            ['name' => 'Farina'],
            ['name' => 'Cacao'],
            ['name' => 'Cioccolato'],
            ['name' => 'Carne macinata'],
            ['name' => 'Pomodoro'],
            ['name' => 'Mozzarella'],
            ['name' => 'Basilico'],
            ['name' => 'Aglio'],
            ['name' => 'Olio d\'oliva'],
            ['name' => 'Formaggio Parmigiano'],
        ];

        foreach ($ingredients as $ingredient) {
            Ingredient::create($ingredient);
        }
    }
}
