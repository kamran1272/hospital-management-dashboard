@extends('layouts.app')

@section('content')
    <header class="bg-blue-600 text-white -mt-4">
        <div class="container mx-auto text-center">
            <h1 class="text-4xl font-bold mb-8 bg-primary py-4  px-4 -ml-4 -mr-9 text-center text-white">Request For Demo</h1>
        </div>
    </header>
    <div class="container mx-auto ">
        <div class="card mx-auto bg-white rounded-lg shadow-md">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-10">
            <form action="/demorequest" method="POST">
                @csrf
                <div class="mb-4">
                    <label for="name" class="block text-gray-700 font-bold mb-2">Name:</label>
                    <input type="text" name="name" id="name" class="w-full px-3 py-2 border border-gray-400 rounded-md focus:outline-none focus:border-blue-500" required>
                </div>
                <div class="mb-4">
                    <label for="email" class="block text-gray-700 font-bold mb-2">Email:</label>
                    <input type="email" name="email" id="email" class="w-full px-3 py-2 border border-gray-400 rounded-md focus:outline-none focus:border-blue-500" required>
                </div>
                <div class="mb-4">
                    <label for="company" class="block text-gray-700 font-bold mb-2">Company Name:</label>
                    <input type="text" name="company" id="company" class="w-full px-3 py-2 border border-gray-400 rounded-md focus:outline-none focus:border-blue-500" required>
                </div>
                <div class="mb-4">
                    <label for="message" class="block text-gray-700 font-bold mb-2">Message:</label>
                    <textarea name="message" id="message" rows="4" class="w-full px-3 py-2 border border-gray-400 rounded-md focus:outline-none focus:border-blue-500" ></textarea>
                </div>
                <div class="text-center">
                    <button type="submit" class="bg-blue-500 text-white px-6 py-2 rounded-md hover:bg-blue-600">Submit Request</button>
                </div>
                </div>
            </div>
            </div>
            </form>
        </div>
    </div>
@endsection
