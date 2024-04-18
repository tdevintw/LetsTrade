@extends('layout')
@section('content')
    <div
        class="absolute bg-y-50 w-full top-0 bg-[url('https://raw.githubusercontent.com/creativetimofficial/public-assets/master/argon-dashboard-pro/assets/img/profile-layout-header.jpg')] min-h-75">
        <span class="absolute top-0 left-0 w-full h-full bg-blue-500 opacity-60"></span>
    </div>
    @include('profile.includes.aside')
    <div class="relative h-full max-h-screen transition-all duration-200 ease-in-out xl:ml-68">
        <nav class="absolute z-20 flex flex-wrap items-center justify-between w-full px-6 py-2 -mt-56 text-white transition-all ease-in shadow-none duration-250 lg:flex-nowrap lg:justify-start"
            navbar-profile navbar-scroll="true">
            <div class="flex items-center justify-between w-full px-6 py-1 mx-auto flex-wrap-inherit">
                <nav>

                    <h6 class="mb-2 ml-2 font-bold text-white capitalize dark:text-white">Profile</h6>
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

            <div
                class="relative flex flex-col flex-auto min-w-0 p-4 mx-6 overflow-hidden break-words bg-white border-0 dark:bg-slate-850 dark:shadow-dark-xl shadow-3xl rounded-2xl bg-clip-border">
                <div class="flex flex-wrap -mx-3">
                    <div class="flex-none w-auto max-w-full px-3">
                        <div
                            class="relative inline-flex items-center justify-center text-white transition-all duration-200 ease-in-out text-base h-19 w-19 rounded-xl">
                            <img src="{{ asset('storage/' . $user->image) }}" alt="profile_image"
                                class="w-full h-full shadow-2xl rounded-xl" />
                        </div>
                    </div>
                    <div class="flex-none w-auto max-w-full px-3 my-auto">
                        <div class="h-full">
                            <h5 class="mb-1 dark:text-white">{{ $user->name }}</h5>
                            {{-- <p class="mb-0 font-semibold leading-normal dark:text-white dark:opacity-60 text-sm">Public
                                Relations</p> --}}
                        </div>
                    </div>
                    <div class="w-full max-w-full px-3 mx-auto mt-4 sm:my-auto sm:mr-0 md:w-1/2 md:flex-none lg:w-4/12">
                        <div class="relative right-0">
                            <ul class="relative flex flex-wrap p-1 list-none bg-gray-50 rounded-xl" nav-pills
                                role="tablist">
                                <li class="z-30 flex-auto text-center">
                                    <a class="z-30 flex items-center justify-center w-full px-0 py-1 mb-0 transition-all ease-in-out border-0 rounded-lg bg-inherit text-slate-700"
                                        nav-link active href="javascript:;" role="tab" aria-selected="true">

                                        <span class="ml-2">App</span>
                                    </a>
                                </li>
                                <li class="z-30 flex-auto text-center">
                                    <a class="z-30 flex items-center justify-center w-full px-0 py-1 mb-0 transition-all ease-in-out border-0 rounded-lg bg-inherit text-slate-700"
                                        nav-link href="javascript:;" role="tab" aria-selected="false">

                                        <span class="ml-2">Messages</span>
                                    </a>
                                </li>
                                <li class="z-30 flex-auto text-center">
                                    <a class="z-30 flex items-center justify-center w-full px-0 py-1 mb-0 transition-colors ease-in-out border-0 rounded-lg bg-inherit text-slate-700"
                                        nav-link href="javascript:;" role="tab" aria-selected="false">
   
                                        <span class="ml-2">Settings</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="w-full p-6 mx-auto">
            <div class="flex flex-wrap -mx-3">
                <div class="w-full max-w-full px-3 shrink-0 md:w-8/12 md:flex-0">
                    <form action="{{ route('profile.update', $user->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PATCH')
                        <div
                            class="relative flex flex-col min-w-0 break-words bg-white border-0 shadow-xl dark:bg-slate-850 dark:shadow-dark-xl rounded-2xl bg-clip-border">
                            <div class="border-black/12.5 rounded-t-2xl border-b-0 border-solid p-6 pb-0">
                                <div class="flex items-center">
                                    <p class="mb-0 dark:text-white/80">Edit Profile</p>
                                    <button type="submit"
                                        class="inline-block px-8 py-2 mb-4 ml-auto font-bold leading-normal text-center text-white align-middle transition-all ease-in bg-blue-500 border-0 rounded-lg shadow-md cursor-pointer text-xs tracking-tight-rem hover:shadow-xs hover:-translate-y-px active:opacity-85">Save</button>
                                </div>
                            </div>
                            <div class="flex-auto p-6">
                                <p class="leading-normal uppercase dark:text-white dark:opacity-60 text-sm">User
                                    Information</p>
                                <div class="flex flex-wrap -mx-3">
                                    <div class="w-full max-w-full px-3 shrink-0 md:w-6/12 md:flex-0">
                                        <div class="mb-4">
                                            <label for="name"
                                                class="inline-block mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80">Username</label>
                                            <input type="text" name="name" value="{{ $user->name }}"
                                                class="focus:shadow-primary-outline dark:bg-slate-850 dark:text-white text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none" />
                                        </div>
                                        @error('name')
                                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <div class="w-full max-w-full px-3 shrink-0 md:w-6/12 md:flex-0">
                                        <div class="mb-4">
                                            <label for="password"
                                                class="inline-block mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80">
                                                Password</label>
                                            <input type="text" name="password" placeholder="•••••••••••••••••"
                                                class="focus:shadow-primary-outline dark:bg-slate-850 dark:text-white text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none" />
                                        </div>
                                        @error('password')
                                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <div class="w-full max-w-full px-3 shrink-0 md:w-6/12 md:flex-0">
                                        <div class="mb-4">
                                            <label for="image"
                                                class="inline-block mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80">Profile
                                                Image</label>
                                            <input type="file" name="image"
                                                class="focus:shadow-primary-outline dark:bg-slate-850 dark:text-white text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none" />
                                        </div>
                                        @error('image')
                                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <div class="w-full max-w-full px-3 shrink-0 md:w-6/12 md:flex-0">
                                        <div class="mb-4">
                                            <label for="password"
                                                class="inline-block mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80">
                                                Background Image</label>
                                            <input type="file" name="bg_image"
                                                class="focus:shadow-primary-outline dark:bg-slate-850 dark:text-white text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none" />
                                        </div>
                                        @error('bg_image')
                                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                                <hr
                                    class="h-px mx-0 my-4 bg-transparent border-0 opacity-25 bg-gradient-to-r from-transparent via-black/40 to-transparent dark:bg-gradient-to-r dark:from-transparent dark:via-white dark:to-transparent " />

                                <p class="leading-normal uppercase dark:text-white dark:opacity-60 text-sm">Contact
                                    Information</p>
                                <div class="flex flex-wrap -mx-3">
                                    <div class="w-full max-w-full px-3 shrink-0 md:w-full md:flex-0">
                                        <div class="mb-4">
                                            <label for="address"
                                                class="inline-block mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80">Address</label>
                                            <input type="text" name="adress" value="{{ $user->adress }}"
                                                class="focus:shadow-primary-outline dark:bg-slate-850 dark:text-white text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none" />
                                        </div>
                                    </div>
                                    <div class="w-full max-w-full px-3 shrink-0 md:w-4/12 md:flex-0">
                                        <div class="mb-4">
                                            <label for="city"
                                                class="inline-block mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80">City</label>
                                            <select name="city_id" id="city_id"
                                                class="focus:shadow-primary-outline dark:bg-slate-850 dark:text-white text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none">
                                                @if ($user->city)
                                                <option value="{{ $user->city->id }}">{{ $user->city->name }}</option>
                                                @else
                                                <option></option>
                                                @endif
                                                
                                            </select>
                                        </div>
                                        @error('city_id')
                                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                                        @enderror
                                    </div>

                                    <div class="w-full max-w-full px-3 shrink-0 md:w-4/12 md:flex-0">
                                        <div class="mb-4">
                                            <label for="country"
                                                class="inline-block mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80">Country</label>
                                            <select name="country_id" id="country_id"
                                                class="focus:shadow-primary-outline dark:bg-slate-850 dark:text-white text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none">
                                                @if ($user->city)
                                                    <option value="{{ $user->city->country->id }}">
                                                    {{ $user->city->country->name }}</option>     
                                                @else    
                                                <option value="">Select Country</option>
                                                @endif
                         
                                                @foreach ($countries as $country)
                                                    <option value="{{ $country->id }}">{{ $country->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>

                                    <div class="w-full max-w-full px-3 shrink-0 md:w-4/12 md:flex-0">
                                        <div class="mb-4">
                                            <label for="postal_code"
                                                class="inline-block mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80">Postal
                                                code</label>
                                            <input type="number" name="postal_code" value="{{ $user->postal_code }}"
                                                class="focus:shadow-primary-outline dark:bg-slate-850 dark:text-white text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none" />
                                        </div>
                                        @error('postal_code')
                                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                                <hr
                                    class="h-px mx-0 my-4 bg-transparent border-0 opacity-25 bg-gradient-to-r from-transparent via-black/40 to-transparent dark:bg-gradient-to-r dark:from-transparent dark:via-white dark:to-transparent " />

                                <p class="leading-normal uppercase dark:text-white dark:opacity-60 text-sm">About me</p>
                                <div class="flex flex-wrap -mx-3">
                                    <div class="w-full max-w-full px-3 shrink-0 md:w-full md:flex-0">
                                        <div class="mb-4">
                                            <label for="about me"
                                                class="inline-block mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80">About
                                                me</label>
                                            <input type="text" name="about" value="{{ $user->about }}"
                                                class="focus:shadow-primary-outline dark:bg-slate-850 dark:text-white text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none" />
                                        </div>
                                    </div>
                                    @error('about')
                                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="w-full max-w-full px-3 mt-6 shrink-0 md:w-4/12 md:flex-0 md:mt-0">
                    <div
                        class="relative flex flex-col min-w-0 break-words bg-white border-0 shadow-xl dark:bg-slate-850 dark:shadow-dark-xl rounded-2xl bg-clip-border">
                        <img class="w-full rounded-t-2xl" src="{{ asset('storage/' . $user->bg_image) }}"
                            alt="profile cover image">
                        <div class="flex flex-wrap justify-center -mx-3">
                            <div class="w-4/12 max-w-full px-3 flex-0 ">
                                <div class="flex justify-center mb-6 -mt-6 lg:mb-0 lg:-mt-16">
                                    <a href="{{ route('profile.visit', $user->name) }}">
                                        <img style="width: 100px; border-radius: 50%;height:100px;"
                                            class="max-w-full border-2 border-white border-solid"
                                            src="{{ asset('storage/' . $user->image) }}" alt="profile image">
                                    </a>
                                </div>
                            </div>
                        </div>
                        {{-- <div class="border-black/12.5 rounded-t-2xl p-6 text-center pt-0 pb-6 lg:pt-2 lg:pb-4">
                            <div class="flex justify-between">
                                <button type="button"
                                    class="hidden px-8 py-2 font-bold leading-normal text-center text-white align-middle transition-all ease-in border-0 rounded-lg shadow-md cursor-pointer text-xs bg-cyan-500 lg:block tracking-tight-rem hover:shadow-xs hover:-translate-y-px active:opacity-85">Connect</button>
                                <button type="button"
                                    class="block px-8 py-2 font-bold leading-normal text-center text-white align-middle transition-all ease-in border-0 rounded-lg shadow-md cursor-pointer text-xs bg-cyan-500 lg:hidden tracking-tight-rem hover:shadow-xs hover:-translate-y-px active:opacity-85">
                                    <i class="ni ni-collection text-2.8"></i>
                                </button>
                                <button type="button"
                                    class="hidden px-8 py-2 font-bold leading-normal text-center text-white align-middle transition-all ease-in border-0 rounded-lg shadow-md cursor-pointer text-xs bg-slate-700 lg:block tracking-tight-rem hover:shadow-xs hover:-translate-y-px active:opacity-85">Message</button>
                                <button type="button"
                                    class="block px-8 py-2 font-bold leading-normal text-center text-white align-middle transition-all ease-in border-0 rounded-lg shadow-md cursor-pointer text-xs bg-slate-700 lg:hidden tracking-tight-rem hover:shadow-xs hover:-translate-y-px active:opacity-85">
                                    <i class="ni ni-email-83 text-2.8"></i>
                                </button>
                            </div>
                        </div> --}}

                        <div class="flex-auto p-6 pt-0">
                            <div class="flex flex-wrap -mx-3">
                                <div class="w-full max-w-full px-3 flex-1-0">
                                    <div class="flex justify-center">
                                        <div class="grid text-center">
                                            <span class="font-bold dark:text-white text-lg">{{$count}}</span>
                                            <span class="leading-normal dark:text-white text-sm opacity-80">Posts</span>
                                        </div>
                                        {{-- <div class="grid mx-6 text-center">
                                            <span class="font-bold dark:text-white text-lg">10</span>
                                            <span class="leading-normal dark:text-white text-sm opacity-80">Photos</span>
                                        </div>
                                        <div class="grid text-center">
                                            <span class="font-bold dark:text-white text-lg">89</span>
                                            <span class="leading-normal dark:text-white text-sm opacity-80">Comments</span>
                                        </div> --}}
                                    </div>
                                </div>
                            </div>
                            <div class="mt-6 text-center">
                                <h5 class="dark:text-white ">
                                    {{$user->name}}
                                </h5>
                                @if ($user->city)
                                                                    <div
                                    class="mb-2 font-semibold leading-relaxed text-base dark:text-white/80 text-slate-700 mt-2">
                                   
                                    {{$user->city->name}},{{$user->city->country->name}}
                                </div>
                                @endif

                                <div class="dark:text-white/80 text-sm mt-4">
                                    {{$user->about}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <div fixed-plugin>
        <a fixed-plugin-button
            class="fixed px-4 py-2 bg-white shadow-lg cursor-pointer bottom-8 right-8 text-xl z-990 rounded-circle text-slate-700">
            <i class="py-2 pointer-events-none fa fa-cog"> </i>
        </a>
        <!-- -right-90 in loc de 0-->
        <div fixed-plugin-card
            class="z-sticky backdrop-blur-2xl backdrop-saturate-200 dark:bg-slate-850/80 shadow-3xl w-90 ease -right-90 fixed top-0 left-auto flex h-full min-w-0 flex-col break-words rounded-none border-0 bg-white/80 bg-clip-border px-2.5 duration-200">
            <div class="px-6 pt-4 pb-0 mb-0 border-b-0 rounded-t-2xl">
                <div class="float-left">
                    <h5 class="mt-4 mb-0 dark:text-white">Treasure Trade Configurator</h5>
                    <p class="dark:text-white dark:opacity-80">See our dashboard options.</p>
                </div>
                <div class="float-right mt-6">
                    <button fixed-plugin-close-button
                        class="inline-block p-0 mb-4 font-bold leading-normal text-center uppercase align-middle transition-all ease-in bg-transparent border-0 rounded-lg shadow-none cursor-pointer hover:-translate-y-px text-sm tracking-tight-rem bg-150 bg-x-25 active:opacity-85 dark:text-white text-slate-700">
                        <i class="fa fa-close"></i>
                    </button>
                </div>
                <!-- End Toggle Button -->
            </div>
            <hr
                class="h-px mx-0 my-1 bg-transparent bg-gradient-to-r from-transparent via-black/40 to-transparent dark:bg-gradient-to-r dark:from-transparent dark:via-white dark:to-transparent" />
            <div class="flex-auto p-6 pt-0 overflow-auto sm:pt-4">
                <!-- Sidebar Backgrounds -->
                <div>
                    <h6 class="mb-0 dark:text-white">Sidebar Colors</h6>
                </div>
                <a href="javascript:void(0)">
                    <div class="my-2 text-left" sidenav-colors>
                        <span
                            class="py-2.2 text-xs rounded-circle h-5.6 mr-1.25 w-5.6 ease-in-out bg-gradient-to-tl from-blue-500 to-violet-500 relative inline-block cursor-pointer whitespace-nowrap border border-solid border-slate-700 text-center align-baseline font-bold uppercase leading-none text-white transition-all duration-200 hover:border-slate-700"
                            active-color data-color="blue" onclick="sidebarColor(this)"></span>
                        <span
                            class="py-2.2 text-xs rounded-circle h-5.6 mr-1.25 w-5.6 ease-in-out bg-gradient-to-tl from-zinc-800 to-zinc-700 dark:bg-gradient-to-tl dark:from-slate-750 dark:to-gray-850 relative inline-block cursor-pointer whitespace-nowrap border border-solid border-white text-center align-baseline font-bold uppercase leading-none text-white transition-all duration-200 hover:border-slate-700"
                            data-color="gray" onclick="sidebarColor(this)"></span>
                        <span
                            class="py-2.2 text-xs rounded-circle h-5.6 mr-1.25 w-5.6 ease-in-out bg-gradient-to-tl from-blue-700 to-cyan-500 relative inline-block cursor-pointer whitespace-nowrap border border-solid border-white text-center align-baseline font-bold uppercase leading-none text-white transition-all duration-200 hover:border-slate-700"
                            data-color="cyan" onclick="sidebarColor(this)"></span>
                        <span
                            class="py-2.2 text-xs rounded-circle h-5.6 mr-1.25 w-5.6 ease-in-out bg-gradient-to-tl from-emerald-500 to-teal-400 relative inline-block cursor-pointer whitespace-nowrap border border-solid border-white text-center align-baseline font-bold uppercase leading-none text-white transition-all duration-200 hover:border-slate-700"
                            data-color="emerald" onclick="sidebarColor(this)"></span>
                        <span
                            class="py-2.2 text-xs rounded-circle h-5.6 mr-1.25 w-5.6 ease-in-out bg-gradient-to-tl from-orange-500 to-yellow-500 relative inline-block cursor-pointer whitespace-nowrap border border-solid border-white text-center align-baseline font-bold uppercase leading-none text-white transition-all duration-200 hover:border-slate-700"
                            data-color="orange" onclick="sidebarColor(this)"></span>
                        <span
                            class="py-2.2 text-xs rounded-circle h-5.6 mr-1.25 w-5.6 ease-in-out bg-gradient-to-tl from-red-600 to-orange-600 relative inline-block cursor-pointer whitespace-nowrap border border-solid border-white text-center align-baseline font-bold uppercase leading-none text-white transition-all duration-200 hover:border-slate-700"
                            data-color="red" onclick="sidebarColor(this)"></span>
                    </div>
                </a>
                <!-- Sidenav Type -->
                <div class="mt-4">
                    <h6 class="mb-0 dark:text-white">Sidenav Type</h6>
                    <p class="leading-normal dark:text-white dark:opacity-80 text-sm">Choose between 2 different sidenav
                        types.</p>
                </div>
                <div class="flex">
                    <button transparent-style-btn
                        class="inline-block w-full px-4 py-2.5 mb-2 font-bold leading-normal text-center text-white capitalize align-middle transition-all bg-blue-500 border border-transparent border-solid rounded-lg cursor-pointer text-sm xl-max:cursor-not-allowed xl-max:opacity-65 xl-max:pointer-events-none xl-max:bg-gradient-to-tl xl-max:from-blue-500 xl-max:to-violet-500 xl-max:text-white xl-max:border-0 hover:-translate-y-px dark:cursor-not-allowed dark:opacity-65 dark:pointer-events-none dark:bg-gradient-to-tl dark:from-blue-500 dark:to-violet-500 dark:text-white dark:border-0 hover:shadow-xs active:opacity-85 ease-in tracking-tight-rem shadow-md bg-150 bg-x-25 bg-gradient-to-tl from-blue-500 to-violet-500 hover:border-blue-500"
                        data-class="bg-transparent" active-style>White</button>
                    <button white-style-btn
                        class="inline-block w-full px-4 py-2.5 mb-2 ml-2 font-bold leading-normal text-center text-blue-500 capitalize align-middle transition-all bg-transparent border border-blue-500 border-solid rounded-lg cursor-pointer text-sm xl-max:cursor-not-allowed xl-max:opacity-65 xl-max:pointer-events-none xl-max:bg-gradient-to-tl xl-max:from-blue-500 xl-max:to-violet-500 xl-max:text-white xl-max:border-0 hover:-translate-y-px dark:cursor-not-allowed dark:opacity-65 dark:pointer-events-none dark:bg-gradient-to-tl dark:from-blue-500 dark:to-violet-500 dark:text-white dark:border-0 hover:shadow-xs active:opacity-85 ease-in tracking-tight-rem shadow-md bg-150 bg-x-25 bg-none hover:border-blue-500"
                        data-class="bg-white">Dark</button>
                </div>
                <p class="block mt-2 leading-normal dark:text-white dark:opacity-80 text-sm xl:hidden">You can change the
                    sidenav type just on desktop view.</p>

                <hr
                    class="h-px my-6 bg-transparent bg-gradient-to-r from-transparent via-black/40 to-transparent dark:bg-gradient-to-r dark:from-transparent dark:via-white dark:to-transparent " />
                <div class="flex mt-2 mb-12">
                    <h6 class="mb-0 dark:text-white">Light / Dark</h6>
                    <div class="block pl-0 ml-auto min-h-6">
                        <input dark-toggle
                            class="rounded-10 duration-250 ease-in-out after:rounded-circle after:shadow-2xl after:duration-250 checked:after:translate-x-5.3 h-5 relative float-left mt-1 ml-auto w-10 cursor-pointer appearance-none border border-solid border-gray-200 bg-slate-800/10 bg-none bg-contain bg-left bg-no-repeat align-top transition-all after:absolute after:top-px after:h-4 after:w-4 after:translate-x-px after:bg-white after:content-[''] checked:border-blue-500/95 checked:bg-blue-500/95 checked:bg-none checked:bg-right"
                            type="checkbox" />
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function() {
            $('#country_id').change(function() {
                var countryId = $(this).val();

                // AJAX request
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
    </script>
@endsection
