<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Recipe;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function index()
    {
        $query = Recipe::with(['rates', 'comments', 'typology'])->get();

        return response()->json([
            'success' => true,
            'results' => $query,
            'message' => 'Recipe list retrieved successfully',
        ]);
    }
}
