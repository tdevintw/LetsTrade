@extends('layout')
@section('content')
<div class="max-w-md mx-auto shadow-lg p-4 mt-24 ">
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div class="mb-4">
            <label for="name" class="block text-gray-700">{{ __('Name') }}</label>
            <input id="name" type="text" name="name" value="{{ old('name') }}" required autofocus autocomplete="name" class="block w-full mt-1 px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-indigo-200">
            @error('name')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        <!-- Email Address -->
        <div class="mb-4">
            <label for="email" class="block text-gray-700">{{ __('Email') }}</label>
            <input id="email" type="email" name="email" value="{{ old('email') }}" required autocomplete="username" class="block w-full mt-1 px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-indigo-200">
            @error('email')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        <!-- Password -->
        <div class="mb-4">
            <label for="password" class="block text-gray-700">{{ __('Password') }}</label>
            <input id="password" type="password" name="password" required autocomplete="new-password" class="block w-full mt-1 px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-indigo-200">
            @error('password')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        <!-- Confirm Password -->
        <div class="mb-4">
            <label for="password_confirmation" class="block text-gray-700">{{ __('Confirm Password') }}</label>
            <input id="password_confirmation" type="password" name="password_confirmation" required autocomplete="new-password" class="block w-full mt-1 px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-indigo-200">
            @error('password_confirmation')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>
        <div class="flex items-center justify-between">
            <a href="{{ route('login') }}" class="text-sm text-gray-600 hover:text-gray-900">Already registered?</a>
            <button type="submit" class="py-2 px-4 border border-transparent text-sm font-medium rounded-md text-white bg-slate-700 hover:bg-slate-900 focus:outline-none focus:ring-2 focus:ring-offset-1 focus:ring-slate-500">
                {{ __('Register') }}
            </button>
        </div>
    </form>
</div>
@endsection