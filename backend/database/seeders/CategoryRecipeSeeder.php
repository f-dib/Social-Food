<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Recipe;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoryRecipeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categoryRecipes = [
            ['recipe_id' => 1, 'category_id' => 4], // Pasta alla Carbonara - Pasta
            ['recipe_id' => 1, 'category_id' => 2], // Pasta alla Carbonara - Carne
        
            ['recipe_id' => 2, 'category_id' => 31], // Tiramisù - Dessert
        
            ['recipe_id' => 3, 'category_id' => 19], // Risotto alla Milanese - Piatti unici
            ['recipe_id' => 3, 'category_id' => 12], // Risotto alla Milanese - Cucina Italiana
        
            ['recipe_id' => 4, 'category_id' => 31], // Panna Cotta - Dessert
        
            ['recipe_id' => 5, 'category_id' => 4], // Lasagne - Pasta
            ['recipe_id' => 5, 'category_id' => 2], // Lasagne - Carne
        
            ['recipe_id' => 6, 'category_id' => 31], // Cannoli Siciliani - Dessert
        
            ['recipe_id' => 7, 'category_id' => 19], // Pizza Margherita - Piatti unici
            ['recipe_id' => 7, 'category_id' => 12], // Pizza Margherita - Cucina Italiana
        
            ['recipe_id' => 8, 'category_id' => 31], // Gelato - Dessert
        
            ['recipe_id' => 9, 'category_id' => 4], // Spaghetti al Pomodoro - Pasta
            ['recipe_id' => 9, 'category_id' => 12], // Spaghetti al Pomodoro - Cucina Italiana
        
            ['recipe_id' => 10, 'category_id' => 20], // Pesto alla Genovese - Piatti freddi
            ['recipe_id' => 10, 'category_id' => 12], // Pesto alla Genovese - Cucina Italiana
        ];

        // Insert the generated relationships into the pivot table
        DB::table('category_recipe')->insert($categoryRecipes);
    }
}
