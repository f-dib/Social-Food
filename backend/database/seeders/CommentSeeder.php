<?php

namespace Database\Seeders;

use App\Models\Comment;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $comments = [
            ['comment' => 'Ottima ricetta!', 'recipe_id' => '1'],
            ['comment' => 'Molto buona!', 'recipe_id' => '2'],
            ['comment' => 'Da rifare!', 'recipe_id' => '3'],
            ['comment' => 'Eccellente!', 'recipe_id' => '4'],
            ['comment' => 'Buonissima!', 'recipe_id' => '5'],
            ['comment' => 'Molto gustosa!', 'recipe_id' => '6'],
            ['comment' => 'Squisita!', 'recipe_id' => '7'],
            ['comment' => 'Deliziosa!', 'recipe_id' => '8'],
            ['comment' => 'Favolosa!', 'recipe_id' => '9'],
            ['comment' => 'Superba!', 'recipe_id' => '10'],
        ];

        foreach ($comments as $comment) {
            Comment::create($comment);
        }
    }
}
