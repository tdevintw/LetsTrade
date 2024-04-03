@extends('layouts.layout')
@section('content')
    <div class="flex justify-center min-h-screen">
        <div class="container sm:mt-40 mt-24 my-auto max-w-md border-2 border-gray-200 p-3 bg-white">
            <!-- header -->
            <div class="text-center m-6">
                <h1 class="text-3xl font-semibold text-gray-700">Reset Password</h1>
            </div>


            <div class="m-6">
                <form class="mb-4" method="POST" action="{{ route('password.update') }}">
                    @csrf
                    <div class="mb-6">
                        <label for="email" class="block mb-2 text-sm text-gray-600 dark:text-gray-400">Email
                            Address</label>
                        <input value="{{ $email }}" type="email" name="email" id="email"
                            placeholder="Your email address"
                            class="w-full px-3 py-2 placeholder-gray-300 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-indigo-100 focus:border-indigo-300 dark:bg-gray-700 dark:text-white dark:placeholder-gray-500 dark:border-gray-600 dark:focus:ring-gray-900 dark:focus:border-gray-500" />
                    </div>
                    @error('email')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                    <div class="mb-6">
                        <label for="password" class="block mb-2 text-sm text-gray-600 dark:text-gray-400">New
                            Password</label>
                        <input type="password" name="password" id="password" placeholder="New Password"
                            class="w-full px-3 py-2 placeholder-gray-300 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-indigo-100 focus:border-indigo-300 dark:bg-gray-700 dark:text-white dark:placeholder-gray-500 dark:border-gray-600 dark:focus:ring-gray-900 dark:focus:border-gray-500" />
                    </div>
                    @error('password')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                    <div class="mb-6">
                        <label for="password_confirmation"
                            class="block mb-2 text-sm text-gray-600 dark:text-gray-400">password_confirmation</label>
                        <input type="password" name="password_confirmation" id="password_confirmation"
                            placeholder="Confirm Password"
                            class="w-full px-3 py-2 placeholder-gray-300 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-indigo-100 focus:border-indigo-300 dark:bg-gray-700 dark:text-white dark:placeholder-gray-500 dark:border-gray-600 dark:focus:ring-gray-900 dark:focus:border-gray-500" />
                    </div>
                    @error('password_confirmation')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                    <div class="mb-6">
                        <button type="submit"
                            class="w-full px-3 py-4 text-white bg-indigo-500 rounded-md hover:bg-indigo-600 focus:outline-none duration-100 ease-in-out">Send
                            reset</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    @endsection