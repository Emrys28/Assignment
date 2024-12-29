@extends('layouts.app')

@section('title', 'About Us')

@section('content')
        <section lass="text-center p-5" id="our-mission">
            <h2 class="text-center text-2xl mb-2.5 text-orange-600">Our Mission</h2>
            <p class="text-[1.2rem] text-gray-700">
                At FoodFusion, our mission is to inspire home cooks to explore their creativity, connect with a community of food lovers, 
                and celebrate the art of cooking. We believe that every dish has a story, and we’re here to help you tell yours.
            </p>
        </section>

        <section class="text-center p-5" id="team">
            <h2 class="text-[2rem] mb-5 text-orange-600">Meet the Team</h2>

            <div class="inline-block w-[250px] m-5 text-center" class="chef-profile">
                <img class="transition-transform duration-300 ease-in-out hover:scale-110 w-[150px] h-[150px] rounded-full mb-2.5 shadow-lg" src="resources/Mei-Lin.webp" alt="Chef Mei Lin">
                <h3 class="text-[1.5rem] mb-1.5 text-orange-600">Chef Mei Lin</h3>
                <p class="italic text-gray-500">"With a background in traditional Asian cooking, Chef Mei Lin updates classic recipes with contemporary touches."</p>
            </div>

            <div class="inline-block w-[250px] m-5 text-center" class="chef-profile">
                <img class="transition-transform duration-300 ease-in-out hover:scale-110 w-[150px] h-[150px] rounded-full mb-2.5 shadow-lg" src="resources/images.jpeg" alt="Chef Antonio Russo">
                <h3 class="text-[1.5rem] mb-1.5 text-orange-600">Chef Antonio Russo</h3>
                <p class="italic text-gray-500">"Hailing from the heart of Italy, Chef Antonio Russo specializes in crafting authentic, rustic Italian dishes."</p>
            </div>

            <div class="inline-block w-[250px] m-5 text-center" class="chef-profile">
                <img class="transition-transform duration-300 ease-in-out hover:scale-110 w-[150px] h-[150px] rounded-full mb-2.5 shadow-lg" src="resources/images (1).jpeg" alt="Chef James O'Connor">
                <h3 class="text-[1.5rem] mb-1.5 text-orange-600">Chef James O'Connor</h3>
                <p class="italic text-gray-500">"Specializing in modern British cuisine, Chef James O'Connor is known for his ability to elevate classic comfort food."</p>
            </div>
            <div class="inline-block w-[250px] m-5 text-center" class="chef-profile">
                <img class="transition-transform duration-300 ease-in-out hover:scale-110 w-[150px] h-[150px] rounded-full mb-2.5 shadow-lg" src="resources/Chef Elena Rivera.jpeg" alt="Chef Elena Rivera">
                <h3 class="text-[1.5rem] mb-1.5 text-orange-600">Chef Elena Rivera</h3>
                <p class="italic text-gray-500">"Chef Elena Rivera is a passionate advocate for sustainable cooking, focusing on plant-based recipes that celebrate fresh, local ingredients."</p>
            </div>
        </section>
@endsection