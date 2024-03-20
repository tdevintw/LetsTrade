@extends('layouts.layout')
@section('content')
    <div class="flex justify-center min-h-screen">
        <div class="container sm:mt-40 mt-24 my-auto max-w-md border-2 border-gray-200 p-3 bg-white">
            <!-- header -->
            <div class="text-center m-6">
                <h1 class="text-3xl font-semibold text-gray-700">Forgot your password?</h1>
                <p class="text-gray-500">Just enter your email address below and we'll send you a link to reset your
                    password!</p>
            </div>
            <!-- sign-in -->
            <div class="m-6">
                <form class="mb-4" method="POST" action="{{ route('password.email') }}">
                    @csrf
                    <div class="mb-6">
                        <label for="email" class="block mb-2 text-sm text-gray-600 dark:text-gray-400">Email
                            Address</label>
                        <input type="email" name="email" id="email" placeholder="Your email address"
                            class="w-full px-3 py-2 placeholder-gray-300 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-indigo-100 focus:border-indigo-300 dark:bg-gray-700 dark:text-white dark:placeholder-gray-500 dark:border-gray-600 dark:focus:ring-gray-900 dark:focus:border-gray-500" />
                    </div>
                    @error('email')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                    <div class="mb-6">
                        <button type="submit"
                            class="w-full px-3 py-4 text-white bg-indigo-500 rounded-md hover:bg-indigo-600 focus:outline-none duration-100 ease-in-out">Send
                            reset link</button>
                    </div>
                    <p class="text-sm text-center text-gray-400">
                        Don&#x27;t have an account yet?
                        <a href="{{ route('register') }}"
                            class="font-semibold text-indigo-500 focus:text-indigo-600 focus:outline-none focus:underline">Sign
                            up</a>.
                    </p>
                </form>
                <!-- seperator -->
                <div class="flex flex-row justify-center mb-8">
                    <span class="absolute bg-white px-4 text-gray-500">or sign-in with</span>
                    <div class="w-full bg-gray-200 mt-3 h-px"></div>
                </div>
                <!-- alternate sign-in -->
                <a href="{{ route('google.redirect') }}">
                    <div class="flex flex-row gap-2">

                        <button
                            class="bg-green-500 text-white w-full p-2 flex flex-row justify-center gap-2 items-center rounded-sm hover:bg-green-600 duration-100 ease-in-out">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                class="w-5" viewBox="0 0 48 48">
                                <defs>
                                    <path id="a"
                                        d="M44.5 20H24v8.5h11.8C34.7 33.9 30.1 37 24 37c-7.2 0-13-5.8-13-13s5.8-13 13-13c3.1 0 5.9 1.1 8.1 2.9l6.4-6.4C34.6 4.1 29.6 2 24 2 11.8 2 2 11.8 2 24s9.8 22 22 22c11 0 21-8 21-22 0-1.3-.2-2.7-.5-4z" />
                                </defs>
                                <clipPath id="b">
                                    <use xlink:href="#a" overflow="visible" />
                                </clipPath>
                                <path clip-path="url(#b)" fill="#FBBC05" d="M0 37V11l17 13z" />
                                <path clip-path="url(#b)" fill="#EA4335" d="M0 11l17 13 7-6.1L48 14V0H0z" />
                                <path clip-path="url(#b)" fill="#34A853" d="M0 37l30-23 7.9 1L48 0v48H0z" />
                                <path clip-path="url(#b)" fill="#4285F4" d="M48 48L17 24l-4-3 35-10z" />
                            </svg>
                            Google
                        </button>


                    </div>
                </a>
            </div>
        </div>
    </div>
    @endsection