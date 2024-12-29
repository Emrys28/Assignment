<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'FoodFusion')</title>
    @vite(['resources/css/app.css','resources/js/app.js'])
</head>
<body class="font-sans text-[1.2rem] leading-relaxed bg-gray-100 text-gray-800">
    <header class="bg-gray-800 text-white p-2.5">
        <nav class="bg-gray-800 text-white py-2 px-5">
            <ul class="list-none flex justify-center m-0 p-0">
                <li class="mx-4"><a class="text-white no-underline px-4 py-2 inline-block transition duration-300 ease-in-out hover:bg-gray-700" href="{{ route('home') }}">Home</a></li>
                <li class="mx-4"><a class="text-white no-underline px-4 py-2 inline-block transition duration-300 ease-in-out hover:bg-gray-700" href="{{ route('about') }}">About Us</a></li>
                <li class="mx-4"><a class="text-white no-underline px-4 py-2 inline-block transition duration-300 ease-in-out hover:bg-gray-700" href="{{ route('recipes') }}">Recipe Collection</a></li>
                <li class="mx-4"><a class="text-white no-underline px-4 py-2 inline-block transition duration-300 ease-in-out hover:bg-gray-700" href="{{ route('cookbook') }}">Community Cookbook</a></li>
                <li class="mx-4"><a class="text-white no-underline px-4 py-2 inline-block transition duration-300 ease-in-out hover:bg-gray-700" href="{{ route('contact') }}">Contact Us</a></li>
                <li class="mx-4"><a class="text-white no-underline px-4 py-2 inline-block transition duration-300 ease-in-out hover:bg-gray-700" href="{{ route('culinary') }}">Culinary Resources</a></li>
                <li class="mx-4"><a class="text-white no-underline px-4 py-2 inline-block transition duration-300 ease-in-out hover:bg-gray-700" href="{{ route('educational') }}">Educational Resources</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <section  class="p-5 mx-auto my-5 max-w-3xl bg-white rounded-lg shadow-md">
            @yield('content')
        </section>
    </main>

    <footer class="fixed bottom-0 left-0 w-full bg-orange-600 text-white text-center py-4">
            <p>&copy; 2024 FoodFusion. Follow us on 
                <a href="https://www.instagram.com/">Instagram</a> and <a href="https://www.facebook.com/">Facebook</a>.
            </p>
    </footer>
</body>
</html>