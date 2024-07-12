<?php

namespace Database\Seeders;

use App\Models\Allergen;
use App\Models\Recipe;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AllergenRecipeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $allergenRecipes = [
            ['recipe_id' => 1, 'allergen_id' => 3], // Pasta alla Carbonara - Latte e derivati
            ['recipe_id' => 1, 'allergen_id' => 9], // Pasta alla Carbonara - Glutine
            ['recipe_id' => 1, 'allergen_id' => 14], // Pasta alla Carbonara - Uova e derivati
        
            ['recipe_id' => 2, 'allergen_id' => 3], // Tiramisù - Latte e derivati
            ['recipe_id' => 2, 'allergen_id' => 14], // Tiramisù - Uova e derivati
            ['recipe_id' => 2, 'allergen_id' => 9], // Tiramisù - Glutine
        
            ['recipe_id' => 3, 'allergen_id' => 9], // Risotto alla Milanese - Glutine
            ['recipe_id' => 3, 'allergen_id' => 3], // Risotto alla Milanese - Latte e derivati
        
            ['recipe_id' => 4, 'allergen_id' => 3], // Panna Cotta - Latte e derivati
        
            ['recipe_id' => 5, 'allergen_id' => 9], // Lasagne - Glutine
            ['recipe_id' => 5, 'allergen_id' => 3], // Lasagne - Latte e derivati
            ['recipe_id' => 5, 'allergen_id' => 14], // Lasagne - Uova e derivati
        
            ['recipe_id' => 6, 'allergen_id' => 3], // Cannoli Siciliani - Latte e derivati
            ['recipe_id' => 6, 'allergen_id' => 14], // Cannoli Siciliani - Uova e derivati
            ['recipe_id' => 6, 'allergen_id' => 9], // Cannoli Siciliani - Glutine
        
            ['recipe_id' => 7, 'allergen_id' => 9], // Pizza Margherita - Glutine
            ['recipe_id' => 7, 'allergen_id' => 3], // Pizza Margherita - Latte e derivati
        
            ['recipe_id' => 8, 'allergen_id' => 3], // Gelato - Latte e derivati
        
            ['recipe_id' => 9, 'allergen_id' => 9], // Spaghetti al Pomodoro - Glutine
        
            ['recipe_id' => 10, 'allergen_id' => 9], // Pesto alla Genovese - Glutine
            ['recipe_id' => 10, 'allergen_id' => 13], // Pesto alla Genovese - Anidride solforosa e solfiti
        ];

        // Insert the generated relationships into the pivot table
        DB::table('allergen_recipe')->insert($allergenRecipes);
    }
}
