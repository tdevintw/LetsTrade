<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <title>Treasure Trade</title>
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{ asset('assets/css/argon-dashboard-tailwind.css?v=1.0.1"') }}">
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide/dist/css/splide.min.css">
    <link rel="icon" type="image/x-icon" href="https://cdn-icons-png.flaticon.com/256/4148/4148650.png">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

</head>

<body style="background-color: #fff0e5">
    <nav class="fixed top-0 z-50 w-full bg-white border-b border-gray-200 dark:bg-gray-800 dark:border-gray-700">
        <div class="px-3 py-3 lg:px-5 lg:pl-3">
            <div class="flex items-center justify-between">
                <div class="flex items-center justify-start rtl:justify-end">
                    <button data-drawer-target="logo-sidebar" data-drawer-toggle="logo-sidebar"
                        aria-controls="logo-sidebar" type="button"
                        class="inline-flex items-center p-2 text-sm text-gray-500 rounded-lg sm:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600">
                        <span class="sr-only">Open sidebar</span>
                        <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path clip-rule="evenodd" fill-rule="evenodd"
                                d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z">
                            </path>
                        </svg>
                    </button>
                    <a href="{{ route('home') }}" class="flex ms-2 md:me-24">
                        <img id="Treasure-Trade-image" class="w-12" src="https://i.ibb.co/f4wFF1n/logo2.png "
                            alt="" />
                        <img class="w-30" src="{{ asset('storage/images/title.png') }}" alt="">
                    </a>
                </div>
                <div class="flex items-center">
                    <div class="flex items-center ms-3">
                        <div>
                            <button type="button"
                                class="flex text-sm bg-gray-800 rounded-full focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600"
                                aria-expanded="false" data-dropdown-toggle="dropdown-user">
                                <span class="sr-only">Open user menu</span>
                                @if ($auth)
                                    <img class="w-10 h-10 rounded-full" src="{{ asset('storage/' . $auth->image) }}"
                                        alt="user photo">
                                @else
                                    <img class="w-10 h-10 rounded-full"
                                        src="{{ asset('storage/images/users/default.png') }}" alt="user photo">
                                @endif

                            </button>
                        </div>
                        <div class="z-50 hidden my-4 text-base list-none bg-white divide-y divide-gray-100 rounded shadow dark:bg-gray-700 dark:divide-gray-600"
                            id="dropdown-user">
                            @if ($auth)
                                <div class="px-4 py-3" role="none">
                                    <p class="text-sm text-gray-900 dark:text-white" role="none">
                                        {{ $auth->name }}
                                    </p>
                                    <p class="text-sm font-medium text-gray-900 truncate dark:text-gray-300"
                                        role="none">
                                        {{ $auth->email }}
                                    </p>
                                </div>
                                <ul class="py-1" role="none">
                                    @if ($auth->role === 'admin')
                                        <li>
                                            <a href="{{ route('dashboard.index') }}"
                                                class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-600 dark:hover:text-white"
                                                role="menuitem">Dashboard</a>
                                        </li>
                                    @endif

                                    <li>
                                        <a href="{{ route('home') }}"
                                            class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-600 dark:hover:text-white"
                                            role="menuitem">Home</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('discover.index') }}"
                                            class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-600 dark:hover:text-white"
                                            role="menuitem">Discover</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('profile.visit', $auth->name) }}"
                                            class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-600 dark:hover:text-white"
                                            role="menuitem">Visit Profile</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('profile.index') }}"
                                            class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-600 dark:hover:text-white"
                                            role="menuitem">Profile</a>
                                    </li>
                                </ul>
                            @else
                                <div class="px-4 py-3" role="none">
                                    <p class="text-sm text-gray-900 dark:text-white" role="none">
                                        Login or Register Now !!
                                    </p>

                                </div>
                                <ul class="py-1" role="none">
                                    <li>
                                        <a href="{{ route('register') }}"
                                            class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-600 dark:hover:text-white"
                                            role="menuitem">Register</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('login') }}"
                                            class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-600 dark:hover:text-white"
                                            role="menuitem">Login</a>
                                    </li>
                                </ul>
                            @endif

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <aside id="logo-sidebar"
        class="fixed top-0 left-0 z-40 w-64 h-screen pt-20 transition-transform -translate-x-full bg-white border-r border-gray-200 sm:translate-x-0 dark:bg-gray-800 dark:border-gray-700"
        aria-label="Sidebar">
        <div class="h-full px-3 pb-4 overflow-y-auto bg-white dark:bg-gray-800">
            <ul class="space-y-2 font-medium">
                <li>
                    <a href="{{route('home')}}"
                        class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                        <img class="w-6" src="https://cdn-icons-png.flaticon.com/256/9073/9073032.png "
                            alt="">
                        <span class="flex-1 ms-3 whitespace-nowrap">Home</span>
                    </a>
                </li>
                @auth
                @if ($auth->role === 'admin')
                    <li>
                        <a href="{{ route('dashboard.index') }}"
                            class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                            <img class="w-6" src="https://cdn-icons-png.flaticon.com/256/1828/1828673.png"
                                alt="">
                            <span class="flex-1 ms-3 whitespace-nowrap">Dashboard</span>
                        </a>
                    </li>
                @endif
                @endauth
                <li>
                    <a href="{{ route('posts.create') }}"
                        class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                        <img class="w-6" src="https://cdn-icons-png.flaticon.com/256/10023/10023858.png"
                            alt="">
                        <span class="ms-3">Create Post</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('posts.index') }}"
                        class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                        <img class="w-6" src="https://cdn-icons-png.flaticon.com/256/11159/11159813.png"
                            alt="">
                        <span class="flex-1 ms-3 whitespace-nowrap">My Posts</span>
                    </a>
                </li>
                @guest
                    <li>
                        <a href="{{ route('register') }}"
                            class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                            <img class="w-6" src="https://cdn-icons-png.flaticon.com/256/10337/10337227.png"
                                alt="">
                            <span class="flex-1 ms-3 whitespace-nowrap">Register</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('login') }}"
                            class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                            <img class="w-6" src="https://cdn-icons-png.flaticon.com/256/3293/3293466.png"
                                alt="">
                            <span class="flex-1 ms-3 whitespace-nowrap">Login</span>
                        </a>
                    </li>
                @endguest
                @auth
                    <li>
                        <form action="{{ route('auth.logout') }}" method="POST">
                            @csrf
                            <button
                                type="submit"class="w-full flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                                <img class="w-6 ml-1" src="https://cdn-icons-png.flaticon.com/256/1828/1828490.png"
                                    alt="">
                                <span class="ml-3">Logout</span>
                            </button>

                        </form>
                    </li>
                @endauth
            </ul>
        </div>
    </aside>

    <div class=" sm:ml-64">
        <div class="h-screen flex flex-wrap items-center  justify-center" style="background-color: #fff0e5">
            <div
                class="container px-0 lg:w-4/6 xl:w-2/7 sm:w-full md:w-2/3    bg-white  shadow-lg    transform   duration-200 easy-in-out">
                <div class=" h-100 overflow-hidden" style="justify-content:flex-start">
                    <img class="w-full" src="{{ asset('storage/' . $user->bg_image) }}" alt="" />
                </div>
                <div class="flex justify-center px-5  -mt-12">
                    <img class="h-32 w-32 bg-white p-2 rounded-full   " src="{{ asset('storage/' . $user->image) }}"
                        alt="" />

                </div>
                <div class="mb-12">
                    <div class="text-center px-14">
                        <h2 class="text-gray-800 text-3xl font-bold">{{ $user->name }}</h2>
                        <p class="mt-2 text-gray-500 text-sm">{{ $user->about }}</p>
                    </div>
                    @if ($user->city && $user->adress)
                        <div class="">
                            <div class="flex items-center ml-6 mt-4">
                                <img class="w-5" src="https://cdn-icons-png.flaticon.com/256/819/819865.png"
                                    alt="">
                                <p class=" text-gray-500 text-sm">
                                    {{ $user->city->country->name }},{{ $user->city->name }},{{ $user->adress }}</p>
                            </div>

                        </div>
                    @else
                    <div class="">
                        <div class="flex items-center ml-6 mt-4">
                            <img class="w-5" src="https://cdn-icons-png.flaticon.com/256/819/819865.png"
                                alt="">
                            <p class=" text-gray-500 text-sm">
                                Earth{{ $user->adress }}</p>
                        </div>

                    </div>
                    @endif

                    <hr class="mt-6" />
                    <div class="flex  bg-gray-50 ">
                        <div class="text-center w-full p-4 hover:bg-gray-100 cursor-pointer">
                            <p><span class="font-semibold">{{ $count }} </span> Posts</p>
                        </div>
                    </div>
                </div>
                @foreach ($posts as $post)
                    <div class="flex justify-center mt-12">
                        <div class="max-w-xs rounded overflow-hidden shadow-lg w-full">
                            <a href="{{ route('post.show', $post->id) }}">
                                <div class="relative overflow-hidden cursor-pointer">

                                    <img title="More Information"
                                        class="w-full h-40 object-cover object-center transform scale-100 transition-transform duration-300 hover:scale-110"
                                        src="{{ asset('storage/' . $images[$post->id]) }}" alt="Event Image">
                                    <div
                                        class="absolute inset-0 p-8 flex flex-col items-center justify-center text-center bg-black bg-opacity-50 opacity-0 hover:opacity-100 transition-opacity duration-300">
                                        <strong
                                            class="tracking-widest text-sm title-font font-bold text-white mb-1">More
                                            Information</strong>
                                    </div>
                                </div>
                            </a>
                            <div class="px-4 pt-4 ">
                                <div class="font-bold text-md mb-2">{{ $post->title }}</div>
                            </div>

                            <div class="px-6  pb-4">

                                <div class="flex justify-between items-center mb-4">
                                    <div class="text-sm text-gray-600">
                                        {{ $post->description }}</div>
                                </div>
                                <div class="flex justify-between items-center mb-2">
                                    <div class="text-sm text-gray-600 flex items-center">
                                        <img class="w-4"
                                            src="https://cdn-icons-png.flaticon.com/256/2838/2838912.png"
                                            alt="">
                                        {{ $post->city->country->name }} ,{{ $post->city->name }}
                                    </div>
                                </div>

                                <a href="{{ route('post.show', $post->id) }}"
                                    class="mt-2 inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                    Visit Post
                                    <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                                    </svg>
                                </a>

                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

        </div>
    </div>

    </div>


</body>
