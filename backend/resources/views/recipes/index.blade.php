@extends('layouts.app')

@section('content') 

<div class="container p-7 max-w-full max-h-full rounded-ss-3xl bg-gray-600">

    <div class="flex justify-start py-7 gap-4 flex-wrap">
        
        <h1 class="dark:text-white  text-gray-900 text-3xl text-center sm:text-5xl">Ciao {{ Auth::user()->name }}</h1>
    
    </div>

    <div class="p-10 bg-white rounded-3xl flex justify-start">
        <div>
            <h3 class="text-gray-900 text-3xl text-center sm:text-5xl py-5">jumbo title</h3>
            <p>jumbo paragraf</p>
        </div>
    </div>

    <div class="flex justify-start py-7 gap-4 flex-wrap">
        
        <h1 class="dark:text-white  text-gray-900 text-3xl text-center sm:text-5xl">Ricette</h1>
    
    </div>
    
    <div class="flex justify-center pt-7 gap-4 flex-wrap">
    
        @foreach ($recipes as $recipe)
            <div href="#" class="block w-full p-6 bg-white border border-gray-200 rounded-3xl shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{ $recipe->name }}</h5>
            <p class="font-normal text-gray-700 dark:text-gray-400">{{ $recipe->description }}</p>
            </div>
        @endforeach
    
    </div>

</div>



@endsection
