@extends('layouts.app')

@section('content') 

<div class="flex flex-wrap justify-start gap-4 px-32 pt-7">
    
    <h1 class="text-3xl text-center text-gray-900 dark:text-white sm:text-5xl">Ricette Disponibili</h1>

</div>

<div class="flex flex-wrap justify-center gap-4 pt-7">

    @foreach ($recipes as $recipe)
        <div class="block p-6 bg-white border border-gray-200 rounded-lg shadow w-80 hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
            <a href="{{ route('admin.recipes.show', $recipe) }}">
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{ $recipe->name }}</h5>
                <p class="font-normal text-gray-700 dark:text-gray-400">{{ $recipe->description }}</p>
            </a>
        </div>
    @endforeach

    <div class="block p-6 bg-white border border-gray-200 rounded-lg shadow w-80 hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
        <a href="{{ route('admin.recipes.create') }}">
            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Nuova Ricetta</h5>
        </a>
    </div>

</div>


@endsection
