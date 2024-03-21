    <div class="flex justify-center">

 
            <nav
                class="w-3/4  top-0 left-0 right-0 z-30 flex flex-wrap items-center px-4 py-2 m-6 mb-0 shadow-md rounded-xl bg-white/80 backdrop-blur-2xl backdrop-saturate-200 lg:flex-nowrap lg:justify-start">
                <div class="flex items-center justify-between w-full p-0 px-6 mx-auto flex-wrap-inherit">
                    <a class="flex items-center"
                        href="{{route('home')}}"
                       >
                        <img class="w-12" src="https://i.ibb.co/f4wFF1n/logo2.png " alt="" />
                        <span
                            class="text-md mr-4 ml-4 whitespace-nowrap font-bold text-slate-700 lg:ml-0">LetsTrade</span>
                    </a>
                    <button navbar-trigger
                        class="px-3 py-1 ml-2 leading-none transition-all ease-in-out bg-transparent border border-transparent border-solid rounded-lg shadow-none cursor-pointer text-lg lg:hidden"
                        type="button" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
                        <img class="w-12" src="https://www.svgrepo.com/show/312300/hamburger-menu.svg" alt="">
                    </button>
                    <div navbar-menu
                        class="items-center flex-grow transition-all duration-500 lg-max:overflow-hidden ease lg-max:max-h-0 basis-full lg:flex lg:basis-auto">
                        <ul class="flex flex-col pl-0 mx-auto mb-0 list-none lg:flex-row xl:ml-auto">
                            <li>
                                <a class="flex items-center px-4 py-2 mr-2 font-normal transition-all ease-in-out lg-max:opacity-0 duration-250 text-sm text-slate-700 lg:px-2"
                                    aria-current="page" href="{{ route('home') }}">
                                    <i class="mr-1 fa fa-home opacity-60"></i>
                                    Home
                                </a>
                            </li>
                            @guest


                                <li>
                                    <a class="block px-4 py-2 mr-2 font-normal transition-all ease-in-out lg-max:opacity-0 duration-250 text-sm text-slate-700 lg:px-2"
                                        href="{{ route('register') }}">
                                        <i class="mr-1 fas fa-user-circle opacity-60"></i>
                                        Sign Up
                                    </a>
                                </li>
                                <li>
                                    <a class="block px-4 py-2 mr-2 font-normal transition-all ease-in-out lg-max:opacity-0 duration-250 text-sm text-slate-700 lg:px-2"
                                        href="{{ route('login') }}">
                                        <i class="mr-1 fas fa-key opacity-60"></i>
                                        Sign In
                                    </a>
                                </li>
                            @endguest
                        </ul>
                        @auth
                            <button id="dropdownUserAvatarButton" 
                             
                                >
                                <img class="w-12 rounded-full"
                                src="{{ asset('storage/' . $user->image) }}"
                                    alt="user photo" />
                            </button>

                            <!-- Dropdown menu -->
                            <div id="dropdownAvatar"
                                class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700 dark:divide-gray-600">
                                <div class="px-4 py-3 text-sm text-gray-900 dark:text-white">
                                    <div>{{ $user->name }}</div>
                                    <div class="font-medium truncate">{{ $user->email }}</div>
                                </div>
                                @if ($user->role == 'admin')
                                    <ul class="py-2 text-sm text-gray-700 dark:text-gray-200"
                                        aria-labelledby="dropdownUserAvatarButton">

                                        <li>
                                            <a href="{{ route('dashboard.index') }}"
                                                class="block px-4  hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Dashboard</a>
                                        </li>
                                    </ul>
                                @endif
                                <ul class="py-2 text-sm text-gray-700 dark:text-gray-200"
                                        aria-labelledby="dropdownUserAvatarButton">

                                        <li>
                                            <a href="{{route('profile.index')}}"
                                                class="block px-4  hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Profile</a>
                                        </li>
                                    </ul>
                                <div class="py-2">
                                    <form action="{{ route('auth.logout') }}" method="POST">
                                        @csrf
                                        <button type="submit"
                                            class="block px-4 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Sign
                                            out</button>
                                    </form>
                                </div>
                            </div>
                        @endauth
                    </div>
                </div>
            </nav>
               </div>
  