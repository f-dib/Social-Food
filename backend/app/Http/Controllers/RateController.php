<?php

namespace App\Http\Controllers;

use App\Models\Recipe;
use App\Models\Rate;
use Illuminate\Http\Request;
use illuminate\Support\Facades\Auth;

class RateController extends Controller
{
    public function index(){
        $recipe = Recipe::where('user_id', Auth::id()->first());

        $rates = Rate::where('reciper_id', $recipe->id)->get();

        return view('rate.index', compact('rates'));
    }
}
