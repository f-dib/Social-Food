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

    <div class="flex flex-wrap justify-start gap-4 py-7">
        
        <h1 class="text-3xl text-center text-gray-900 dark:text-white sm:text-5xl">Ricette</h1>
    
    </div>
    
    <div class="flex flex-wrap justify-center gap-4 pt-7">
    
        @foreach ($recipes as $recipe)
            <div href="#" class="block w-full p-6 bg-white border border-gray-200 shadow rounded-3xl hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{ $recipe->name }}</h5>
            <p class="font-normal text-gray-700 dark:text-gray-400">{{ $recipe->description }}</p>
            </div>
        @endforeach
    
    </div>

</div>



@endsection
