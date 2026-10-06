@extends('layouts.app')

@section('content')
<header class="bg-blue-600 text-white -mt-4">
        <div class="container mx-auto text-center">
            <h1 class="text-4xl font-bold mb-8 bg-primary py-4  px-4 -ml-4 -mr-9 text-center text-white">Our Services</h1>
        </div>
    </header>
    <div class="container mx-auto px-4 py-8">
       
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <!-- Service Item 1 -->
            <div class="bg-white rounded-lg shadow-md p-6">
                <img src="/images/s1.jpg" alt="Service 1" class="w-full h-40 object-cover mb-4 rounded-lg">
                <h2 class="text-xl font-bold mb-2">Service 1</h2>
                <p class="text-gray-700">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse at arcu eu nisi tempus finibus ut non tellus.</p>
            </div>

            <!-- Service Item 2 -->
            <div class="bg-white rounded-lg shadow-md p-6">
                <img src="/images/s2.jpg" alt="Service 2" class="w-full h-40 object-cover mb-4 rounded-lg">
                <h2 class="text-xl font-bold mb-2">Service 2</h2>
                <p class="text-gray-700">Nullam sed erat a mi ultrices consectetur eget eget neque. Proin et leo sed ex vulputate tincidunt.</p>
            </div>

            <!-- Service Item 3 -->
            <div class="bg-white rounded-lg shadow-md p-6">
                <img src="/images/s3.jpg" alt="Service 3" class="w-full h-40 object-cover mb-4 rounded-lg">
                <h2 class="text-xl font-bold mb-2">Service 3</h2>
                <p class="text-gray-700">Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
            </div>

            <!-- Add more service items here -->

        </div>
    </div>
@endsection
