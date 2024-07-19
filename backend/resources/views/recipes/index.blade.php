@extends('layouts.app')

@section('content') 

<div class="container max-w-full max-h-full bg-gray-600 p-7 rounded-ss-3xl">

    <div class="flex flex-wrap justify-start gap-4 py-7">
        
        <h1 class="text-3xl text-center text-gray-900 dark:text-white sm:text-5xl">Ciao {{ Auth::user()->name }}</h1>
    
    </div>

    <div class="flex justify-start p-10 bg-white rounded-3xl">
        <div>
            <h3 class="py-5 text-3xl text-center text-gray-900 sm:text-5xl">jumbo title</h3>
            <p>jumbo paragraf</p>
        </div>
    </div>

    <div class="flex flex-wrap justify-between gap-4 py-7">
        
        <h1 class="text-3xl text-center text-gray-900 dark:text-white sm:text-5xl">Ricette</h1>

        <a  class="text-white hover:text-white border hover:border-gray-800 hover:bg-gray-900 focus:ring-4 focus:outline-none focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2 dark:border-gray-600 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-800" href="{{ route('admin.recipes.create')}}">Nuova Ricetta</a>
    </div>
    
    <div class="flex flex-wrap justify-center gap-4 pt-7">
    
        @foreach ($recipes as $recipe)
            <div class="block w-full p-6 bg-white border border-gray-200 shadow rounded-3xl hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                <a href="{{ route('admin.recipes.show', $recipe) }}">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{ $recipe->name }}</h5>
                    <p class="font-normal text-gray-700 dark:text-gray-400">{{ $recipe->description }}</p>
                    @if ($recipe->rates->isNotEmpty())
                        @foreach ($recipe->rates as $rate)
                            <p class="font-normal text-gray-700 dark:text-gray-400">Valutazione: {{ $rate->rating }}</p>
                        @endforeach
                    @endif
                </a>
            </div>
        @endforeach

    </div>

</div>



@endsection
