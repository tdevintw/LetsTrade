@extends('layout')

@section('content')
<div class="flex justify-center">


<div class="max-w-md mx-auto md:mx-8 shadow-lg p-4 mt-24">
    <div class="mb-4 text-sm text-gray-600 dark:text-gray-300">
        {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
    </div>


    <form method="POST" action="{{ route('password.email') }}">
        @csrf

        <!-- Email Address -->
        <div class="mb-4">
            <label for="email" class="block text-gray-700 dark:text-gray-300">{{ __('Email') }}</label>
            <input id="email" type="email" name="email" value="{{ old('email') }}" required autofocus class="block w-full mt-1 px-3 py-2 border border-gray-300 dark:border-gray-600 rounded-md focus:outline-none focus:ring focus:ring-indigo-200 dark:bg-gray-800 dark:text-gray-300">
            @error('email')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        <div class="flex items-center justify-end mt-4">
            <button type="submit" class="py-2 px-4 border border-transparent text-sm font-medium rounded-md text-white bg-slate-700 hover:bg-slate-800 focus:outline-none focus:ring-2 focus:ring-offset-1 focus:ring-slate-800 dark:bg-slate-800 dark:hover:bg-slate-900 dark:focus:ring-slate-500">
                {{ __('Email Password Reset Link') }}
            </button>
        </div>
    </form>
</div>
</div>
@endsection
