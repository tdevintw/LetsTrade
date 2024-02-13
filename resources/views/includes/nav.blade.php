<nav class="bg-white border-gray-200 dark:bg-gray-900">
    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
        <a href="{{ route('home') }}" class="flex items-center space-x-3 rtl:space-x-reverse">
            <img style="width:70px" src="{{ asset('storage/images/logo2.png') }}" alt="no">
            <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">LetsTrade</span>
        </a>
        <button data-collapse-toggle="navbar-default" type="button"
            class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
            aria-controls="navbar-default" aria-expanded="false">
            <span class="sr-only">Open main menu</span>
            <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                viewBox="0 0 17 14">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M1 1h15M1 7h15M1 13h15" />
            </svg>
        </button>
        <div class="hidden w-full md:block md:w-auto" id="navbar-default">
            <ul
                class="font-medium flex items-center gap-1 flex-col p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:flex-row md:space-x-8 rtl:space-x-reverse md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
                <li style="margin-left: 30px">
                    <a href="{{ route('home') }}"
                        class="block py-2 px-3 text-black  md:text-black md:p-0 dark:text-white md:dark:text-white"
                        aria-current="page">Home</a>
                </li>
                @guest
                    <li class="ml-7">
                        <a href="{{ route('auth.login') }}" aria-current="page"><button style="width:7rem;"
                                class=" bg-black hover:bg-gray-800 text-white font-bold py-2 px-4 rounded">
                                Login
                            </button>
                        </a>
                    </li>
                    <li class="ml-7 ">
                        <a href="{{ route('auth.register') }}" aria-current="page"><button style="width:7rem;"
                                class=" bg-black hover:bg-gray-800 text-white font-bold py-2 px-4 rounded">
                                Register
                            </button>
                        </a>
                    </li>
                @endguest
                @auth
                    <li class="ml-7 ">


                        <button id="dropdownDefaultButton" data-dropdown-toggle="dropdown"
                            class="bg-black hover:bg-gray-800 text-white font-bold py-2 px-4 rounded focus:ring-4 focus:outline-none  font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center "
                            type="button">{{auth()->user()->name}}<svg class="w-2.5 h-2.5 ms-3" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="m1 1 4 4 4-4" />
                            </svg>
                        </button>

                        <!-- Dropdown menu -->
                        <div id="dropdown"
                            class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
                            <ul class="flex flex-col items-center py-2 text-sm text-gray-700 dark:text-gray-200"
                                aria-labelledby="dropdownDefaultButton">
                                
                                <li>
                                    <form action="{{ route('auth.logout') }}" method="post">
                                        @csrf
                                        <button type="submit" style="width:7rem;"
                                            class="block py-2 px-3 text-black  md:text-black md:p-0 dark:text-white md:dark:text-white"">
                                            Logout
                                        </button>
                                    </form>
                                </li>                           
                            </ul>
                        </div>

                       


                    </li>
                @endauth
            </ul>
        </div>

    </div>
    </div>
</nav>
