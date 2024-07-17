<?php

namespace Database\Seeders;

use App\Models\Recipe;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RecipeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $recipes = [
            // Ricette per Roberto Palanga
            ['name' => 'Pasta alla Carbonara', 'description' => 'Descrizione della Pasta alla Carbonara', 'nationality' => 'Italiana', 'cooking_time' => '20', 'user_id' => 1, 'typology_id' => 2],
            ['name' => 'Tiramisù', 'description' => 'Descrizione del Tiramisù', 'nationality' => 'Italiana', 'cooking_time' => '30', 'user_id' => 1, 'typology_id' => 4],

            // Ricette per Emanuele Pogliari
            ['name' => 'Risotto alla Milanese', 'description' => 'Descrizione del Risotto alla Milanese', 'nationality' => 'Italiana', 'cooking_time' => '40', 'user_id' => 2, 'typology_id' => 2],
            ['name' => 'Panna Cotta', 'description' => 'Descrizione della Panna Cotta', 'nationality' => 'Italiana', 'cooking_time' => '10', 'user_id' => 2, 'typology_id' => 4],

            // Ricette per Giuseppe Cassone
            ['name' => 'Lasagne', 'description' => 'Descrizione delle Lasagne', 'nationality' => 'Italiana', 'cooking_time' => '60', 'user_id' => 3, 'typology_id' => 2],
            ['name' => 'Cannoli Siciliani', 'description' => 'Descrizione dei Cannoli Siciliani', 'nationality' => 'Italiana', 'cooking_time' => '45', 'user_id' => 3, 'typology_id' => 4],

            // Ricette per Mattia Morriale
            ['name' => 'Pizza Margherita', 'description' => 'Descrizione della Pizza Margherita', 'nationality' => 'Italiana', 'cooking_time' => '15', 'user_id' => 4, 'typology_id' => 2],
            ['name' => 'Gelato', 'description' => 'Descrizione del Gelato', 'nationality' => 'Italiana', 'cooking_time' => '10', 'user_id' => 4, 'typology_id' => 4],

            // Ricette per Federico Dibitonto
            ['name' => 'Spaghetti al Pomodoro', 'description' => 'Descrizione degli Spaghetti al Pomodoro', 'nationality' => 'Italiana', 'cooking_time' => '25', 'user_id' => 5, 'typology_id' => 2],
            ['name' => 'Pesto alla Genovese', 'description' => 'Descrizione del Pesto alla Genovese', 'nationality' => 'Italiana', 'cooking_time' => '15', 'user_id' => 5, 'typology_id' => 2],
        ];

        foreach ($recipes as $recipe) {
            Recipe::create($recipe);
        }
    }
}
