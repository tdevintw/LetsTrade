@extends('layouts.layout')
@section('content')
    <section class="mt-24 mb-24">
        <div>
            <div class="flex justify-center flex-wrap">
                <div class="xs:w-full mx-4 lg:w-2/5 xl:w-1/3">
                    <section class="splide flex justify-center" aria-labelledby="carousel-heading">

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
                    <div class="hidden lg:block">
                        <p class="mt-4 text-sm ml-4"><b>{{ $date }}</b></p>
                        <div class="ml-4 mt-4">
                            <h4>Trade By</h4>
                            <a title="Visit Profile" href="{{ route('profile.visit', $post->user->name) }}">
                                <div class="mt-2 flex items-center">

                                    <img class="rounded-full w-12" src="{{ asset('storage/' . $post->user->image) }}"
                                        alt="">
                                    <span class="ml-4">{{ $post->user->name }}</span>

                                </div>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="w-full  mt-12 lg:w-2/5 xl:w-1/3">
                    <div class="xs: ml-0 sm:ml-12  flex flex-col pl-12 items-start">

                        <span class="text-3xl">{{ $post->title }}</span>

                            @if ($user && $user->id === $post->user->id)
                                <div class="flex items-center justify-between mt-4 ">

                                    <a href="{{ route('posts.edit', $post->id) }}"> <button style="background: #ff7f50"
                                            class=" w-36 text-white font-bold py-2 px-7 rounded-full text-sm mr-16">Edit
                                            Post</button></a>

                                    <form action="{{ route('posts.destroy', $post->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit"><img class="w-8 mr-4"
                                                src="https://cdn-icons-png.flaticon.com/256/6861/6861362.png"
                                                alt=""></button>
                                    </form>

                                    <form action="{{ route('posts.status', $post->id) }}" method="POST">
                                        @csrf
                                        @method('PUT')
                                        @if ($post->status === 'hidden')
                                            <button type="submit"><img class="w-8"
                                                    src="https://cdn-icons-png.flaticon.com/256/4298/4298895.png"
                                                    alt=""></button>
                                        @else
                                            <button type="submit"><img class="w-8"
                                                    src="https://cdn-icons-png.flaticon.com/256/2355/2355322.png"
                                                    alt=""></button>
                                        @endif

                                    </form>

                                </div>
                            @elseif($user && $user->access ==='banned')
                            <div class="flex items-center mt-4">

                           
                                <img class="w-6" src="https://cdn-icons-png.flaticon.com/256/564/564619.png" alt="">
                                <p style="color: #ef794e"
                                    class="ml-1 font-bold  text-sm">You are banned from chat</p>
                                </div>
                               
                            @else
                            <a href="{{route('user',$post->user->id)}}">
                                <button style="background: #ff7f50"
                                    class="mt-4 w-36 text-white font-bold py-2 px-7 rounded-full text-sm">Start
                                    Chat</button>
                                </a>
                            @endif
                        
    

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
                            <p class="mt-3"><span
                                    class="mr-4">Location:</span>{{ $post->city->country->name }}-{{ $post->city->name }}
                            </p>
                        </div>

                    </div>
                </div>
                <div class="ml-12 mt-16 w-full block lg:hidden">
                    <p class="mt-4 text-sm ml-4"><b>{{ $date }}</b></p>
                    <div class="ml-4 mt-4">
                        <h4>Trade By</h4>
                        <a title="Visit Profile" href="{{ route('profile.visit', $post->user->name) }}">
                        <div class="mt-2 flex items-center">
                            <img class="rounded-full w-12" src="{{ asset('storage/' . $post->user->image) }}"
                                alt="">
                            <span class="ml-4">{{ $post->user->name }}</span>
                        </div>
                    </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
