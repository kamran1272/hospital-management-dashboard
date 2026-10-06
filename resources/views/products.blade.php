@extends('layouts.app')

@section('content')
<div class="container mx-auto -mt-4">
    <h1 class="text-4xl font-bold mb-8 bg-primary py-4  px-4 -ml-4 -mr-9 text-center text-white">Products</h1>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        <!-- Add your product cards here -->
        <div class="bg-white p-4 rounded-lg shadow-md">
            <img src="{{ asset('images/p2.jpg') }}" alt="" class="w-full h-auto rounded-lg shadow-lg">
            <h2 class="text-xl font-semibold ">Product 1</h2>
            <p class="text-gray-500">Lorem, ipsum dolor sit amet consectetur adipisicing, elit. Omnis, aperiam.</p>
        </div>
        <div class="bg-white p-4 rounded-lg shadow-md">
            <img src="{{ asset('images/p3.jpg') }}" alt="" class="w-full h-auto rounded-lg shadow-lg">
            <h2 class="text-xl font-semibold">Product 2</h2>
            <p class="text-gray-500">Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident, mollitia?</p>
        </div>
        <div class="bg-white p-4 rounded-lg shadow-md">
            <img src="{{ asset('images/p4.jpg') }}" alt="" class="w-full h-auto rounded-lg shadow-lg">          
            <h2 class="text-xl font-semibold">Product 3</h2>
            <p class="text-gray-500">Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim, totam.</p>
        </div>
        <!-- Add more product cards as needed -->
    </div>
</div>
@endsection
