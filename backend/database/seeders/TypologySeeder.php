<?php

namespace Database\Seeders;

use App\Models\Typology;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TypologySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $typologies = [
            ['name' => 'Antipasti'],
            ['name' => 'Primi'],
            ['name' => 'Secondi'],
            ['name' => 'Dolci'],
            ['name' => 'Contorni'],
            ['name' => 'Insalate'],
            ['name' => 'Zuppe'],
            ['name' => 'Panini'],
            ['name' => 'Pizze'],
            ['name' => 'Sushi'],
            ['name' => 'Barbecue'],
            ['name' => 'Cocktail']
        ];

        foreach ($typologies as $typology) {
            Typology::create($typology);
        }
    }
}
