@extends('layouts.layout')
@section('content')
    <section class="mt-24 mb-24">
        <div>
            <div class="flex justify-center">
                <div class="w-1/3">
                    <section class="splide" aria-labelledby="carousel-heading">

                        <div class="splide" id="splide">
                            <div class="splide__track">
                                <ul class="splide__list">
                                    @foreach ($images as $image)
                                        <li class="splide__slide"><img style="height: 300px;width:500px;"
                                                src="{{ asset('storage/' . $image->image) }}" alt=""></li>
                                    @endforeach

                                </ul>
                            </div>
                        </div>
                    </section>
                    <p class="mt-4 text-sm ml-4">{{ $date }}</p>
                    <div class="ml-4 mt-4">
                        <h4>Trade By</h4>
                        <div class="mt-2 flex items-center">
                            <img class="rounded-full w-12" src="{{ asset('storage/' . $post->user->image) }}"
                                alt="">
                            <span class="ml-4">{{ $post->user->name }}</span>
                        </div>
                    </div>
                </div>

                <div class="w-1/3">
                    <div class="flex flex-col pl-12">

                        <span class="text-3xl">{{ $post->title }}</span>
                        @auth
                            @if ($user->id === $post->user->id)
                                <div class="flex items-center justify-between mt-4">

                                    <a href="{{ route('posts.edit', $post->id) }}"> <button style="background: #ff7f50"
                                            class=" w-36 text-white font-bold py-2 px-7 rounded-full text-sm">Edit
                                            Post</button></a>

                                    <form action="{{ route('posts.destroy', $post->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit"><img class="w-8"
                                                src="https://cdn-icons-png.flaticon.com/256/6861/6861362.png"
                                                alt=""></button>
                                    </form>
                                </div>
                         
                           @else
                            <button style="background: #ff7f50"
                                class="mt-4 w-36 text-white font-bold py-2 px-7 rounded-full text-sm">Start
                                Chat</button>
                            @endif
                        @endauth
                        @guest
                            <button style="background: #ff7f50"
                                class="mt-4 w-36 text-white font-bold py-2 px-7 rounded-full text-sm">Start
                                Chat</button>
                        @endguest

                        <h5 class="mt-4">Description</h5>
                        <p>{{ $post->description }}</p>
                        <div class="flex items-center">
                            <p class="mt-4"><span class="mr-4">Category:</span>
                                {{ $post->subcategory->category->name }}({{ $post->subcategory->name }})</p>
                        </div>
                        <div class="flex items-center">
                            <p class="mt-3"><span class="mr-4">Condition:</span>{{ $post->condition }}</p>
                        </div>
                        <div class="flex items-center">
                            <p class="mt-3"><span class="mr-4">Note:</span>{{ $post->note }}</p>
                        </div>
                        <div class="flex items-center">
                            <p class="mt-3"><span class="mr-4">Location:</span>{{ $post->city->country->name }}-{{ $post->city->name }}</p>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
