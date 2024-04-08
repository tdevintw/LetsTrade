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

                    <h6 class="mb-2 ml-2 font-bold text-white capitalize dark:text-white">Edit POST</h6>
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

            <div id="create-container" class="container mx-auto p-6">
                <div style="display:flex;justify-content:flex-end;margin-top:1rem;margin-bottom:2rem;">

               
                <form action="{{ route('posts.destroy', $post->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit"
                        style="background-color: red; color:white;padding:0.5rem 0.8rem 0.5rem 0.8rem;border-radius:0.3rem">Delete
                        Post</button>

                </form>
            </div>
                <div class="flex mb-8" style="gap:5px">
                    @foreach ($post->images as $image)
                        <div class="flex flex-col items-center">


                            <img style="height: 7rem;" src="{{ asset('storage/' . $image->image) }}" alt="">
                            <form action="{{ route('deleteImage', $image->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit"><img class="w-8 mt-2"
                                        src="https://cdn-icons-png.flaticon.com/256/6861/6861362.png"
                                        alt=""></button>
                            </form>
                        </div>
                    @endforeach
                </div>
                <form action="{{ route('posts.update', $post->id) }}" method="post" enctype="multipart/form-data"
                    class="max-w-md md:max-w-full lg:max-w-3xl mx-auto">
                    @csrf
                    @method('PUT')
                    <div class="mb-4">
                        <label for="city"
                            class="inline-block mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80">Title</label>
                        <input type="text" id="title" name="title" value="{{ $post->title }}"
                            class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-blue-500">
                    </div>
                    @if ($errors->has('title'))
                        <p class="text-danger">{{ $errors->first('title') }}</p>
                    @endif
                    <div class="mb-4">
                        <label for="city"
                            class="inline-block mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80">Description</label>
                        <textarea id="description" name="description" rows="5"
                            class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-blue-500">{{ $post->description }}</textarea>
                    </div>
                    @if ($errors->has('description'))
                        <p class="text-danger">{{ $errors->first('description') }}</p>
                    @endif
                    <div class="mb-4 flex">

                        <div style="width: 15rem;margin-right:0.5rem;">
                            <div class="mb-4">
                                <label for="country"
                                    class="inline-block mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80">Country</label>
                                <select name="country_id" id="country_id"
                                    class="focus:shadow-primary-outline dark:bg-slate-850 dark:text-white text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none">

                                    <option value="{{ $post->city->country->id }}">{{ $post->city->country->name }}
                                    </option>

                                    @foreach ($countries as $country)
                                        <option value="{{ $country->id }}">{{ $country->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div style="width: 15rem;">
                            <div class="mb-4">
                                <label for="city"
                                    class="inline-block mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80">City</label>
                                <select name="city_id" id="city_id"
                                    class="focus:shadow-primary-outline dark:bg-slate-850 dark:text-white text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none">

                                    <option value="{{ $post->city->id }}">{{ $post->city->name }}</option>

                                </select>
                            </div>

                        </div>

                    </div>
                    @if ($errors->has('city_id'))
                        <p class="text-danger">{{ $errors->first('city_id') }}</p>
                    @endif
                    <div class="mb-4">
                        <label for="city"
                            class="inline-block mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80">Note</label>
                        <input type="text" id="note" name="note" value="{{ $post->note }}"
                            class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-blue-500">
                    </div>
                    @if ($errors->has('note'))
                        <p class="text-danger">{{ $errors->first('note') }}</p>
                    @endif



                    <div class="mb-4">
                        <label for="city"
                            class="inline-block mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80">Condition</label>
                        <select id="condition" name="condition"
                            class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-blue-500">
                            <option value="{{ $post->condition }}" selected="selected">{{ $post->condition }}
                            </option>
                            <option value="New">New</option>
                            <option value="Like New">Like New</option>
                            <option value="Good">Good</option>
                            <option value="Fair">Fair</option>
                        </select>
                    </div>
                    @if ($errors->has('condition'))
                        <p class="text-danger">{{ $errors->first('condition') }}</p>
                    @endif
                    <div class="flex flex-wrap -mx-3">
                        <div class="w-full max-w-full px-3 shrink-0 md:w-4/12 md:flex-0">
                            <div class="mb-4">
                                <label for="category"
                                    class="inline-block mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80">Category</label>
                                <select id="category_id" name="category_id"
                                    class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-blue-500">
                                    <option value="{{ $post->subcategory->category->id }}" selected="selected">
                                        {{ $post->subcategory->category->name }}</option>
                                    @foreach ($categories as $category)
                                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            @error('city_id')
                                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="w-full max-w-full px-3 shrink-0 md:w-4/12 md:flex-0">
                            <div class="mb-4">
                                <label for="subcategory"
                                    class="inline-block mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80">SubCategory</label>
                                <select id="subcategory_id" name="subcategory_id"
                                    class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-blue-500">
                                    <option value="{{ $post->subcategory->id }}" selected="selected">
                                        {{ $post->subcategory->name }}</option>
                                    @foreach ($subcategories as $subcategory)
                                        <option value="{{ $subcategory->id }}">{{ $subcategory->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="flex w-full ">
                        <div class="flex mb-4">
                            <label class="mr-12">Choose Images</label>
                            <input type="file" name="images[]" multiple>
                        </div>
                    </div>
                    @if ($errors->has('images'))
                        <p class="text-danger">{{ $errors->first('images') }}</p>
                    @endif


                    <div class="text-center">
                        <button type="submit"
                            class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600 transition-colors duration-300">Save</button>
                    </div>
                </form>

            </div>


        </div>

    </div>
    <script>
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
