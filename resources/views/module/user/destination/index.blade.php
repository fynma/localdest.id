<!DOCTYPE html>
<html lang="en">
@include('package.headerpack')
<title>Localdest - Destination</title>
<link rel="icon" type="image/png" href="/storage/vector/logo-localdest.jpg">
<style>
    /* .splide__slide img {
        width: 100%;
        height: auto;
    } */
    .splide__pagination {
        display: none
    }

    .splide__arrow {
        display: none
    }
</style>
<script>
    //    mode = 'light' // set 'light' untuk perubahan warna dasar navbar
</script>

<body>
    @include('package.penunjang.navbar')

    <section id="hero-section" class="relative" style="">
        <img src="/storage/bromo.png" alt="" class="w-screen h-screen object-cover">

        <div class="absolute inset-0 bg-black bg-opacity-40 p-4 pb-0 lg:pl-32   lg-bigger:pt-20 flex items-center">
            <div class="container mx-auto lg:flex items-center justify-between" style="margin-top: auto">
                <div class="text-white text-center text-4xl mb-20">
                    <h1 class="font-poppins font-bold leading-relaxed">
                        Explore the World's Best <br>
                        <span>Travel Destinations</span>
                    </h1>
                </div>
                <div class="hidden lg:block text-white w-1/2 mt-12 mb-20">
                    <p class="text-lg sm:mb-12 font-medium">
                        Lorem ipsum dolor sit amet consectetur. Elementum nunc adipiscing ac at. Lectus sed justo
                        imperdiet mauris urna ut accumsan. Faucibus arcu odio aliquam rutrum vel mollis.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <div class="container mx-auto p-4">
        <div class="explore-section mt-20">
            <div class="text-black lg:mr-20 text-4xl">
                <h1 class="font-poppins text-center lg:text-left font-bold leading-relaxed">
                    Discover the Newest Travel Destinations
                </h1>
            </div>
            <div class="text-center p-sec mt-8 lg:text-left">
                <p>
                    Stay updated with the latest travel spots across Indonesia. Explore fresh and exciting destinations
                    from the beautiful beaches of Bali to the vibrant culture of Yogyakarta.
                    <strong class="font-semibold"> Don't miss out on the newest adventures and experiences waiting for
                        you in Indonesia.</strong>
                </p>
            </div>
            <div id="fslider" class="mt-10">
                <div class="splide__track">
                    <div class="splide__list flex gap-x-0.5 md:gap-x-0 lg:gap-x-4">
                        {{-- <div class="splide__slide relative">
                            <div class="photo-container h-80 w-full relative cursor-pointer">
                                <div class="absolute inset-0 bg-black bg-opacity-50 rounded-xl"></div>
                                <img src="/storage/uploaded-thumbnail/jMrSqyr2FyOh1PK_1719982095.jpeg" alt="Photo 1" class="w-full h-full object-cover rounded-xl">
                                <div class="absolute bottom-0 left-0 right-0 text-white p-4">
                                    <p class="text-sm font-bold">Tes CKeditor</p>
                                    <p class="address">Kabupaten Nias | Sumatera Utara</p>
                                    <p class="rating">4.2 ⭐⭐⭐</p>
                                </div>
                            </div>
                        </div> --}}

                    </div>
                    <div class="flex justify-end items-center mt-2 gap-5">
                        <div class="panah flex gap-5">
                            <button class="splide-prev"><svg xmlns="http://www.w3.org/2000/svg" width="1.78em"
                                    height="1em" viewBox="0 0 16 9">
                                    <path fill="currentColor"
                                        d="M12.5 5h-9c-.28 0-.5-.22-.5-.5s.22-.5.5-.5h9c.28 0 .5.22.5.5s-.22.5-.5.5" />
                                    <path fill="currentColor"
                                        d="M6 8.5a.47.47 0 0 1-.35-.15l-3.5-3.5c-.2-.2-.2-.51 0-.71L5.65.65c.2-.2.51-.2.71 0s.2.51 0 .71L3.21 4.51l3.15 3.15c.2.2.2.51 0 .71c-.1.1-.23.15-.35.15Z" />
                                </svg></button>
                            <button class="splide-next"><svg xmlns="http://www.w3.org/2000/svg" width="1.78em"
                                    height="1em" viewBox="0 0 16 9">
                                    <path fill="currentColor"
                                        d="M12.5 5h-9c-.28 0-.5-.22-.5-.5s.22-.5.5-.5h9c.28 0 .5.22.5.5s-.22.5-.5.5" />
                                    <path fill="currentColor"
                                        d="M10 8.5a.47.47 0 0 1-.35-.15c-.2-.2-.2-.51 0-.71l3.15-3.15l-3.15-3.15c-.2-.2-.2-.51 0-.71s.51-.2.71 0l3.5 3.5c.2.2.2.51 0 .71l-3.5 3.5c-.1.1-.23.15-.35.15Z" />
                                </svg></button>
                        </div>
                        <div class="garis w-2/4">
                            <div class="h-1 bg-gray-300 relative">
                                <div class="progress-bar-fill h-full bg-blue-500"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="request-section mt-20">
            <div
                class="lg:flex items-center justify-between w-full h-50 lg:h-40 bg-gradient-to-r from-figma-grad-blue to-figma-grad-toblueend border border-gray-200 rounded-lg shadow dark:from-gray-800 dark:to-gray-700 p-4">
                <div class="text-center lg:text-left flex flex-col lg:ml-5 ">
                    <bold class="text-white font-bold mb-2 text-2xl">Want to add a new destination for us?</bold>
                    <p class="text-white text-lg font-thin">Let's add your destination ideas for us here</p>
                </div>
                <div class="button-only flex items-center justify-center mt-2 md:mt-5 lg:mt-0">
                    @auth
                        <button onclick="window.location='/request-destination'"
                            class="text-blue-600 bg-white px-4 py-2 rounded-full me-5">Request Destination</button>
                    @else
                        <button data-popover-target="login-alert-popover" type="disabled"
                            class="text-blue-600 bg-white px-4 py-2 rounded-full me-5">Request Destination</button>
                        <div data-popover id="login-alert-popover" role="tooltip"
                            class="absolute z-10 invisible inline-block w-64 text-sm text-gray-500 transition-opacity duration-300 bg-white border border-gray-200 rounded-lg shadow-sm opacity-0 dark:text-gray-400 dark:border-gray-600 dark:bg-gray-800">
                            <div
                                class="px-3 py-2 bg-gray-100 border-b border-gray-200 rounded-t-lg dark:border-gray-600 dark:bg-gray-700">
                                <h3 class="font-semibold text-gray-900 dark:text-white">Attention Required</h3>
                            </div>
                            <div class="px-3 py-2">
                                <p>Please register or log in to access this feature.</p>
                            </div>
                            <div data-popper-arrow></div>
                        </div>

                        @endif
                    </div>
                </div>
            </div>
            <div class="findbest-section mt-20" id="destination-show-section">
                <div class="text-black lg:mr-20 text-4xl">
                    <h1 class="text-center font-poppins font-bold leading-relaxed lg:text-left">
                        Discover Your Perfect Holiday Destination
                    </h1>
                </div>
                <div class="p-sec mt-8 text-center lg:text-left">
                    <p>
                        Explore the natural beauty and rich culture of Indonesia. From stunning beaches to majestic
                        mountains,
                        we'll help you find the perfect holiday spot.
                        <strong class="font-semibold">Let us guide you to your unforgettable adventure in
                            Indonesia.</strong>
                    </p>
                </div>
                <div class="md:flex md:gap-2 justify-between mt-10">
                    <h6
                        class="text-center text-xl font-bold text-gray-900 md:hidden lg:hidden lg:text-left dark:text-white">
                        Filter
                    </h6>
                    {{-- <div id="filter"
                        class="flex gap-10 justify-between md:block lg:block md:w-56 lg:w-56 lg:p-3 dark:bg-gray-700 lg:mt-5 md:border-r lg:border-r border-gray-200">
                        <h6 class="hidden mb-3 text-xl md:block lg:block font-bold text-gray-900 dark:text-white">
                            Filter
                        </h6>
                        <div class="category mt-10">
                            <p class="font-semibold text-lg mb-2">Category</p>
                            <ul class="space-y-2 text-lg gap-x-4">
                                <li class="flex items-center">
                                    <input id="apple" type="checkbox" value=""
                                        class="w-4 h-4 bg-gray-100 border-gray-300 rounded text-primary-600 focus:ring-primary-500 dark:focus:ring-primary-600 dark:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500" />

                                    <label for="apple" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-100">
                                        Mountain
                                    </label>
                                </li>

                                <li class="flex items-center">
                                    <input id="fitbit" type="checkbox" value=""
                                        class="w-4 h-4 bg-gray-100 border-gray-300 rounded text-primary-600 focus:ring-primary-500 dark:focus:ring-primary-600 dark:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500" />

                                    <label for="fitbit" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-100">
                                        Beach
                                    </label>
                                </li>

                                <li class="flex items-center">
                                    <input id="dell" type="checkbox" value=""
                                        class="w-4 h-4 bg-gray-100 border-gray-300 rounded text-primary-600 focus:ring-primary-500 dark:focus:ring-primary-600 dark:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500" />

                                    <label for="dell" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-100">
                                        Waterfall
                                    </label>
                                </li>

                                <li class="flex items-center">
                                    <input id="asus" type="checkbox" value="" checked
                                        class="w-4 h-4 bg-gray-100 border-gray-300 rounded text-primary-600 focus:ring-primary-500 dark:focus:ring-primary-600 dark:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500" />

                                    <label for="asus"
                                        class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-100">
                                        Other
                                    </label>
                                </li>
                            </ul>
                        </div>
                        <div class="province mt-10">
                            <p class="font-semibold text-lg mb-2">Province</p>
                            <ul class="space-y-2 text-lg gap-x-4">
                                <li class="flex items-center">
                                    <input id="apple" type="checkbox" value=""
                                        class="w-4 h-4 bg-gray-100 border-gray-300 rounded text-primary-600 focus:ring-primary-500 dark:focus:ring-primary-600 dark:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500" />

                                    <label for="apple"
                                        class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-100">
                                        Jawa Timur
                                    </label>
                                </li>

                                <li class="flex items-center">
                                    <input id="fitbit" type="checkbox" value=""
                                        class="w-4 h-4 bg-gray-100 border-gray-300 rounded text-primary-600 focus:ring-primary-500 dark:focus:ring-primary-600 dark:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500" />

                                    <label for="fitbit"
                                        class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-100">
                                        Jawa Tengah
                                    </label>
                                </li>

                                <li class="flex items-center">
                                    <input id="dell" type="checkbox" value=""
                                        class="w-4 h-4 bg-gray-100 border-gray-300 rounded text-primary-600 focus:ring-primary-500 dark:focus:ring-primary-600 dark:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500" />

                                    <label for="dell"
                                        class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-100">
                                        Jawa Barat
                                    </label>
                                </li>
                            </ul>
                        </div>
                        <div class="rating mt-10">
                            <p class="font-semibold text-lg mb-2">Rating</p>
                            <ul class="space-y-2 text-lg gap-x-4">
                                <li class="flex items-center">
                                    <input id="fitbit" type="checkbox" value=""
                                        class="w-4 h-4 bg-gray-100 border-gray-300 rounded text-primary-600 focus:ring-primary-500 dark:focus:ring-primary-600 dark:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500" />

                                    <label for="apple"
                                        class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-100">
                                        ⭐⭐⭐⭐ (56)
                                    </label>
                                </li>

                                <li class="flex items-center">
                                    <input id="fitbit" type="checkbox" value=""
                                        class="w-4 h-4 bg-gray-100 border-gray-300 rounded text-primary-600 focus:ring-primary-500 dark:focus:ring-primary-600 dark:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500" />


                                    <label for="fitbit"
                                        class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-100">
                                        ⭐⭐⭐ (56)
                                    </label>
                                </li>

                                <li class="flex items-center">
                                    <input id="fitbit" type="checkbox" value=""
                                        class="w-4 h-4 bg-gray-100 border-gray-300 rounded text-primary-600 focus:ring-primary-500 dark:focus:ring-primary-600 dark:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500" />


                                    <label for="dell"
                                        class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-100">
                                        ⭐⭐ (56)
                                    </label>
                                </li>

                                <li class="flex items-center">
                                    <input id="fitbit" type="checkbox" value=""
                                        class="w-4 h-4 bg-gray-100 border-gray-300 rounded text-primary-600 focus:ring-primary-500 dark:focus:ring-primary-600 dark:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500" />


                                    <label for="asus"
                                        class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-100">
                                        ⭐ (97)
                                    </label>
                                </li>
                            </ul>
                        </div>

                    </div> --}}
                    <div class="card-section w-full mx-auto mt-5 lg:ml-5" id="destination-show-section">

                        <form class="flex items-center w-full" name="form-search-destination" id="form-search-destination"
                            action="javascript:doSearch">
                            <label for="simple-search" class="sr-only">Search</label>
                            <div class="relative w-full">
                                {{-- <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                                <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 20">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2"
                                        d="M3 5v10M3 5a2 2 0 1 0 0-4 2 2 0 0 0 0 4Zm0 10a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm12 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm0 0V6a3 3 0 0 0-3-3H9m1.5-2-2 2 2 2" />
                                </svg>
                            </div> --}}
                                <div class="input-container mb-2">
                                    <div class="flex items-center w-full">
                                        <label for="simple-search" class="sr-only">Search</label>
                                        <div class="relative w-full">
                                            <div class="input-container mb-5">
                                                <form class="max-w-md mx-auto">
                                                    <label for="default-search"
                                                        class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
                                                    <div class="relative">
                                                        <div
                                                            class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                                            <svg class="w-4 h-4 text-gray-500 dark:text-gray-400"
                                                                aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                                fill="none" viewBox="0 0 20 20">
                                                                <path stroke="currentColor" stroke-linecap="round"
                                                                    stroke-linejoin="round" stroke-width="2"
                                                                    d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                                                            </svg>
                                                        </div>
                                                        <input type="text" id="search-bar" autocomplete="off"
                                                            class="block w-full pl-10 pr-4 py-2 text-sm text-gray-900 bg-white border-0 border-b-2 border-gray-300 focus:ring-0 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:border-blue-500"
                                                            placeholder="Search Destination..." />
                                                        <div class="hidden bg-white border w-100 absolute container mx-auto p-4 pt-2 mt-2 z-10"
                                                            style="">
                                                            <div class="last-search mb-5">
                                                                <span class="">Last Search</span>
                                                                <div class="list-search px-2">
                                                                    <div class="search mt-2">Bromo</div>
                                                                    <div class="search mt-2">Air Terjun</div>
                                                                    <div class="search mt-2">Pantai</div>
                                                                    <div class="search mt-2">Danau</div>
                                                                </div>
                                                            </div>
                                                            <div class="search-by-tag">
                                                                <span class="">Search By
                                                                    Popular Tags<span></span></span>
                                                                <div class="list-tag">
                                                                    <div
                                                                        class="p-1 tag mt-2 flex justify-between hover:bg-gray-50 cursor-pointer">
                                                                        <span>#Tumpang</span>
                                                                        <span class="text-gray-400">200 Post</span>
                                                                    </div>
                                                                    <div
                                                                        class="p-1 tag mt-2 flex justify-between hover:bg-gray-50 cursor-pointer">
                                                                        <span>#Tumpang</span>
                                                                        <span class="text-gray-400">200 Post</span>
                                                                    </div>
                                                                    <div
                                                                        class="p-1 tag mt-2 flex justify-between hover:bg-gray-50 cursor-pointer">
                                                                        <span>#Tumpang</span>
                                                                        <span class="text-gray-400">200 Post</span>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </form>

                                            </div>
                                        </div>
                                        <button id="dropdownDefaultButton" data-dropdown-toggle="filter-wisata"
                                            class="font-medium rounded-lg text-sm px-5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                                            type="button">Filter<svg class="w-2.5 h-2.5 ms-3" aria-hidden="true"
                                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                                <path stroke="currentColor" stroke-linecap="round"
                                                    stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4" />
                                            </svg>
                                        </button>
                                        <div id="filter-wisata"
                                            class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-64	 dark:bg-gray-700">
                                            {{-- <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownDefaultButton">
                                              <li>
                                                <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Dashboard</a>
                                              </li>
                                              <li>
                                                <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Settings</a>
                                              </li>
                                              <li>
                                                <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Earnings</a>
                                              </li>
                                              <li>
                                                <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Sign out</a>
                                              </li>
                                            </ul> --}}
                                            <div class="">
                                                <div class="py-2 p-2 bg-white rounded-lg flex flex-col gap-4">
                                                    <select name="province-filter" id="province-filter"
                                                        class=" bg-white text-gray-900 text-sm focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                                                        <option value="" disabled>--Choose--</option>
                                                    </select>
                                                    <select name="category-filter" id="category-filter"
                                                        class=" bg-white text-gray-900 text-sm focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                                                        <option value="1">Mountain</option>
                                                        <option value="2">Beach</option>
                                                        <option value="3">Waterfall</option>
                                                        <option value="4">Other</option>
                                                    </select>
                                                    <select name="star-filter" id="star-filter"
                                                        class=" bg-white text-gray-900 text-sm focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                                                        <option value="1">⭐</option>
                                                        <option value="2">⭐⭐</option>
                                                        <option value="3">⭐⭐⭐</option>
                                                        <option value="4">⭐⭐⭐⭐</option>
                                                        <option value="5">⭐⭐⭐⭐⭐</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                {{-- <div class="flex gap-2">
                                    <select name="province-filter" id="province-filter"
                                        class=" bg-white border border-gray-200 text-gray-900 text-sm focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                                        <option value="" disabled>--Choose--</option>
                                    </select>
                                    <select name="category-filter" id="category-filter"
                                        class=" bg-white border border-gray-200 text-gray-900 text-sm focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                                        <option value="1">Mountain</option>
                                        <option value="2">Beach</option>
                                        <option value="3">Waterfall</option>
                                        <option value="4">Other</option>
                                    </select>
                                    <select name="star-filter" id="star-filter"
                                        class=" bg-white border border-gray-200 text-gray-900 text-sm focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                                        <option value="1">⭐</option>
                                        <option value="2">⭐⭐</option>
                                        <option value="3">⭐⭐⭐</option>
                                        <option value="4">⭐⭐⭐⭐</option>
                                        <option value="5">⭐⭐⭐⭐⭐</option>
                                    </select>
                                </div> --}}
                                <div class="flex justify-center loading-spinner-pagin">
                                    <div class="flex items-center justify-center w-56 h-56">
                                        <div role="status">
                                            <svg aria-hidden="true"
                                                class="w-8 h-8 text-gray-200 animate-spin dark:text-gray-600 fill-blue-600"
                                                viewBox="0 0 100 101" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M100 50.5908C100 78.2051 77.6142 100.591 50 100.591C22.3858 100.591 0 78.2051 0 50.5908C0 22.9766 22.3858 0.59082 50 0.59082C77.6142 0.59082 100 22.9766 100 50.5908ZM9.08144 50.5908C9.08144 73.1895 27.4013 91.5094 50 91.5094C72.5987 91.5094 90.9186 73.1895 90.9186 50.5908C90.9186 27.9921 72.5987 9.67226 50 9.67226C27.4013 9.67226 9.08144 27.9921 9.08144 50.5908Z"
                                                    fill="currentColor" />
                                                <path
                                                    d="M93.9676 39.0409C96.393 38.4038 97.8624 35.9116 97.0079 33.5539C95.2932 28.8227 92.871 24.3692 89.8167 20.348C85.8452 15.1192 80.8826 10.7238 75.2124 7.41289C69.5422 4.10194 63.2754 1.94025 56.7698 1.05124C51.7666 0.367541 46.6976 0.446843 41.7345 1.27873C39.2613 1.69328 37.813 4.19778 38.4501 6.62326C39.0873 9.04874 41.5694 10.4717 44.0505 10.1071C47.8511 9.54855 51.7191 9.52689 55.5402 10.0491C60.8642 10.7766 65.9928 12.5457 70.6331 15.2552C75.2735 17.9648 79.3347 21.5619 82.5849 25.841C84.9175 28.9121 86.7997 32.2913 88.1811 35.8758C89.083 38.2158 91.5421 39.6781 93.9676 39.0409Z"
                                                    fill="currentFill" />
                                            </svg>
                                            <span class="sr-only">Loading...</span>
                                        </div>
                                        <span class="ms-2">Loading Content</span>
                                    </div>
                                    {{-- <div class='flex space-x-2 justify-center items-center bg-white h-48 dark:invert'>
                                        <span class='sr-only'>Loading...</span>
                                         <div class='h-4 w-4 bg-black rounded-full animate-bounce [animation-delay:-0.2s]'></div>
                                       <div class='h-4 w-4 bg-black rounded-full animate-bounce [animation-delay:-0.10s]'></div>
                                       <div class='h-4 w-4 bg-black rounded-full animate-bounce'></div>
                                   </div> --}}
                                </div>
                                <div class="flex justify-center not-found"></div>
                                <div
                                    class="listing-wisata-pagination mt-8 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-4 gap-4">
                                    {{-- <div class="relative animate-pulse">
                                        <div class="photo-container h-80 w-full relative cursor-pointer">
                                            <div class="absolute inset-0 bg-black bg-opacity-50 rounded-xl"></div>
                                            <div
                                                class="flex items-center justify-center w-full h-48 rounded-xl dark:bg-gray-700">
                                                <svg class="w-10 h-10 text-gray-200 dark:text-gray-600" aria-hidden="true"
                                                    xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                                    viewBox="0 0 20 18">
                                                    <path
                                                        d="M18 0H2a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2Zm-5.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3Zm4.376 10.481A1 1 0 0 1 16 15H4a1 1 0 0 1-.895-1.447l3.5-7A1 1 0 0 1 7.468 6a.965.965 0 0 1 .9.5l2.775 4.757 1.546-1.887a1 1 0 0 1 1.618.1l2.541 4a1 1 0 0 1 .028 1.011Z" />
                                                </svg>
                                            </div>
                                            <div class="animate-pulse absolute bottom-0 left-0 right-0 text-white p-4">
                                                <div class="h-2.5 bg-gray-200 rounded-full dark:bg-gray-700 w-48 mb-4">
                                                </div>
                                                <div class="h-2.5 bg-gray-200 rounded-full dark:bg-gray-700 w-64 mb-4">
                                                </div>

                                                <div class="h-2.5 bg-gray-200 rounded-full dark:bg-gray-700 w-48 mb-4">
                                                </div>

                                                <div class="h-2.5 bg-gray-200 rounded-full dark:bg-gray-700 w-40 mb-4">
                                                </div>

                                            </div>
                                        </div>
                                    </div> --}}
                                    {{-- <div class="relative">
                                        <div class="photo-container h-80 w-full relative cursor-pointer">
                                            <div class="absolute inset-0 bg-black bg-opacity-50 rounded-xl"></div>
                                            <img src="storage/wisata/airterjun.png" alt="Photo 2" class="w-full h-full object-cover rounded-xl">
                                            <div class="absolute bottom-0 left-0 right-0 text-white p-4">
                                                <p class="text-sm font-bold">Air Terjun</p>
                                                <p class="description">Lorem ipsum dolor sit amet consectetur. Egest <span class="more" style="display: none;"> nisi orci urna cursus sed mala sit.</span></p>
                                                <button class="see-more text-white font-bold">See More</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="relative">
                                        <div class="photo-container h-80 w-full relative cursor-pointer">
                                            <div class="absolute inset-0 bg-black bg-opacity-50 rounded-xl"></div>
                                            <img src="storage/wisata/pantai.png" alt="Photo 3" class="w-full h-full object-cover rounded-xl">
                                            <div class="absolute bottom-0 left-0 right-0 text-white p-4">
                                                <p class="text-sm font-bold">Pantai Pasir Putih</p>
                                                <p class="description">Lorem ipsum dolor sit amet consectetur. Egest <span class="more" style="display: none;"> nisi orci urna cursus sed mala sit.</span></p>
                                                <button class="see-more text-white font-bold">See More</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="relative">
                                        <div class="photo-container h-80 w-full relative cursor-pointer">
                                            <div class="absolute inset-0 bg-black bg-opacity-50 rounded-xl"></div>
                                            <img src="storage/wisata/danau.png" alt="Photo 4" class="w-full h-full object-cover rounded-xl">
                                            <div class="absolute bottom-0 left-0 right-0 text-white p-4">
                                                <p class="text-sm font-bold">Danau Putri</p>
                                                <p class="description">Lorem ipsum dolor sit amet consectetur. Egest <span class="more" style="display: none;"> nisi orci urna cursus sed mala sit.</span></p>
                                                <button class="see-more text-white font-bold">See More</button>
                                            </div>
                                        </div>
                                    </div> --}}
                                    <!-- Tambahkan lebih banyak item jika diperlukan -->
                                </div>
                                <div class="navigation-pagin flex justify-center mt-10">
                                    <ul class="impl-pagin inline-flex -space-x-px text-sm">
                                    </ul>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
        {{-- <div class="container h-full">
        <div class="lg:order-first">
            <div class="grid grid-cols-1 gap-8">
                <div class="max-w-md p-8">
                    <div class="relative" style="padding-bottom: 100px">
                        <img src="{{ asset('storage/vec1.png') }}" alt="Foto"
                            class="absolute left-72 top-28 ml-24 -mb-8">
                        <!-- Video -->
                        <img src="{{ asset('storage/vidprev.png') }}" alt="Foto"
                            class="absolute left-0 top-0 rounded-xl">
                        <!-- Foto -->
                        <!-- Foto -->
                        <img src="{{ asset('storage/dot.png') }}" alt="Foto"
                            class="absolute left-0 top-72  -mb-8 ">
                        <img src="{{ asset('storage/caro1.png') }}" alt="Foto"
                            class="absolute left-48 top-52 w-80 h-48   -mb-8 ">
                    </div>
                </div>
            </div>
        </div>
    </div>   --}}

        @include('package.penunjang.footer')




        @include('package.footerpack')
        <script>
            $(document).ready(function() {

            });
            $(document).ready(function() {
                a();
            });

            a = async () => {
                // firstslider.mount();
            }

            // $('.see-more').click(function() {
            //     var $description = $(this).siblings('.description');
            //     var $more = $(this).siblings('.description').children('.more');
            //     var $container = $(this).closest('.photo-container');

            //     if ($description.hasClass('expanded')) {
            //         $description.removeClass('expanded');
            //         $more.hide();
            //         $(this).text('See More');
            //         $container.removeClass('h-96');
            //         $container.addClass('h-80');
            //     } else {
            //         $description.addClass('expanded');
            //         $more.show();
            //         $(this).text('See Less');
            //         $container.removeClass('h-80');
            //         $container.addClass('h-96');
            //     }
            // });
        </script>
        @include('module.user.destination.script')

    </body>

    </html>
