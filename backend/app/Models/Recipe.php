<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recipe extends Model
{
    use HasFactory;

    public function user()
    {

        return $this->belongsTo(User::class);
    }

    public function category()
    {

        return $this->hasMany(Category::class);
    }

    public function rates()
    {

        return $this->hasMany(Rate::class);
    }

    public function comments()
    {

        return $this->hasMany(Comment::class);
    }

    public function medias()
    {

        return $this->hasMany(Media::class);
    }

    public function typologies()
    {

        return $this->hasOne(Typology::class);
    }

    public function ingredients()
    {

        return $this->hasMany(Ingredient::class);
    }

    public function allergens() 
    {
        
        return $this->hasMany(Allergen::class);
    }
}
