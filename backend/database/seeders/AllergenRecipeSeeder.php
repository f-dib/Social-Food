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
        // Fetch all recipes and allergens
        $recipes = Recipe::all();
        $allergens = Allergen::all();

        // Array to hold the allergen_recipe relationships
        $allergenRecipes = [];

        // Loop through each recipe
        foreach ($recipes as $recipe) {
            // Select random allergens for this recipe
            $randomAllergens = $allergens->random(rand(1, 14));

            foreach ($randomAllergens as $allergen) {
                // Add the relationship to the array
                $allergenRecipes[] = [
                    'recipe_id' => $recipe->id,
                    'allergen_id' => $allergen->id,
                ];
            }
        }

        // Insert the generated relationships into the pivot table
        DB::table('allergen_recipe')->insert($allergenRecipes);
    }
}
