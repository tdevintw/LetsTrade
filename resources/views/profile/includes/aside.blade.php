<aside
    class="fixed inset-y-0 flex-wrap items-center justify-between block w-full p-0 my-4 overflow-y-auto antialiased transition-transform duration-200 -translate-x-full bg-white border-0 shadow-xl dark:shadow-none dark:bg-slate-850 xl:ml-6 max-w-64 ease-nav-brand z-990 rounded-2xl xl:left-0 xl:translate-x-0"
    aria-expanded="false">
    <div class="h-19">
        <a class="block px-8 py-6 m-0 text-sm whitespace-nowrap text-slate-700"
            href="{{route('home')}}">
            <img src="{{ asset('storage/images/logo2.png') }}"
                class="inline h-full max-w-full transition-all duration-200 dark:hidden ease-nav-brand max-h-8"
                alt="main_logo" />
            <img src="{{ asset('storage/images/logo2-dark.png') }}"
                class="hidden h-full max-w-full transition-all duration-200 dark:inline ease-nav-brand max-h-8"
                alt="main_logo" />
            <span class="ml-1 font-semibold transition-all duration-200 dark:text-white ease-nav-brand">Lets
                Trade</span>
        </a>
    </div>

    <hr
        class="h-px mt-0 bg-transparent bg-gradient-to-r from-transparent via-black/40 to-transparent dark:bg-gradient-to-r dark:from-transparent dark:via-white dark:to-transparent" />

    <div class="items-center block w-auto max-h-screen overflow-auto h-sidenav grow basis-full">
        <ul class="flex flex-col pl-0 mb-0">

            <li class="mt-0.5 w-full">
                <a class="py-2.7 text-sm ease-nav-brand my-0 mx-2 flex items-center whitespace-nowrap px-4 transition-colors dark:text-white dark:opacity-80"
                    href="{{route('home')}}">
                    <div
                        class="mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-center stroke-0 text-center xl:p-2.5">
                        <img class="w-6" src="https://cdn-icons-png.flaticon.com/256/1946/1946436.png"
                            class="inline h-full max-w-full transition-all duration-200 dark:hidden ease-nav-brand max-h-8"
                            alt="main_logo" />
                    </div>
                    <span class="ml-1 duration-300 opacity-100 pointer-events-none ease">Home</span>
                </a>
            </li>

            <li class="mt-0.5 w-full">
                <a class="py-2.7 text-sm ease-nav-brand my-0 mx-2 flex items-center whitespace-nowrap px-4 transition-colors dark:text-white dark:opacity-80"
                    href="{{route('profile.index')}}">
                    <div
                        class="mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-center stroke-0 text-center xl:p-2.5">
                        <img class="w-6" src="https://cdn-icons-png.flaticon.com/256/1/1176.png"
                            class="inline h-full max-w-full transition-all duration-200 dark:hidden ease-nav-brand max-h-8"
                            alt="main_logo" />
                    </div>
                    <span class="ml-1 duration-300 opacity-100 pointer-events-none ease">MyInfo</span>
                </a>
            </li>

            <li class="mt-0.5 w-full">
                <a class="py-2.7 text-sm ease-nav-brand my-0 mx-2 flex items-center whitespace-nowrap px-4 transition-colors dark:text-white dark:opacity-80"
                    href="../pages/billing.html">
                    <div
                        class="mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-center stroke-0 text-center xl:p-2.5">
                        <img class="w-6" src="https://cdn-icons-png.flaticon.com/256/3161/3161837.png"
                            class="inline h-full max-w-full transition-all duration-200 dark:hidden ease-nav-brand max-h-8"
                            alt="main_logo" />
                    </div>
                    <span class="ml-1 duration-300 opacity-100 pointer-events-none ease">New Post</span>
                </a>
            </li>
            <li class="mt-0.5 w-full">
                <a class="py-2.7 text-sm ease-nav-brand my-0 mx-2 flex items-center whitespace-nowrap px-4 transition-colors dark:text-white dark:opacity-80"
                    href="../pages/billing.html">
                    <div
                        class="mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-center stroke-0 text-center xl:p-2.5">
                        <img class="w-6" src="https://cdn-icons-png.flaticon.com/256/5662/5662990.png"
                            class="inline h-full max-w-full transition-all duration-200 dark:hidden ease-nav-brand max-h-8"
                            alt="main_logo" />
                    </div>
                    <span class="ml-1 duration-300 opacity-100 pointer-events-none ease">My Posts</span>
                </a>
            </li>
            <li class="mt-0.5 w-full">
                <a class="py-2.7 text-sm ease-nav-brand my-0 mx-2 flex items-center whitespace-nowrap px-4 transition-colors dark:text-white dark:opacity-80"
                    href="../pages/virtual-reality.html">
                    <div
                        class="mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-center stroke-0 text-center xl:p-2.5">
                        <img class="w-6" src="https://cdn-icons-png.flaticon.com/256/10206/10206778.png"
                            class="inline h-full max-w-full transition-all duration-200 dark:hidden ease-nav-brand max-h-8"
                            alt="main_logo" />
                    </div>
                    <span class="ml-1 duration-300 opacity-100 pointer-events-none ease">Demmands</span>
                </a>
            </li>

            <li class="mt-0.5 w-full">
                <form action="{{ route('auth.logout') }}" method="POST">
                    @csrf
                    <button type="submit" class="py-2.7 text-sm ease-nav-brand my-0 mx-2 flex items-center whitespace-nowrap px-4 transition-colors dark:text-white dark:opacity-80">
                        
                            <div
                                class="mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-center stroke-0 text-center xl:p-2.5">
                                <img class="w-6" src="https://cdn-icons-png.flaticon.com/256/2529/2529508.png"
                                    class="inline h-full max-w-full transition-all duration-200 dark:hidden ease-nav-brand max-h-8"
                                    alt="main_logo" />
                            </div>
                            <span class="ml-1 duration-300 opacity-100 pointer-events-none ease">LogOut</span>

                        
                    </button>
                </form>
            </li>
</aside>
