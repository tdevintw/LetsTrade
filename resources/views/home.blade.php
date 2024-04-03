@extends('layouts.layout')
@section('content')

    <section>
        <div class="grid max-w-screen-xl px-4 py-8 mx-auto lg:gap-8 xl:gap-0 lg:py-16 lg:grid-cols-12">
            <div class="mr-auto place-self-center lg:col-span-6">
                <h1 class="max-w-xl mb-4 text-2xl font-extrabold tracking-tight leading-none md:text-4xl xl:text-5xl dark:text-white">
                    Welcome to Treasure Trade: Where Stories Meet Commodities</h1>
                <p class="max-w-2xl mb-6 font-light text-gray-500 lg:mb-8 md:text-lg lg:text-xl dark:text-gray-400">Discover
                    the art of trading items and goods. Join us and embark on a journey where every exchange is a story waiting to
                    be told. Explore the possibilities with TradeVerse.</p>
            </div>
            
            <div class="hidden lg:mt-0 lg:col-span-6 lg:flex">
                <img src="{{ asset('storage/images/hero1.jpg') }}" alt="mockup">
            </div>
        </div>
    </section>


    <div class="flex justify-center">

        <div class="flex items-center justify-center gap-2 border-solid border-2 border-gray-300 rounded-lg w-fit p-4">
            <form class="max-w-lg mx-auto" id="searchForm"  method="GET">
                <div class="flex">
                    <label for="search-dropdown" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Your
                        Email</label>
                    <button id="dropdown-button" data-dropdown-toggle="dropdown"
                        class="flex-shrink-0 z-10 inline-flex items-center py-2.5 px-4 text-sm font-medium text-center text-gray-900 bg-gray-100 border border-gray-300 rounded-s-lg hover:bg-gray-200 focus:ring-4 focus:outline-none focus:ring-gray-100 dark:bg-gray-700 dark:hover:bg-gray-600 dark:focus:ring-gray-700 dark:text-white dark:border-gray-600"
                        type="button">All categories <svg class="w-2.5 h-2.5 ms-2.5" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 1 4 4 4-4" />
                        </svg></button>
                    <div class="relative w-full">
                        <input type="text" name="search" placeholder="Search by title,location..."
                            class="block p-2.5 w-full z-20 text-sm text-gray-900 bg-gray-50 rounded-e-lg border-s-gray-50 border-s-2 border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-s-gray-700  dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:border-blue-500"
                            required />
                        <button type="submit"
                            class="absolute top-0 end-0 p-2.5 text-sm font-medium h-full text-white bg-blue-700 rounded-e-lg border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                            <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 20 20">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                            </svg>
                            <span class="sr-only">Search</span>
                        </button>
                    </div>
                </div>
            </form>


        </div>

    </div>


    @if ($posts)
        <div class="p-10 grid grid-cols-1 sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-5">
            @foreach ($posts as $post)
                <div class="flex justify-center">


                    <div class="max-w-xs rounded overflow-hidden shadow-lg w-full">
                        <a href="{{route('post.show',$post->id)}}">
                            <div class="relative overflow-hidden cursor-pointer">

                                <img title="More Information"
                                    class="w-full h-40 object-cover object-center transform scale-100 transition-transform duration-300 hover:scale-110"
                                    src="{{ asset('storage/' . $images[$post->title]) }}" alt="Event Image">
                                <div
                                    class="absolute inset-0 p-8 flex flex-col items-center justify-center text-center bg-black bg-opacity-50 opacity-0 hover:opacity-100 transition-opacity duration-300">
                                    <strong class="tracking-widest text-sm title-font font-bold text-white mb-1">More
                                        Information</strong>
                                </div>
                            </div>
                        </a>
                        <div class="px-4 py-4">
                            <div class="font-bold text-md mb-2">{{ $post->title }}</div>
                        </div>
                        {{--                 
                <div class="px-6 pt-2 pb-4">

                    <div class="flex justify-between items-center mb-2">
                        <div class="text-sm text-gray-600"><span class="font-medium">Location:</span>
                            {{ $event->location }}</div>
                    </div>
                    <div class="flex justify-between items-center mb-2">
                        <div class="text-sm text-gray-600"><span class="font-medium">Left Tikcets:</span>
                            {{ $event->tickets }}</div>
                    </div>

                    @if ($user && $user->acces == 'banned' && $user->role != 'admin')
                        <p class="w-full  text-red-500 font-bold py-2 px-4 mt-4">You
                            Are Banned from reserving </p>
                    @elseif ($user && $user->role != 'admin' && $user->reserveRequests->where('event_id', $event->id)->isNotEmpty())
                        @php
                            $reserveRequest = $user->reserveRequests->where('event_id', $event->id)->first();
                            $status = $reserveRequest->status;
                        @endphp

                        @if ($status === 'accepted')
                            <button
                                class="w-full bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 mt-4 rounded-full">Reserved</button>
                            <div style="text-align: center;padding-top:5px">
                                <a style="font-size: 12px;text-decoration: underline;"
                                    href="{{ asset('storage/' . $reserveRequest->ticket->pdf) }}"
                                    class="btn btn-success" download>download your ticket</a>


                            </div>
                        @elseif($status === 'pending')
                            <button type="submit"
                                class="w-full bg-yellow-500 hover:bg-yellow-700 text-white font-bold py-2 px-4 mt-4 rounded-full">Waiting
                                Response...</button>
                        @elseif($status === 'rejected')
                            <button type="submit"
                                class="w-full bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 mt-4 rounded-full">Organizer
                                Reject Your Request</button>
                        @endif
                    @elseif($user && $user->role != 'admin')
                        <form action="{{ route('reserve.store') }}" method="post">
                            @csrf
                            @method('POST')
                            <input type="hidden" id="event_id" name="event_id" value="{{ $event->id }}">
                            <button type="submit"
                                class="w-full bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 mt-4 rounded-full">Reserve</button>
                        </form>
                    @elseif(!$user)
                        <form action="{{ route('reserve.store') }}" method="post">
                            @csrf
                            @method('POST')
                            <input type="hidden" id="event_id" name="event_id" value="{{ $event->id }}">
                            <button type="submit"
                                class="w-full bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 mt-4 rounded-full">Reserve</button>
                        </form>
                    @endif


                </div> --}}
                    </div>
                </div>
            @endforeach
        </div>
    @endif
    @if($posts->count()===0)
        <div class="flex flex-col items-center mt-4">
            <h1 class="mb-4 text-xs sm:text-sm md:text-md lg:text-xl ">Currently, no items are available for trade. Stay tuned for future opportunities!</h1>
            <img class="w-1/2 lg:w-96"
                src="https://i.ibb.co/mtD6mMf/behold-an-empty-treasure-box-lies-before-you-its.jpg"
                alt="not found">
        </div>
    @endif
    <div class="flex justify-center gap-2 mb-5">
        {{ $posts->links() }}
    </div>
@endsection
