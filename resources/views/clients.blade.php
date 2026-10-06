@extends('layouts.app')

@section('content')
    <header class="bg-blue-600 text-white -mt-4">
        <div class="container mx-auto text-center">
            <h1 class="text-4xl font-bold mb-8 bg-primary py-4  px-4 -ml-4 -mr-9 text-center text-white">Our Clients</h1>
        </div>
    </header>

    <div class="container mx-auto mt-8 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 px-4 py-8">
        <!-- Client 1 -->
        <div class="bg-white rounded-lg shadow-md p-6">
            <img src="/images/c1.jpg" alt="Client 1" class="w-74 h-74 object-contain mx-auto mb-4">
            <h2 class="text-xl font-bold mb-2">Client 1</h2>
            <p class="text-gray-700">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam vel elit tellus.</p>
            <!-- <a href="#" class="text-blue-500 hover:underline">Visit Website</a> -->
        </div>

        <!-- Client 2 -->
        <div class="bg-white rounded-lg shadow-md p-6">
            <img src="/images/c2.jpg" alt="Client 2" class="w-74 h-74 object-contain mx-auto mb-4">
            <h2 class="text-xl font-bold mb-2">Client 2</h2>
            <p class="text-gray-700">Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
            <!-- <a href="#" class="text-blue-500 hover:underline">Visit Website</a> -->
        </div>

        <!-- Add more client cards here -->

    </div>
@endsection
