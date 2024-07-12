<?php

namespace Database\Seeders;

use App\Models\Recipe;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class IngredientRecipeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $ingredientRecipes = [
            ['recipe_id' => 1, 'ingredient_id' => 1, 'quantity' => 200.0], // Pasta alla Carbonara
            ['recipe_id' => 1, 'ingredient_id' => 2, 'quantity' => 100.0],
            ['recipe_id' => 1, 'ingredient_id' => 3, 'quantity' => 150.0],
            ['recipe_id' => 1, 'ingredient_id' => 4, 'quantity' => 50.0],
            ['recipe_id' => 1, 'ingredient_id' => 5, 'quantity' => 5.0],
            
            ['recipe_id' => 2, 'ingredient_id' => 6, 'quantity' => 200.0], // Tiramisù
            ['recipe_id' => 2, 'ingredient_id' => 7, 'quantity' => 100.0],
            ['recipe_id' => 2, 'ingredient_id' => 8, 'quantity' => 150.0],
            ['recipe_id' => 2, 'ingredient_id' => 9, 'quantity' => 100.0],

            ['recipe_id' => 3, 'ingredient_id' => 10, 'quantity' => 300.0], // Risotto alla Milanese
            ['recipe_id' => 3, 'ingredient_id' => 11, 'quantity' => 5.0],
            ['recipe_id' => 3, 'ingredient_id' => 12, 'quantity' => 50.0],
            ['recipe_id' => 3, 'ingredient_id' => 13, 'quantity' => 100.0],

            ['recipe_id' => 4, 'ingredient_id' => 14, 'quantity' => 10.0], // Panna Cotta
            ['recipe_id' => 4, 'ingredient_id' => 15, 'quantity' => 200.0],

            ['recipe_id' => 5, 'ingredient_id' => 1, 'quantity' => 500.0], // Lasagne
            ['recipe_id' => 5, 'ingredient_id' => 16, 'quantity' => 200.0],
            ['recipe_id' => 5, 'ingredient_id' => 17, 'quantity' => 100.0],
            ['recipe_id' => 5, 'ingredient_id' => 18, 'quantity' => 50.0],
            ['recipe_id' => 5, 'ingredient_id' => 19, 'quantity' => 300.0],

            ['recipe_id' => 6, 'ingredient_id' => 2, 'quantity' => 100.0], // Cannoli Siciliani
            ['recipe_id' => 6, 'ingredient_id' => 7, 'quantity' => 150.0],
            ['recipe_id' => 6, 'ingredient_id' => 8, 'quantity' => 100.0],

            ['recipe_id' => 7, 'ingredient_id' => 1, 'quantity' => 300.0], // Pizza Margherita
            ['recipe_id' => 7, 'ingredient_id' => 20, 'quantity' => 200.0],
            ['recipe_id' => 7, 'ingredient_id' => 21, 'quantity' => 100.0],
            ['recipe_id' => 7, 'ingredient_id' => 22, 'quantity' => 5.0],
            
            ['recipe_id' => 8, 'ingredient_id' => 23, 'quantity' => 200.0], // Gelato

            ['recipe_id' => 9, 'ingredient_id' => 1, 'quantity' => 200.0], // Spaghetti al Pomodoro
            ['recipe_id' => 9, 'ingredient_id' => 19, 'quantity' => 100.0],
            ['recipe_id' => 9, 'ingredient_id' => 20, 'quantity' => 150.0],
            ['recipe_id' => 9, 'ingredient_id' => 24, 'quantity' => 50.0],
            
            ['recipe_id' => 10, 'ingredient_id' => 21, 'quantity' => 100.0], // Pesto alla Genovese
            ['recipe_id' => 10, 'ingredient_id' => 22, 'quantity' => 50.0],
        ];

        // Insert the generated relationships into the pivot table
        DB::table('ingredient_recipe')->insert($ingredientRecipes);
    }
}
