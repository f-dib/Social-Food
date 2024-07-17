<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    protected $fillable = [
        'comment', 'recipe_id'
    ];

    public function recipe(){

        return $this->belongsTo(Recipe::class);
        
    }
}
