@extends('layouts.app')

@section('content')
<!-- Hero Section -->
<section class="bg-gradient-to-r from-blue-500 to-blue-600 py-10 text-white -mt-4">
    <div class="container mx-auto text-center -mt-4">
        <h1 class="text-5xl font-bold mb-4">Hospital Management System</h1>
        <p class="text-xl">Providing Quality Healthcare Services</p>
    </div>
</section>

<!-- About Section -->
<section class="py-16">
    <div class="container mx-auto">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 items-center">
            <div>
                <img src="{{ asset('images/f2.jpg') }}" alt="Hospital Management" class="w-full h-auto rounded-lg shadow-lg">
            </div>
            <div class="text-center md:text-left">
                <p class="text-xl leading-relaxed">Welcome to the Hospital Management System. We are dedicated to providing efficient and reliable healthcare services for our patients.</p>
                <p class="text-lg mt-4">Our system offers seamless management of patient records, appointments, medical history, and more.</p>
                <a href="{{ route('register') }}" class="mt-6 inline-block px-6 py-3 bg-blue-600 text-white font-bold rounded-full hover:bg-blue-700 transition duration-300 shadow-lg">Get Started</a>

            </div>
        </div>
    </div>
</section>

<!-- Our Services Section -->
<section class="bg-gray-100 py-16">
    <div class="container mx-auto">
        <h2 class="text-4xl font-bold text-center mb-8">Our Services</h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8">
            <div class="bg-white p-6 rounded-lg shadow-lg hover:shadow-xl transition duration-300">
                <i class="fas fa-user-md text-4xl text-blue-600 mb-4"></i>
                <h3 class="text-xl font-bold mb-2">Medical Consultations</h3>
                <p>Expert medical consultations for patients and personalized treatment plans.</p>
            </div>
            <div class="bg-white p-6 rounded-lg shadow-lg hover:shadow-xl transition duration-300">
                <i class="fas fa-notes-medical text-4xl text-blue-600 mb-4"></i>
                <h3 class="text-xl font-bold mb-2">Patient Records</h3>
                <p>Efficient management of patient records and medical history.</p>
            </div>
            <div class="bg-white p-6 rounded-lg shadow-lg hover:shadow-xl transition duration-300">
                <a href="/appointment-schedule">
                <i class="fas fa-calendar-check text-4xl text-blue-600 mb-4"></i>
                <h3 class="text-xl font-bold mb-2">Appointments</h3>
                <p>Easy appointment scheduling and management for patients and healthcare providers.</p>
                </a>
            </div>
        </div>
    </div>
</section>
@endsection
