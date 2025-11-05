@extends('layouts.app')

@section('content')
<div class="w-full max-w-md">
    <div class="bg-white rounded-lg shadow-lg p-8 text-center">
        <div class="text-6xl mb-4">📧</div>
        <h1 class="text-2xl font-bold text-gray-800 mb-2">Check Your Email!</h1>
        
        @if(session('success'))
            <div class="bg-green-50 border border-green-200 text-green-700 px-4 py-3 rounded mb-4">
                {{ session('success') }}
            </div>
        @endif

        @if(session('warning'))
            <div class="bg-yellow-50 border border-yellow-200 text-yellow-700 px-4 py-3 rounded mb-4">
                {{ session('warning') }}
            </div>
        @endif

        <p class="text-gray-600 mb-6">
            We've sent a confirmation email to your student email address. 
            Please check your inbox and click the confirmation link to complete your registration.
        </p>

        <div class="bg-blue-50 border border-blue-200 rounded-lg p-4 mb-6">
            <p class="text-sm text-gray-700">
                <strong>📌 Note:</strong> Don't forget to check your spam/junk folder if you don't see the email in your inbox.
            </p>
        </div>

        <a 
            href="{{ route('registration.form') }}"
            class="inline-block bg-blue-600 hover:bg-blue-700 text-white font-semibold py-2 px-6 rounded-md transition duration-200"
        >
            Register Another Student
        </a>
    </div>
</div>
@endsection