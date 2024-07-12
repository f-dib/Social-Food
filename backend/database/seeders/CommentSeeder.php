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
            ['comment' => 'Ottima ricetta!'],
            ['comment' => 'Molto buona!'],
            ['comment' => 'Da rifare!'],
            ['comment' => 'Eccellente!'],
            ['comment' => 'Buonissima!'],
            ['comment' => 'Molto gustosa!'],
            ['comment' => 'Squisita!'],
            ['comment' => 'Deliziosa!'],
            ['comment' => 'Favolosa!'],
            ['comment' => 'Superba!'],
        ];

        foreach ($comments as $comment) {
            Comment::create($comment);
        }
    }
}
