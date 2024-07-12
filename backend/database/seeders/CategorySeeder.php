<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            ['name' => 'Vegano'],
            ['name' => 'Carne'],
            ['name' => 'Pesce'],
            ['name' => 'Pasta'],
            ['name' => 'Vegetariano'],
            ['name' => 'Frutti di mare'],
            ['name' => 'Pollame'],
            ['name' => 'Speziato'],
            ['name' => 'Cucina Mediterranea'],
            ['name' => 'Cucina Asiatica'],
            ['name' => 'Cucina Messicana'],
            ['name' => 'Cucina Italiana'],
            ['name' => 'Cucina Francese'],
            ['name' => 'Cucina Americana'],
            ['name' => 'Cucina Africana'],
            ['name' => 'Cucina Indiana'],
            ['name' => 'Frutta'],
            ['name' => 'Verdure'],
            ['name' => 'Piatti unici'],
            ['name' => 'Piatti freddi'],
            ['name' => 'Piatti al forno'],
            ['name' => 'Piatti caldi'],
            ['name' => 'Piatti veloci'],
            ['name' => 'Piatti gourmet'],
            ['name' => 'Piatti regionali'],
            ['name' => 'Piatti internazionali'],
            ['name' => 'Piatti etnici'],
            ['name' => 'Finger food'],
            ['name' => 'Street food'],
            ['name' => 'Snack'],
            ['name' => 'Dessert'],
            ['name' => 'Torte']
        ];

        foreach ($categories as $category) {
            Category::create($category);
        } 
    }
}
