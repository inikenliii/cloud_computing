@extends('layouts.app')

@section('content')
<div class="w-full max-w-md">
    <div class="bg-white rounded-lg shadow-lg p-8 text-center">
        <div class="text-6xl mb-4">🎉</div>
        <h1 class="text-2xl font-bold text-gray-800 mb-2">Registration Confirmed!</h1>
        <p class="text-gray-600 mb-6">
            Your registration for Cloud Computing 2025 has been successfully confirmed.
        </p>
        <a 
            href="{{ route('registration.form') }}"
            class="inline-block bg-blue-600 hover:bg-blue-700 text-white font-semibold py-2 px-6 rounded-md transition duration-200"
        >
            Register Another Student
        </a>
    </div>
</div>
@endsection