<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />  
        <script src="https://cdn.tailwindcss.com"></script>          
    </head>
    <body class="antialiased">
        <div class="">
            @if (Route::has('login'))
                <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                    @auth
                        <a href="{{ url('/home') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500 text-white">Home</a>
                    @else
                        <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500 text-white">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500 text-white">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
        </div>
        <!-- Hero Section -->
<section class="bg-blue-500 py-20 text-white">
    <div class="container mx-auto text-center">
        <h1 class="text-5xl font-bold mb-4">Welcome to the Hospital Management System</h1>
        <p class="text-xl">Providing Quality Healthcare Services</p>
    </div>
</section>

<!-- About Section -->
<section class="bg-gray-100 py-16">
    <div class="container mx-auto">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 items-center">
            <div>
                <img src="{{ asset('images/p1.jpg') }}" alt="Hospital Image" class="rounded-lg shadow-lg">
            </div>
            <div class="text-center md:text-left">
                <h2 class="text-4xl font-bold mb-4">About Our Hospital</h2>
                <p class="text-xl leading-relaxed">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam scelerisque ligula vitae justo convallis, non lacinia ipsum lacinia.</p>
            </div>
        </div>
    </div>
</section>

<!-- Call-to-Action Section -->
<section class="bg-blue-600 py-16 text-white">
    <div class="container mx-auto text-center">
        <h2 class="text-4xl font-bold mb-4">Get Started Today</h2>
        <p class="text-xl leading-relaxed mb-8">Sign up for an account and manage your hospital operations seamlessly.</p>
        <div>
            <a href="{{ route('register') }}" class="px-8 py-4 bg-white text-blue-600 font-bold rounded-full hover:bg-blue-200 transition duration-300">Register Now</a>
        </div>
    </div>
</section>

<!-- Images Section -->
<section class="py-16">
    <div class="container mx-auto">
        <h2 class="text-4xl font-bold text-center mb-8">Our Facilities</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div>
                <img src="{{ asset('images/f3.jpg') }}" alt="Facility 1" class="rounded-lg shadow-lg">
            </div>
            <div>
                <img src="{{ asset('images/f2.jpg') }}" alt="Facility 2" class="rounded-lg shadow-lg">
            </div>
            <div>
                <img src="{{ asset('images/f3.jpg') }}" alt="Facility 3" class="rounded-lg shadow-lg">
            </div>
        </div>
    </div>
</section>
<footer class="bg-dark mt-2">
             <div class="container mx-auto text-center">
            <p class="text-white">&copy; {{ date('d/m/Y') }} Hospital Management. All rights reserved.</p>
            <ul class="flex justify-center mt-0">
                <li class="mx-2">
                    <a href="/about" class="text-white hover:text-gray-400">About Us</a>
                </li>
                <li class="mx-2">
                    <a href="/contact" class="text-white hover:text-gray-400">Contact</a>
                </li>
                <li class="mx-2">
                    <a href="/privacy-policy" class="text-white hover:text-gray-400">Privacy Policy</a>
                </li>
                
            </ul>
        </div>
        </footer>
    </body>
</html>
