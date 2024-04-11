@extends('layouts.layout')
@section('content')




<div class="flex items-center justify-center mt-24">
    <!-- Modal toggle -->
    <div class="flex justify-center m-5">
        <button id="updateProductButton" data-modal-target="updateProductModal" data-modal-toggle="updateProductModal"
            style="background-color:#ff7f50"
            class="block text-white  focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800"
            type="button">
            Filter By
        </button>
    </div>

    <!-- Main modal -->
    <div id="updateProductModal" tabindex="-1" aria-hidden="true"
        class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-modal md:h-full">
        <div class="relative p-4 w-full max-w-2xl h-full md:h-auto">
            <!-- Modal content -->
            <div class="relative p-4 bg-white rounded-lg shadow dark:bg-gray-800 sm:p-5">
                <!-- Modal header -->
                <div
                    class="flex justify-between items-center pb-4 mb-4 rounded-t border-b sm:mb-5 dark:border-gray-600">
                    <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                        Filter Posts
                    </h3>
                    <button type="button"
                        class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white"
                        data-modal-toggle="updateProductModal">
                        <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                clip-rule="evenodd"></path>
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                </div>
                <!-- Modal body -->  
                <form action="{{route('discover.filter')}}" method="GET">                
                    <div class="grid gap-4 mb-4 sm:grid-cols-2">
                       
                        <div>
                            <label for="name"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Country</label>
                            <select  name="country_id" id="country_id"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                placeholder="Ex. Apple iMac 27">
                                <option value="" selected>All</option>

                                @foreach ($countries as $country)
                                    <option value="{{ $country->id }}">{{ $country->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div>
                            <label for="brand"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">City</label>
                            <select  name="city_id" id="city_id"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                                <option value="">Select Country</option>
                            </select>
                        </div>
                        <div>
                            <label for="brand"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Category</label>
                            <select  name="category_id" id="category_id"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                                <option value="" selected>All</option>
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div>
                            <label for="brand"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">SubCategory</label>
                            <select  name="subcategory_id" id="subcategory_id"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                                <option value="">Select Category</option>
                            </select>
                        </div>
                        <div>
                            <label for="brand"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Condition</label>
                            <select  name="condition" id="condition"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                                <option value="" selected>All</option>
                                <option value="New">New</option>
                                <option value="Like New">Like New</option>
                                <option value="Good">Good</option>
                                <option value="Fair">Fair</option>
                            </select>
                        </div>
                        <div class="flex justify-center items-center h-full sm:mt-4">
                            <button  type="submit" class="w-full text-white bg-orange-500 hover:bg-orange-600 focus:ring-4 focus:ring-orange-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-orange-600 dark:hover:bg-orange-700 dark:focus:ring-orange-800 focus:outline-none">Filter</button>
                        </div>
                    
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="w-72">


        <form class="max-w-md mx-auto" action="{{route('discover.search')}}">
            <label for="default-search"
                class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
            <div class="relative">
                <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                    <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                    </svg>
                </div>
                <input type="search" id="title" name="title"
                    class="block w-full p-4 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="Search Title,..." required />
                <button type="submit" style="background-color:#ff7f50"
                    class="text-white absolute end-2.5 bottom-2.5 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Search</button>
            </div>
        </form>
    </div>

</div>

    @if ($posts)
        <div class="p-10 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5 gap-5">
            @foreach ($posts as $post)
                <div class="flex justify-center">


                    <div class="max-w-xs rounded overflow-hidden shadow-lg w-full">
                        <a href="{{ route('post.show', $post->id) }}">
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
    @if ($posts->count() === 0)
        <div class="flex flex-col items-center mb-8">
            <h1 class="mb-4 text-xs sm:text-sm md:text-md lg:text-xl ">Currently, no items are available for trade. Stay
                tuned for future opportunities!</h1>
            <img class="w-1/2 lg:w-96" src="https://i.ibb.co/mtD6mMf/behold-an-empty-treasure-box-lies-before-you-its.jpg"
                alt="not found">
        </div>
    @endif

    <script>
        document.addEventListener("DOMContentLoaded", function(event) {
            document.getElementById('updateProductButton').click();
        });
    </script>
    <script>
        $(document).ready(function() {
            $('#country_id').change(function() {
                var countryId = $(this).val();


                $.ajax({
                    url: '/getCities/' + countryId,
                    type: 'GET',
                    success: function(response) {
                        var citySelect = $('#city_id');
                        citySelect.empty();
                        $.each(response, function(id, name) {
                            citySelect.append($('<option></option>').attr('value', id)
                                .text(name));
                        });
                    }
                });
            });
        });

        $(document).ready(function() {
            $('#category_id').change(function() {

                var categoryId = $(this).val();

                // AJAX request
                $.ajax({
                    url: '/getSubcategories/' + categoryId,
                    type: 'GET',
                    success: function(response) {
                        var subcategorySelect = $('#subcategory_id');
                        subcategorySelect.empty();
                        $.each(response, function(id, name) {
                            subcategorySelect.append($('<option></option>').attr(
                                'value', id).text(name));
                        });
                    }
                });
            });
        });
    </script>
@endsection
