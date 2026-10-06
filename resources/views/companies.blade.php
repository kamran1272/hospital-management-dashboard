@extends('layouts.app')

@section('content')
    <header class="bg-blue-600 text-white -mt-4">
        <div class="container mx-auto text-center">
            <h1 class="text-4xl font-bold mb-8 bg-primary py-4 px-4 -ml-4 -mr-9 text-center text-white">Companies </h1>
        </div>
    </header>
    <div class="container mx-auto px-4 py-8">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <!-- Company 1 -->
            <div class="bg-white rounded-lg shadow-md p-6 company-card">
                <h2 class="text-xl font-bold mb-4">Company 1</h2>
                <p class="text-gray-700">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla cursus sagittis consectetur. Sed scelerisque iaculis nisi, ac tempus elit facilisis et.</p>
                <p class="text-gray-700 mt-4">Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
            </div>

            <!-- Company 2 -->
            <div class="bg-white rounded-lg shadow-md p-6 company-card">
                <h2 class="text-xl font-bold mb-4">Company 2</h2>
                <p class="text-gray-700">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla cursus sagittis consectetur. Sed scelerisque iaculis nisi, ac tempus elit facilisis et.</p>
                <p class="text-gray-700 mt-4">Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
            </div>

            <!-- Add more company cards here -->

        </div>
    </div>
@endsection
