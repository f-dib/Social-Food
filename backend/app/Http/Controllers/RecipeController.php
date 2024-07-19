<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreRecipeRequest;
use App\Http\Requests\UpdateRecipeRequest;
use App\Models\Recipe;
use App\Models\Typology;
use Illuminate\Support\Facades\Auth;

class RecipeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $recipes = Recipe::where('user_id', Auth::id())->with('rates')->get();
        $user = Auth::user();

        // dd($recipes);

        return view('recipes.index', compact('recipes', 'user'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $typologies = Typology::all();
        return view('recipes.create', compact('typologies'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRecipeRequest $request)
    {
        $request->validated();

        $newRecipe = new Recipe();

        $request['user_id'] = Auth::id();

        $newRecipe->fill($request->all());
        $newRecipe->save();

        return redirect()->route('recipes.index', $newRecipe->id);

        // $validatedData = $request->validated();
        // $validatedData['user_id'] = Auth::id();

        // Recipe::create($validatedData);

        // return redirect()->route('recipes.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Recipe $recipe)
    {
        if ($recipe->user_id != Auth::id()) abort(404);

        return view('recipes.show', compact('recipe'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Recipe $recipe)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRecipeRequest $request, Recipe $recipe)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Recipe $recipe)
    {
        //
    }
}
