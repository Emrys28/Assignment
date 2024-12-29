@extends('layouts.app')

@section('title', 'Recipe Collection')

@section('content')
        <main class="mx-auto my-5 p-5 max-w-screen-xl text-center" class="resources">
            <h1 class="text-[2.5rem] mb-5 text-orange-600">Culinary Resources</h1>
            <p>Explore a variety of resources, including recipes, tutorials, instructional videos, and kitchen hacks to elevate your cooking game!</p>
            <section class="recipe-cards">
                <h2 class="text-[2rem] my-5 text-orange-600">Downloadable Recipe Cards</h2>
                <div class="grid grid-cols-[repeat(auto-fit,_minmax(300px,_1fr))] gap-5 mb-7" class="card-grid">
                    <div class="transform hover:translate-y-[-5px] bg-white border border-gray-300 rounded-lg shadow-md p-4 text-center transition-transform duration-200 ease-in-out" class="card">
                        <img class="w-full h-[200px] object-cover rounded-lg mb-2.5" src="resources/Chicken-Tinga-Tacos-6.jpg" alt="Chicken Tinga Tacos">
                        <h3 class="text-[1.5rem] mb-2.5">Chicken Tinga Tacos</h3>
                        <p class="text-[1rem] mb-2.5">A smoky and savory twist to your favorite tacos.</p>
                        <button class="bg-orange-600 hover:bg-orange-700 text-white border-none p-2.5 px-5 rounded-sm cursor-pointer" onclick="downloadResource('Chicken-Tinga-Tacos.pdf')">Download Recipe</button>
                    </div>

                    <div class="transform hover:translate-y-[-5px] bg-white border border-gray-300 rounded-lg shadow-md p-4 text-center transition-transform duration-200 ease-in-out" class="card">
                        <img class="w-full h-[200px] object-cover rounded-lg mb-2.5" src="resources/Amazing-Alfredo-Sauce-1365x2048.jpg" alt="Alfredo Sauce">
                        <h3 class="text-[1.5rem] mb-2.5">Alfredo Sauce</h3>
                        <p class="text-[1rem] mb-2.5">A creamy and rich Italian classic.</p>
                        <button class="bg-orange-600 hover:bg-orange-700 text-white border-none p-2.5 px-5 rounded-sm cursor-pointer" onclick="downloadResource('Alfredo-Sauce.pdf')">Download Recipe</button>
                    </div>

                    <div class="transform hover:translate-y-[-5px] bg-white border border-gray-300 rounded-lg shadow-md p-4 text-center transition-transform duration-200 ease-in-out" class="card">
                        <img class="w-full h-[200px] object-cover rounded-lg mb-2.5" src="resources/Homemade-Ramen-3-3.jpg" alt="Quick Homemade Ramen">
                        <h3 class="text-[1.5rem] mb-2.5">Quick Homemade Ramen</h3>
                        <p class="text-[1rem] mb-2.5">A comforting bowl of noodles, ready in minutes.</p>
                        <button class="bg-orange-600 hover:bg-orange-700 text-white border-none p-2.5 px-5 rounded-sm cursor-pointer" onclick="downloadResource('Homemade-Ramen.pdf')">Download Recipe</button>
                    </div>

                    <div class="transform hover:translate-y-[-5px] bg-white border border-gray-300 rounded-lg shadow-md p-4 text-center transition-transform duration-200 ease-in-out" class="card">
                        <img class="w-full h-[200px] object-cover rounded-lg mb-2.5" src="resources/Honey-Chipotle-Chicken-Skewers.jpg" alt="Chipotle Chicken Skewers">
                        <h3 class="text-[1.5rem] mb-2.5">Chipotle Chicken Skewers</h3>
                        <p class="text-[1rem] mb-2.5">"Sweet, smoky, and spicy skewers perfect for grilling or air frying."</p>
                        <button class="bg-orange-600 hover:bg-orange-700 text-white border-none p-2.5 px-5 rounded-sm cursor-pointer" onclick="downloadResource('Chicken-Skewers.pdf')">Download Recipe</button>
                    </div>
                </div>
            </section>
    

            <section class="cooking-tutorials">
                <h2 class="text-[2rem] my-5 text-orange-600">Cooking Tutorials</h2>
                <div class="mb-7 text-center" class="tutorial">
                    <img class="w-full max-w-[400px] h-auto rounded-lg mb-2.5" src="resources/cooking tutorials.png" alt="Cooking Tutorials">
                    <p>Watch step-by-step video tutorials to master advanced cooking techniques.</p>
                    <a href="https://www.youtube.com/watch?v=BHcyuzXRqLs" target="_blank"><button>Watch Tutorials</button></a>
                </div>
            </section>
    

            <section class="instructional-videos">
                <h2 class="text-[2rem] my-5 text-orange-600">Instructional Videos</h2>
                <div class="mb-7 text-center" class="tutorial">
                    <img class="w-full max-w-[400px] h-auto rounded-lg mb-2.5" src="resources/Instructional cooking skills.png" alt="Instructional Videos">
                    <p>Learn essential cooking skills through detailed instructional videos.</p>
                    <a href="https://www.youtube.com/watch?v=aopS3q6f1GY" target="_blank"><button>View Videos</button></a>
                </div>
            </section>
    

            <section class="kitchen-hacks">
                <h2 class="text-[2rem] my-5 text-orange-600">Kitchen Hacks</h2>
                <div class="mb-7 text-center" class="hack">
                    <img class="w-full max-w-[400px] h-auto rounded-lg mb-2.5" src="resources/Website-Blog-Image_Kitchen-Hacks-scaled.jpg" alt="Kitchen Hacks">
                    <p>Discover time-saving tips and tricks to make your cooking process more efficient.</p>
                    <button class="bg-orange-600 hover:bg-orange-700 text-white border-none p-2.5 px-5 rounded-sm cursor-pointer" onclick="downloadResource('kitchen-hacks.pdf')">Download Hacks</button>
                </div>
            </section>
        </main>
@endsection