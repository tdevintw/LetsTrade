@extends('layout')
@section('content')
    <div class="max-w-md mx-auto shadow-lg p-4 mt-24">
        <!-- Session Status -->
        <div class="mb-4 text-red-500">
            {{ session('status') }}
        </div>

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <!-- Email Address -->
            <div class="mb-4">
                <label for="email" class="block text-gray-700">{{ __('Email') }}</label>
                <input id="email" type="email" name="email" value="{{ old('email') }}" required autofocus
                    autocomplete="username"
                    class="block w-full mt-1 px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-indigo-200">
                @error('email')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Password -->
            <div class="mb-4">
                <label for="password" class="block text-gray-700">{{ __('Password') }}</label>
                <input id="password" type="password" name="password" required autocomplete="current-password"
                    class="block w-full mt-1 px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-indigo-200">
                @error('password')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Remember Me -->
            <div class="mb-4">
                <label for="remember_me" class="inline-flex items-center">
                    <input id="remember_me" type="checkbox" name="remember"
                        class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring focus:ring-indigo-200 focus:ring-offset-1">
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-between">

                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{route('password.request')}}">
                        {{ __('Forgot your password?') }}
                    </a>


                <button type="submit"
                    class="py-2 px-4 border border-transparent text-sm font-medium rounded-md text-white bg-slate-700 hover:bg-slate-900 focus:outline-none focus:ring-2 focus:ring-offset-1 focus:ring-slate-500">
                    {{ __('Log in') }}
                </button>
            </div>
        </form>

        <!-- Login with Google Button -->
        <div class="flex items-center justify-center mt-3">
            <a href=""
                class="px-4 py-2 border border-gray-300 rounded-lg flex items-center gap-2 text-gray-700 hover:text-gray-900 hover:bg-gray-100 transition duration-150">
                <img src="https://www.svgrepo.com/show/475656/google-color.svg" class="w-6 h-6" alt="Google Logo"
                    loading="lazy">
                <span>Login with Google</span>
            </a>
        </div>
    </div>
@endsection
