@extends('layouts.app')

@section('title', 'Community Cookbook')

@section('content')
    <section class="mt-7 text-center" class="intro">
        <h2 class="text-[2em] mb-2.5 text-orange-600">Share Your Recipe</h2>
        <p class="text-[1.1em]" >We believe food is best when shared. Share your delicious recipes and culinary experiences with our community and inspire others to create something amazing!</p>
    </section>
    
    <section class="bg-white p-5 mt-7 rounded-lg shadow-lg" class="recipe-submission">
        <h2 class="text-orange-600 text-[1.8em] mb-5">Submit Your Recipe</h2>
        <form action="#" method="POST">
            <label class="text-[1.2em] mb-2 block" for="recipe-title">Recipe Title:</label>
            <input class="w-full p-2.5 text-[1.1em] mb-3.5 border border-gray-300 rounded-sm" type="text" id="recipe-title" name="title" placeholder="Write Your Recipe Title" required>
          
            <label class="text-[1.2em] mb-2 block" for="recipe-description">Description:</label>
            <textarea class="w-full p-2.5 text-[1.1em] mb-3.5 border border-gray-300 rounded-sm" id="recipe-description" name="description" placeholder="Write a description of your recipe" required></textarea>
          
            <label class="text-[1.2em] mb-2 block" for="ingredients">Ingredients:</label>
            <textarea class="w-full p-2.5 text-[1.1em] mb-3.5 border border-gray-300 rounded-sm" id="ingredients" name="ingredients" placeholder="List your ingredients" required></textarea>
          
            <label class="text-[1.2em] mb-2 block" for="instructions">Instructions:</label>
            <textarea class="w-full p-2.5 text-[1.1em] mb-3.5 border border-gray-300 rounded-sm" id="instructions" name="instructions" placeholder="Provide instructions with step-by-step" required></textarea>
          
            <label class="text-[1.2em] mb-2 block" for="recipe-image">Recipe Image URL:</label>
            <input class="w-full p-2.5 text-[1.1em] mb-3.5 border border-gray-300 rounded-sm" type="url" id="recipe-image" name="image" placeholder="Enter the image URL" required>
          
          <button class="bg-orange-600 hover:bg-orange-700 text-white p-3.5 px-5 text-[1.2em] border-none rounded-sm cursor-pointer" type="submit">Submit Recipe</button>
        </form>
    </section>
@endsection