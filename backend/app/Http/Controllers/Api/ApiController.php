<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Recipe;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function index()
    {
        $recipes = Recipe::all();
        return response()->json([
            'success' => true,
            'results' => $recipes
        ]);
    }
}
