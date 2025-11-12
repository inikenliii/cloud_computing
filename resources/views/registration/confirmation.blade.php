@extends('layouts.app')

@section('content')
<div class="w-full max-w-2xl">
    <div class="bg-white rounded-lg shadow-lg p-8">
        <!-- Header -->
        <div class="text-center mb-6">
            <div class="flex justify-center mb-3">
                <span class="text-4xl">🎓</span>
            </div>
            <h1 class="text-2xl font-bold text-gray-800">Cloud Computing 2025</h1>
            <p class="text-gray-500 text-sm">Registration Confirmation</p>
        </div>

        <!-- Greeting -->
        <div class="mb-6">
            <p class="text-gray-700">Hello <strong>{{ $registration->full_name }}</strong>!</p>
            <p class="text-gray-600 mt-2">
                Congratulations! You have successfully registered for <strong>Cloud Computing 2025</strong>. 
                We are excited to have you join our program!
            </p>
        </div>

        <!-- Registration Details -->
        <div class="bg-gray-50 rounded-lg p-4 mb-6">
            <h2 class="font-semibold text-gray-700 mb-3 flex items-center">
                <span class="mr-2">📋</span> Registration Details
            </h2>
            <div class="space-y-2 text-sm">
                <div class="flex">
                    <span class="text-gray-600 w-32">Full Name:</span>
                    <span class="text-gray-800 font-medium">{{ $registration->full_name }}</span>
                </div>
                <div class="flex">
                    <span class="text-gray-600 w-32">Email:</span>
                    <span class="text-blue-600">{{ $registration->student_email }}</span>
                </div>
                <div class="flex">
                    <span class="text-gray-600 w-32">Birthdate:</span>
                    <span class="text-gray-800">{{ $registration->birthdate->format('F j, Y') }}</span>
                </div>
                <div class="flex">
                    <span class="text-gray-600 w-32">Course:</span>
                    <span class="text-gray-800 font-medium">Cloud Computing 2025</span>
                </div>
            </div>
        </div>

        <!-- Instruction -->
        <p class="text-gray-600 text-sm mb-6">
            To complete your registration and confirm your spot in the program, please click the button below:
        </p>

        <!-- Confirm Button -->
        <form action="{{ route('registration.confirm', $registration->id) }}" method="POST">
            @csrf
            <button 
                type="submit"
                class="w-full bg-green-600 hover:bg-green-700 text-white font-semibold py-3 rounded-md transition duration-200 flex items-center justify-center"
            >
                <span class="mr-2">✓</span> Confirm My Registration
            </button>
        </form>

        <!-- Warning -->
        <p class="text-amber-600 text-sm mt-4 text-center">
            <strong>Important:</strong> Please confirm your registration within 7 days to secure your spot in the program.
        </p>

        <!-- Footer -->
        <div class="text-center mt-6 pt-6 border-t border-gray-200">
            <p class="text-gray-500 text-sm">Thank you for choosing Cloud Computing 2025!</p>
            <p class="text-gray-400 text-xs mt-2">
                If you have any questions, please contact us at 
                <a href="mailto:support@cloudcomputing.com" class="text-blue-600 hover:underline">
                    support@cloudcomputing.com
                </a>
            </p>
        </div>
    </div>
</div>
@endsection