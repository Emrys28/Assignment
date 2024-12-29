@extends('layouts.app')

@section('title', 'Recipe Collection')

@section('content')
<main class="mx-auto my-5 p-5 max-w-screen-xl text-center" class="educational-resources">
        <h1 class="text-[2.5rem] mb-5 text-orange-600">Educational Resources</h2>
        <p>Learn about sustainability and renewable energy with these educational materials.</p>

    <section class="renewable-energy-infographics">
        <div class="resource-item">
            <h2 class="text-[2rem] my-5 text-orange-600">Renewable Energy Infographics</h2>
            <img class="w-full max-w-[400px] h-auto rounded-lg mb-2.5" src="resources/renewable-energy-infographic-vector-19370062.jpg" alt="renewable energy infographics">
            <p>Download infographics to understand renewable energy concepts and applications.</p>
            <button class="bg-orange-600 hover:bg-orange-700 text-white border-none p-2.5 px-5 rounded-sm cursor-pointer" onclick="downloadResource('renewable-energy-infographics.pdf')">Download Infographics</button>
        </div>
    </section>

    <section class="instructional-videos">
        <div class="resource-item">
            <h2 class="text-[2rem] my-5 text-orange-600">Instructional Videos</h2>
            <img class="w-full max-w-[400px] h-auto rounded-lg mb-2.5" src="resources/renewable energy instruction.jpg" alt="renewable energy instruction">
            <p>Watch videos that explain the basics of renewable energy and its benefits.</p>
            <a href="https://www.youtube.com/watch?v=Giek094C_l4" target="_blank">
                <button class="bg-orange-600 hover:bg-orange-700 text-white border-none p-2.5 px-5 rounded-sm cursor-pointer">Watch Videos</button>
            </a>
        </div>
    </section>

    <section class="diy-projects">
        <div class="resource-item">
            <h2 class="text-[2rem] my-5 text-orange-600">DIY Projects</h2>
            <img class="w-full max-w-[400px] h-auto rounded-lg mb-2.5" src="resources/DIY project.jpg" alt="DIY Project">
            <p>Watch video guides for do-it-yourself renewable energy projects.</p>
            <a href="https://www.youtube.com/watch?app=desktop&v=j1g7UTo_3pg" target="blank"></a>
                <button class="bg-orange-600 hover:bg-orange-700 text-white border-none p-2.5 px-5 rounded-sm cursor-pointer">Watch Video</button>
        </div>
    </section>
    </main>
@endsection