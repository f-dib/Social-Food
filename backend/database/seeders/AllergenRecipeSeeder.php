<?php

namespace Database\Seeders;

use App\Models\Recipe;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AllergenRecipeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $allergenRecipes = [
            ['recipe_id' => 1, 'allergen_id' => 1],
            ['recipe_id' => 2, 'allergen_id' => 2],
            ['recipe_id' => 3, 'allergen_id' => 3],
            ['recipe_id' => 4, 'allergen_id' => 4],
            ['recipe_id' => 5, 'allergen_id' => 5],
            ['recipe_id' => 6, 'allergen_id' => 6],
            ['recipe_id' => 7, 'allergen_id' => 7],
            ['recipe_id' => 8, 'allergen_id' => 8],
            ['recipe_id' => 9, 'allergen_id' => 9],
            ['recipe_id' => 10, 'allergen_id' => 10],
        ];

        
        foreach ($allergenRecipes as $allergenRecipe) {
            $recipe = Recipe::find($allergenRecipe['recipe_id']);
            $recipe->allergen()->attach($allergenRecipe['allergen_id']);
        }
    }
}
