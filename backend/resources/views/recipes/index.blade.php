@extends('layouts.app')

@section('content') 

<div class="flex justify-center pt-7 gap-4 flex-wrap">

    @foreach ($recipes as $recipe)
        <div href="#" class="block w-80 p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{ $recipe->name }}</h5>
        <p class="font-normal text-gray-700 dark:text-gray-400">{{ $recipe->description }}</p>
        </div>
    @endforeach

</div>


@endsection
