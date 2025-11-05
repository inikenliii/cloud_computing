@extends('layouts.app')

@section('content')
<div class="w-full max-w-md">
    <div class="bg-white rounded-lg shadow-lg overflow-hidden">
        <!-- Header -->
        <div class="bg-blue-600 text-white p-6 text-center">
            <h1 class="text-2xl font-bold">Cloud Computing 2025</h1>
            <p class="text-blue-100 text-sm mt-1">Registration Form</p>
        </div>

        <!-- Form -->
        <div class="p-6">
            @if ($errors->any())
                <div class="bg-red-50 border border-red-200 text-red-700 px-4 py-3 rounded mb-4">
                    <ul class="list-disc list-inside text-sm">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('registration.submit') }}" method="POST">
                @csrf
                
                <!-- Full Name -->
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-semibold mb-2">
                        Full Name
                    </label>
                    <input 
                        type="text" 
                        name="full_name" 
                        value="{{ old('full_name') }}"
                        placeholder="Enter your full name"
                        class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
                        required
                    >
                </div>

                <!-- Student Email -->
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-semibold mb-2">
                        Student Email
                    </label>
                    <input 
                        type="email" 
                        name="student_email" 
                        value="{{ old('student_email') }}"
                        placeholder="Enter your student email"
                        class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
                        required
                    >
                </div>

                <!-- Password -->
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-semibold mb-2">
                        Password
                    </label>
                    <input 
                        type="password" 
                        name="password" 
                        placeholder="Create a secure password"
                        class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
                        required
                    >
                </div>

                <!-- Confirm Password -->
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-semibold mb-2">
                        Confirm Password
                    </label>
                    <input 
                        type="password" 
                        name="password_confirmation" 
                        placeholder="Confirm your password"
                        class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
                        required
                    >
                </div>

                <!-- Birthdate -->
                <div class="mb-6">
                    <label class="block text-gray-700 text-sm font-semibold mb-2">
                        Birthdate
                    </label>
                    <input 
                        type="date" 
                        name="birthdate" 
                        value="{{ old('birthdate') }}"
                        class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
                        required
                    >
                </div>

                <!-- Submit Button -->
                <button 
                    type="submit"
                    class="w-full bg-blue-600 hover:bg-blue-700 text-white font-semibold py-3 rounded-md transition duration-200"
                >
                    Register for Cloud Computing 2025
                </button>
            </form>
        </div>
    </div>
</div>
@endsection