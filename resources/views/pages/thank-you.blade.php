@extends('layouts.app')

@section('title', 'Thank You')

@section('content')
    <!-- Thank You Section -->
    <section class="thank-you-section flex items-center justify-center">
        <div class="container mx-auto px-6 text-center">
            <div class="max-w-lg mx-auto">
                <div class="mb-8">
                    <img src="{{ asset('images/img24.png') }}" alt="Thank You Illustration" class="w-96 mx-auto">
                </div>
                <h1 class="text-4xl font-bold text-[#1E3A8A] mb-4">
                    Thank You for Your Interest
                </h1>
                <p class="text-gray-600 text-lg mb-8">
                    Our team will contact you within 5 working days
                </p>
                <a href="{{ route('home') }}" 
                   class="bg-green-500 hover:bg-green-600 text-white px-8 py-3 rounded-lg font-medium text-lg transition duration-300 inline-block">
                    BACK TO HOMEPAGE
                </a>
            </div>
        </div>
    </section>
@endsection