@extends('layout')
@section('content')
    <div class="absolute bg-y-50 w-full top-0 bg-[url('https://raw.githubusercontent.com/creativetimofficial/public-assets/master/argon-dashboard-pro/assets/img/profile-layout-header.jpg')]"
        style="height: 100px">
        <span class="absolute top-0 left-0 w-full h-full bg-blue-500 opacity-60"></span>
    </div>
    @include('profile.includes.aside')
    <div class="relative h-full max-h-screen transition-all duration-200 ease-in-out xl:ml-68">
        <nav class="absolute z-20 flex flex-wrap items-center justify-between w-full px-6 py-2 -mt-56 text-white transition-all ease-in shadow-none duration-250 lg:flex-nowrap lg:justify-start"
            navbar-profile navbar-scroll="true">
            <div class="flex items-center justify-between w-full px-6 py-1 mx-auto flex-wrap-inherit">
                <nav>

                    <h6 class="mb-2 ml-2 font-bold text-white capitalize dark:text-white">My Posts</h6>
                </nav>

                <div class="flex items-center mt-2 grow sm:mt-0 sm:mr-6 md:mr-0 lg:flex lg:basis-auto">
                    <div class="flex items-center md:ml-auto md:pr-4">
                        <div class="relative flex flex-wrap items-stretch w-full transition-all rounded-lg ease">
                            <span
                                class="text-sm ease leading-5.6 absolute z-50 -ml-px flex h-full items-center whitespace-nowrap rounded-lg rounded-tr-none rounded-br-none border border-r-0 border-transparent bg-transparent py-2 px-2.5 text-center font-normal text-slate-500 transition-all">
                                <i class="fas fa-search" aria-hidden="true"></i>
                            </span>
                            <input type="text"
                                class="pl-9 text-sm dark:bg-slate-850 dark:text-white focus:shadow-primary-outline ease w-1/100 leading-5.6 relative -ml-px block min-w-0 flex-auto rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 pr-3 text-gray-700 transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none focus:transition-shadow"
                                placeholder="Type here..." />
                        </div>
                    </div>
                    <ul class="flex flex-row justify-end pl-0 mb-0 list-none md-max:w-full">
                        <li class="flex items-center">
                            <form action="{{ route('auth.logout') }}" method="POST">
                                @csrf
                                <button type="submit"
                                    class="block px-0 py-2 font-semibold text-white transition-all ease-in-out text-sm">
                                    <i class="fa fa-user sm:mr-1" aria-hidden="true"></i>
                                    <span class="hidden sm:inline">Log out</span>
                                </button>
                            </form>
                        </li>
                        <li class="flex items-center pl-4 xl:hidden">
                            <a href="javascript:;" class="block p-0 text-white transition-all ease-in-out text-sm"
                                sidenav-trigger>
                                <div class="w-4.5 overflow-hidden">
                                    <i class="ease mb-0.75 relative block h-0.5 rounded-sm bg-white transition-all"></i>
                                    <i class="ease mb-0.75 relative block h-0.5 rounded-sm bg-white transition-all"></i>
                                    <i class="ease relative block h-0.5 rounded-sm bg-white transition-all"></i>
                                </div>
                            </a>
                        </li>
                        <li class="flex items-center px-4">
                            <a href="javascript:;" class="p-0 text-white transition-all ease-in-out text-sm">
                                <i fixed-plugin-button-nav class="cursor-pointer fa fa-cog" aria-hidden="true"></i>
                                <!-- fixed-plugin-button-nav  -->
                            </a>
                        </li>

                        <!-- notifications -->

                        <li class="relative flex items-center pr-2">
                            <p class="hidden dark:text-white dark:opacity-60 transform-dropdown-show"></p>
                            <a dropdown-trigger href="javascript:;"
                                class="block p-0 text-white transition-all text-sm ease-nav-brand" aria-expanded="false">
                                <i class="cursor-pointer fa fa-bell" aria-hidden="true"></i>
                            </a>

                            <ul dropdown-menu
                                class="text-sm transform-dropdown before:font-awesome before:leading-default before:duration-350 before:ease lg:shadow-3xl duration-250 min-w-44 before:sm:right-8 before:text-5.5 pointer-events-none absolute right-0 top-0 z-50 origin-top list-none rounded-lg border-0 border-solid border-transparent bg-white bg-clip-padding px-2 py-4 text-left text-slate-500 opacity-0 transition-all before:absolute before:right-2 before:left-auto before:top-0 before:z-50 before:inline-block before:font-normal before:text-white before:antialiased before:transition-all before:content-['\f0d8'] sm:-mr-6 lg:absolute lg:right-0 lg:left-auto lg:mt-2 lg:block lg:cursor-pointer">
                                <!-- add show class on dropdown open js -->
                                <li class="relative mb-2">
                                    <a class="ease py-1.2 clear-both block w-full whitespace-nowrap rounded-lg bg-transparent px-4 duration-300 lg:transition-colors"
                                        href="javascript:;">
                                        <div class="flex py-1">
                                            <div class="my-auto">
                                                <img src="../assets/img/team-2.jpg"
                                                    class="inline-flex items-center justify-center mr-4 text-white text-sm h-9 w-9 max-w-none rounded-xl" />
                                            </div>
                                            <div class="flex flex-col justify-center">
                                                <h6 class="mb-1 font-normal leading-normal dark:text-white text-sm"><span
                                                        class="font-semibold">New message</span> from Laur</h6>
                                                <p
                                                    class="mb-0 leading-tight dark:text-white dark:opacity-60 text-xs text-slate-400">
                                                    <i class="mr-1 fa fa-clock" aria-hidden="true"></i>
                                                    13 minutes ago
                                                </p>
                                            </div>
                                        </div>
                                    </a>
                                </li>

                                <li class="relative mb-2">
                                    <a class="ease py-1.2 clear-both block w-full whitespace-nowrap rounded-lg px-4 duration-300 lg:transition-colors"
                                        href="javascript:;">
                                        <div class="flex py-1">
                                            <div class="my-auto">
                                                <img src="../assets/img/small-logos/logo-spotify.svg"
                                                    class="inline-flex items-center justify-center mr-4 text-white text-sm bg-gradient-to-tl from-zinc-800 to-zinc-700 dark:bg-gradient-to-tl dark:from-slate-750 dark:to-gray-850 h-9 w-9 max-w-none rounded-xl" />
                                            </div>
                                            <div class="flex flex-col justify-center">
                                                <h6 class="mb-1 font-normal leading-normal dark:text-white text-sm"><span
                                                        class="font-semibold">New album</span> by Travis Scott</h6>
                                                <p
                                                    class="mb-0 leading-tight dark:text-white dark:opacity-60 text-xs text-slate-400">
                                                    <i class="mr-1 fa fa-clock" aria-hidden="true"></i>
                                                    1 day
                                                </p>
                                            </div>
                                        </div>
                                    </a>
                                </li>

                                <li class="relative">
                                    <a class="ease py-1.2 clear-both block w-full whitespace-nowrap rounded-lg px-4 duration-300 lg:transition-colors"
                                        href="javascript:;">
                                        <div class="flex py-1">
                                            <div
                                                class="inline-flex items-center justify-center my-auto mr-4 text-white transition-all duration-200 ease-in-out text-sm bg-gradient-to-tl from-slate-600 to-slate-300 h-9 w-9 rounded-xl">
                                                <svg width="12px" height="12px" viewBox="0 0 43 36" version="1.1"
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    xmlns:xlink="http://www.w3.org/1999/xlink">
                                                    <title>credit-card</title>
                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <g transform="translate(-2169.000000, -745.000000)" fill="#FFFFFF"
                                                            fill-rule="nonzero">
                                                            <g transform="translate(1716.000000, 291.000000)">
                                                                <g transform="translate(453.000000, 454.000000)">
                                                                    <path class="color-background"
                                                                        d="M43,10.7482083 L43,3.58333333 C43,1.60354167 41.3964583,0 39.4166667,0 L3.58333333,0 C1.60354167,0 0,1.60354167 0,3.58333333 L0,10.7482083 L43,10.7482083 Z"
                                                                        opacity="0.593633743"></path>
                                                                    <path class="color-background"
                                                                        d="M0,16.125 L0,32.25 C0,34.2297917 1.60354167,35.8333333 3.58333333,35.8333333 L39.4166667,35.8333333 C41.3964583,35.8333333 43,34.2297917 43,32.25 L43,16.125 L0,16.125 Z M19.7083333,26.875 L7.16666667,26.875 L7.16666667,23.2916667 L19.7083333,23.2916667 L19.7083333,26.875 Z M35.8333333,26.875 L28.6666667,26.875 L28.6666667,23.2916667 L35.8333333,23.2916667 L35.8333333,26.875 Z">
                                                                    </path>
                                                                </g>
                                                            </g>
                                                        </g>
                                                    </g>
                                                </svg>
                                            </div>
                                            <div class="flex flex-col justify-center">
                                                <h6 class="mb-1 font-normal leading-normal dark:text-white text-sm">Payment
                                                    successfully completed</h6>
                                                <p
                                                    class="mb-0 leading-tight dark:text-white dark:opacity-60 text-xs text-slate-400">
                                                    <i class="mr-1 fa fa-clock" aria-hidden="true"></i>
                                                    2 days
                                                </p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <div class="relative w-full mx-auto mt-60 ">

            @if($count>0)

                <div class="container mx-auto">
                    <div class="flex flex-wrap justify-start" style="gap: 1rem">
                        @foreach ($posts as $post)
                            <a href="{{ route('posts.edit', $post->id) }}">
                                <div style="width:13rem" class=" rounded overflow-hidden shadow-lg">

                                    <div>
                                        <img title="edit"
                                            style="height:8rem;background-size: cover;background-position: center center;"
                                            class="w-full" src="{{ asset('storage/' . $images[$post->title]) }}"
                                            alt="Event Image">

                                    </div>

                                    <div class="px-6 py-4">
                                        <div class="font-bold text-md mb-2">{{ $post->title }}</div>
                                    </div>
                                </div>
                            </a>
                        @endforeach
                    </div>
                </div>
            @else
            <div class="flex flex-col items-center">
                <img src="https://cdn-icons-png.flaticon.com/256/7486/7486754.png" alt="">
                <h5>No posts added yet </h5>
                <a class="text-blue-500" href="{{route('posts.create')}}">Create post</a>
            </div>
            @endif

        </div>

    </div>
@endsection
