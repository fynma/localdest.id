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
                    Explore the World's Best Travel Destinations
                </h1>
            </div>
            <div class="text-center p-sec mt-8 lg:text-left">
                <p>
                    Lorem ipsum dolor sit amet consectetur. Egestas nisi et phasellus orci urna cursus sed malesuada
                    sit.
                    Mauris facilisi tellus amet <br> eget.
                    <strong class="font-semibold"> In mauris donec feugiat sit ac sit fermentum turpis odio.</strong>
                </p>
            </div>
            <div id="fslider" class="mt-10">
                <div class="splide__track">
                    <div class="splide__list flex gap-x-0.5 md:gap-x-0 lg:gap-x-4">
                        <div class="splide__slide relative">
                            <div class="photo-container h-80 w-72 relative cursor-pointer">
                                <div class="absolute inset-0 bg-black bg-opacity-50  rounded-xl"></div>
                                <img src="storage/wisata/bromo.png" alt="Photo 1"
                                    class="w-auto h-full object-cover rounded-xl">
                                <div class="absolute bottom-0 left-0 right-0  text-white p-4">
                                    <p class="text-sm font-bold">Kawah Bromo</p>
                                    <p class="description">Lorem ipsum dolor sit amet consectetur. Egest <span
                                            class="more" style="display: none;"> nisi orci urna cursus sed mala
                                            sit.</span></p>
                                    <button class="see-more text-white font-bold">See More</button>
                                </div>
                            </div>
                        </div>

                        <div class="splide__slide relative">
                            <div class="photo-container h-80 w-72 relative cursor-pointer">
                                <div class="absolute inset-0 bg-black bg-opacity-50 rounded-xl"></div>
                                <img src="storage/wisata/airterjun.png" alt="Photo 2"
                                    class="w-full h-full object-cover rounded-xl">
                                <div class="absolute bottom-0 left-0 right-0 text-white p-4">
                                    <p class="text-sm font-bold">Air Terjun</p>
                                    <p class="description">Lorem ipsum dolor sit amet consectetur. Egest <span
                                            class="more" style="display: none;"> nisi orci urna cursus sed mala
                                            sit.</span></p>
                                    <button class="see-more text-white font-bold">See More</button>
                                </div>
                            </div>
                        </div>
                        <div class="splide__slide relative">
                            <div class="photo-container h-80 w-72 relative cursor-pointer">
                                <div class="absolute inset-0 bg-black bg-opacity-50 rounded-xl"></div>
                                <img src="storage/wisata/pantai.png" alt="Photo 3"
                                    class="w-full h-full object-cover rounded-xl">
                                <div class="absolute bottom-0 left-0 right-0 text-white p-4">
                                    <p class="text-sm font-bold">Pantai Pasir Putih</p>
                                    <p class="description">Lorem ipsum dolor sit amet consectetur. Egest <span
                                            class="more" style="display: none;"> nisi orci urna cursus sed mala
                                            sit.</span></p>
                                    <button class="see-more text-white font-bold">See More</button>
                                </div>
                            </div>
                        </div>
                        <div class="splide__slide relative">
                            <div class="photo-container h-80 w-72 relative cursor-pointer">
                                <div class="absolute inset-0 bg-black bg-opacity-50 rounded-xl"></div>
                                <img src="storage/wisata/danau.png" alt="Photo 3"
                                    class="w-full h-full object-cover rounded-xl">
                                <div class="absolute bottom-0 left-0 right-0 text-white p-4">
                                    <p class="text-sm font-bold">Danau Putri</p>
                                    <p class="description">Lorem ipsum dolor sit amet consectetur. Egest <span
                                            class="more" style="display: none;"> nisi orci urna cursus sed mala
                                            sit.</span></p>
                                    <button class="see-more text-white font-bold">See More</button>
                                </div>
                            </div>
                        </div>
                        <div class="splide__slide relative">
                            <div class="photo-container h-80 w-72 relative cursor-pointer">
                                <div class="absolute inset-0 bg-black bg-opacity-50 rounded-xl"></div>
                                <img src="storage/wisata/danau.png" alt="Photo 3"
                                    class="w-auto h-full object-cover rounded-xl">
                                <div class="absolute bottom-0 left-0 right-0 text-white p-4">
                                    <p class="text-sm font-bold">Danau Putri</p>
                                    <p class="description">Lorem ipsum dolor sit amet consectetur. Egest <span
                                            class="more" style="display: none;"> nisi orci urna cursus sed mala
                                            sit.</span></p>
                                    <button class="see-more text-white font-bold">See More</button>
                                </div>
                            </div>
                        </div>
                        <!-- Add more div elements for additional photos -->
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
            <div class="findbest-section mt-20">
                <div class="text-black lg:mr-20 text-4xl">
                    <h1 class="text-center font-poppins font-bold leading-relaxed lg:text-left">
                        Find the best destination for your holiday
                    </h1>
                </div>
                <div class="p-sec mt-8 text-center lg:text-left">
                    <p>
                        Lorem ipsum dolor sit amet consectetur. Egestas nisi et phasellus orci urna cursus sed malesuada
                        sit.
                        Mauris facilisi tellus amet <br> eget.
                        <strong class="font-semibold"> In mauris donec feugiat sit ac sit fermentum turpis
                            odio.</strong>
                    </p>
                </div>
                <div class="md:flex md:gap-2 justify-between mt-10">
                    <h6 class="text-center text-xl font-bold text-gray-900 md:hidden lg:hidden lg:text-left dark:text-white">
                        Filter
                    </h6>
                    <div id="filter" class="flex gap-10 justify-between md:block lg:block md:w-56 lg:w-56 lg:p-3 dark:bg-gray-700 lg:mt-5 md:border-r lg:border-r border-gray-200">
                        <h6 class="hidden mb-3 text-xl md:block lg:block font-bold text-gray-900 dark:text-white">
                            Filter
                        </h6>
                        <div class="category mt-10">
                            <p class="font-semibold text-lg mb-2">Category</p>
                            <ul class="space-y-2 text-lg gap-x-4">
                                <li class="flex items-center">
                                    <input id="apple" type="checkbox" value=""
                                        class="w-4 h-4 bg-gray-100 border-gray-300 rounded text-primary-600 focus:ring-primary-500 dark:focus:ring-primary-600 dark:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500" />

                                    <label for="apple"
                                        class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-100">
                                        Mountain
                                    </label>
                                </li>

                                <li class="flex items-center">
                                    <input id="fitbit" type="checkbox" value=""
                                        class="w-4 h-4 bg-gray-100 border-gray-300 rounded text-primary-600 focus:ring-primary-500 dark:focus:ring-primary-600 dark:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500" />

                                    <label for="fitbit"
                                        class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-100">
                                        Beach
                                    </label>
                                </li>

                                <li class="flex items-center">
                                    <input id="dell" type="checkbox" value=""
                                        class="w-4 h-4 bg-gray-100 border-gray-300 rounded text-primary-600 focus:ring-primary-500 dark:focus:ring-primary-600 dark:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500" />

                                    <label for="dell"
                                        class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-100">
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

                    </div>
                    <div class="card-section w-full mx-auto mt-5 lg:ml-5">

                        <form class="flex items-center w-full">
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
                                <div class="input-container mb-5">
                                    <form class="flex items-center w-full">
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
                                                        <input type="search" id="search-bar" autocomplete="off"
                                                            class="block w-full pl-10 pr-4 py-2 text-sm text-gray-900 bg-white border-0 border-b-2 border-gray-300 focus:ring-0 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:border-blue-500"
                                                            placeholder="Search Destination..." required />
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
                                    </form>
                                </div>
                                <div
                                    class="listing-wisata-pagination mt-10 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-4 gap-4">
                                    {{-- <div class="relative">
                                        <div class="photo-container h-80 w-full relative cursor-pointer">
                                            <div class="absolute inset-0 bg-black bg-opacity-50 rounded-xl"></div>
                                            <img src="storage/wisata/bromo.png" alt="Photo 1" class="w-full h-full object-cover rounded-xl">
                                            <div class="absolute bottom-0 left-0 right-0 text-white p-4">
                                                <p class="text-sm font-bold">Kawah Bromo</p>
                                                <p class="description">Lorem ipsum dolor sit amet consectetur. Egest <span class="more" style="display: none;"> nisi orci urna cursus sed mala sit.</span></p>
                                                <button class="see-more text-white font-bold">See More</button>
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
                var splide = new Splide('#fslider', {
                    type: 'slide',
                    perPage: 5,
                    gap: '1rem',
                    pagination: false,
                    breakpoints: {
                        768: {
                            perPage: 1
                        }
                    }
                }).mount();

                function updateProgressBar() {
                    var currentSlide = splide.index;
                    var totalSlides = Math.max(splide.length - splide.options.perPage + 1,
                        1); // Ensure totalSlides is never less than 1
                    var progressPercentage = (currentSlide + 1) / totalSlides * 100;
                    $('.progress-bar-fill').css('width', progressPercentage + '%');
                }

                updateProgressBar();

                splide.on('move', function() {
                    updateProgressBar();
                });

                $('.splide-prev').on('click', function() {
                    splide.go('<');
                });

                $('.splide-next').on('click', function() {
                    splide.go('>');
                });
            });
            $(document).ready(function() {
                a();
            });

            a = async () => {
                // firstslider.mount();
                $('.splide__arrows').hide()
            }

            $('.see-more').click(function() {
                var $description = $(this).siblings('.description');
                var $more = $(this).siblings('.description').children('.more');
                var $container = $(this).closest('.photo-container');

                if ($description.hasClass('expanded')) {
                    $description.removeClass('expanded');
                    $more.hide();
                    $(this).text('See More');
                    $container.removeClass('h-96');
                    $container.addClass('h-80');
                } else {
                    $description.addClass('expanded');
                    $more.show();
                    $(this).text('See Less');
                    $container.removeClass('h-80');
                    $container.addClass('h-96');
                }
            });
        </script>
        @include('module.user.destination.script')

    </body>

    </html>
