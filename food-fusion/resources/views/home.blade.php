@extends('layouts.app')

@section('title', 'Welcome to FoodFusion')


@section('content')
    <section id="home">
        <h1 class="text-2xl text-orange-600">Welcome to FoodFusion</h1>
        <p>Discover a world of culinary creativity. Explore recipes, share tips, and join a vibrant community of food lovers!</p>
        <button  id="openPopupButton" class="bg-orange-600 text-white text-base px-6 py-4 rounded-lg cursor-pointer font-bold uppercase shadow-md transition-all duration-300 ease-in-out my-5 hover:bg-orange-700 hover:-translate-y-1 hover:shadow-lg active:bg-orange-800 active:translate-y-0 active:shadow-md">
            Join Us
        </button>
        <div id="overlay" class="hidden fixed inset-0 bg-black bg-opacity-50 z-40"></div>
        <div id="join-us" class="hidden fixed inset-0 flex items-center justify-center z-50">
            <form class="flex flex-col">
                <h2 class="text-orange-600">Join FoodFusion</h2>
                <label class="mt-2 mb-1 font-bold text-orange-600" for="first-name">First Name:</label>
                <input class="mb-4 p-2 border border-gray-300 rounded w-full"  type="text" id="first-name" name="first-name" placeholder="Enter First Name" required>
                <label class="mt-2 mb-1 font-bold text-orange-600" for="last-name">Last Name:</label>
                <input class="mb-4 p-2 border border-gray-300 rounded w-full"  type="text" id="last-name" name="last-name" placeholder="Enter Last Name" required>
                <label class="mt-2 mb-1 font-bold text-orange-600" for="email">Email:</label>
                <input class="mb-4 p-2 border border-gray-300 rounded w-full"  type="email" id="email" name="email" placeholder="Enter Your Email" required>
                <label class="mt-2 mb-1 font-bold text-orange-600" for="password">Password:</label>
                <input class="mb-4 p-2 border border-gray-300 rounded w-full"  type="password" id="password" name="password" placeholder="Type Password" required>
                <button class="mb-4 hover:bg-orange-700 p-2 border border-gray-300 rounded w-full bg-orange-600 text-white border-0 p-2.5 px-5 cursor-pointer font-bold rounded mt-2 block w-full text-center"  type="submit">Sign Up</button>
                <button class="mb-4 hover:bg-orange-700 p-2 border border-gray-300 rounded w-full bg-orange-600 text-white border-0 p-2.5 px-5 cursor-pointer font-bold rounded mt-2 block w-full text-center"  type="button" onclick="closePopup()">Close</button>
            </form>
        </div>
    </section>
    <section id="featured-recipes">
        <h2 class="text-2xl text-orange-600">Featured Recipes</h2>
        <div class="recipe-carousel">
            <div class="m-2.5 inline-block w-[300px] text-center border border-gray-300 rounded overflow-hidden">
                <img class="w-full h-[200px] object-cover" src="resources/Chicken-Tinga-Tacos-6.jpg" alt="Chicken Tinga Tacos">
                <h3 class="text-orange-600 my-2.5">Chicken Tinga Tacos</h3>
                <p class="italic text-gray-500">Flavor-packed shredded chicken with a smoky tomato sauce, perfect for taco nights.</p>
            </div>
            <div class="m-2.5 inline-block w-[300px] text-center border border-gray-300 rounded overflow-hidden">
                <img class="w-full h-[200px] object-cover" src="resources/Amazing-Alfredo-Sauce-1365x2048.jpg" alt="Alfredo Sause">
                <h3 class="text-orange-600 my-2.5">Alfredo Sause</h3>
                <p class="italic text-gray-500">A rich and creamy sauce made with butter, cream, and Parmesan cheese, ideal for pasta lovers</p>
            </div>
            <div class="m-2.5 inline-block w-[300px] text-center border border-gray-300 rounded overflow-hidden">
                <img class="w-full h-[200px] object-cover" src="resources/Scallion-Pancake-with-Egg.jpg" alt="Scallion Pancake">
                <h3 class="text-orange-600 my-2.5">Scallion Pancake with egg</h3>
                <p class="italic text-gray-500">Crispy and flaky scallion pancakes topped with a perfectly cooked egg, a delightful street-food favorite.</p>
            </div>
            <div class="m-2.5 inline-block w-[300px] text-center border border-gray-300 rounded overflow-hidden">
                <img class="w-full h-[200px] object-cover" src="resources/Homemade-Ramen-3-3.jpg" alt="Homemade Ramen">
                <h3 class="text-orange-600 my-2.5">Quick Homemade Ramen</h3>
                <p class="italic text-gray-500">A comforting bowl of noodles in a savory broth with fresh veggies and a soft-boiled egg, ready in minutes.</p>
            </div>
            </div>
    </section>
   
@endsection
