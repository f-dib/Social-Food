<?php

namespace Database\Seeders;

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
            ['category_id' => 1, 'recipe_id' => 1],
            ['category_id' => 2, 'recipe_id' => 2],
            ['category_id' => 3, 'recipe_id' => 3],
            ['category_id' => 4, 'recipe_id' => 4],
            ['category_id' => 1, 'recipe_id' => 5],
            ['category_id' => 2, 'recipe_id' => 6],
            ['category_id' => 3, 'recipe_id' => 7],
            ['category_id' => 4, 'recipe_id' => 8],
            ['category_id' => 1, 'recipe_id' => 9],
            ['category_id' => 2, 'recipe_id' => 10],
        ];

        foreach ($categoryRecipes as $categoryRecipe) {
            $recipe = Recipe::find($categoryRecipe['recipe_id']);
            $recipe->categories()->attach($categoryRecipe['category_id']);
        }
    }
}
