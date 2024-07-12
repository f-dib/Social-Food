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
        // Fetch all recipes and categories
        $recipes = Recipe::all();
        $categories = Category::all();

        // Array to hold the category_recipe relationships
        $categoryRecipes = [];

        // Loop through each recipe
        foreach ($recipes as $recipe) {
            // Select a random category for this recipe
            $randomCategory = $categories->random();

            // Add the relationship to the array
            $categoryRecipes[] = [
                'recipe_id' => $recipe->id,
                'category_id' => $randomCategory->id,
            ];
        }

        // Insert the generated relationships into the pivot table
        DB::table('category_recipe')->insert($categoryRecipes);
    }
}
