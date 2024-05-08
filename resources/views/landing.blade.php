<!DOCTYPE html>
<html lang="en">
@include('package.headerpack')
<title>gils</title>
<style>
    .splide__slide img {
        width: 100%;
        height: auto;
    }
</style>

<body>
    <nav class="fixed top-0 left-0 right-0 bg-transparent duration-150 z-50 w-full">
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
            <a href="https://flowbite.com/" class="flex items-center space-x-3 rtl:space-x-reverse">
                {{-- <img src="https://flowbite.com/docs/images/logo.svg" class="h-8" alt="Flowbite Logo" /> --}}
                <span
                    class="text-white self-center text-2xl font-semibold whitespace-nowrap dark:text-white">LocalDest.id</span>
            </a>
            
            <div class="flex items-center md:order-2 space-x-3 gap-3 md:space-x-0 rtl:space-x-reverse ">
                <button type="button" data-collapse-toggle="navbar-search" aria-controls="navbar-search" aria-expanded="false" class="md:hidden text-gray-500 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-700 focus:outline-none focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 rounded-lg text-sm p-2.5 me-1">
                    <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                      <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                    </svg>
                    <span class="sr-only">Search</span>
                  </button>
                  <div class="relative hidden md:block">
                    <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                      <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                      </svg>
                      <span class="sr-only">Search icon</span>
                    </div>
                    <input type="text" id="search-navbar" class="block w-full p-2 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search...">
                  </div>
                
                
                  <button type="button"
                    class="flex text-sm bg-gray-800 rounded-full md:me-0 focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600"
                    id="user-menu-button" aria-expanded="false" data-dropdown-toggle="user-dropdown"
                    data-dropdown-placement="bottom">
                    <span class="sr-only">Open user menu</span>
                    <img class="w-8 h-8 rounded-full" src="/docs/images/people/profile-picture-3.jpg" alt="user photo">
                </button>
                <!-- Dropdown menu -->
                <div class="z-50 hidden my-4 text-base list-none bg-transparent divide-y divide-gray-100 rounded-lg shadow dark:bg-gray-700 dark:divide-gray-600"
                    id="user-dropdown">
                    <div class="px-4 py-3">
                        <span class="block text-sm text-gray-900 dark:text-white">Bonnie Green</span>
                        <span class="block text-sm  text-gray-500 truncate dark:text-gray-400">name@flowbite.com</span>
                    </div>
                    <ul class="py-2" aria-labelledby="user-menu-button">
                        <li>
                            <a href="#"
                                class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Dashboard</a>
                        </li>
                        <li>
                            <a href="#"
                                class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Settings</a>
                        </li>
                        <li>
                            <a href="#"
                                class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Earnings</a>
                        </li>
                        <li>
                            <a href="#"
                                class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Sign
                                out</a>
                        </li>
                    </ul>
                </div>
                
                <button data-collapse-toggle="navbar-user" type="button"
                    class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                    aria-controls="navbar-user" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 17 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M1 1h15M1 7h15M1 13h15" />
                    </svg>
                </button>
            </div>
            <div class="items-center text-white justify-between hidden w-full md:flex md:w-auto md:order-1"
                id="navbar-user">
                <ul
                    class="flex flex-col font-medium p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-transparent dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
                    <li>
                        <a href="#"
                            class="block py-2 px-3 text-white rounded md:bg-transparent md:text-blue-700 md:p-0 md:dark:text-blue-500"
                            aria-current="page">Beranda</a>
                    </li>
                    <li>
                        <a href="#"
                            class="block py-2 px-3 text-white rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Destinasi</a>
                    </li>
                    <li>
                        <a href="#"
                            class="block py-2 px-3 text-white rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Ide
                            Liburan</a>
                    </li>
                    <li>
                        <a href="#"
                            class="block py-2 px-3 text-white rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">News</a>
                    </li>
                    <li>
                        <a href="#"
                            class="block py-2 px-3 text-white rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <section id="hero-section" class="relative">
        <div id="image-slider" class="splide">
            <div class="splide__track">
                <ul class="splide__list">
                    <li class="splide__slide relative">
                        <img class="w-full h-full object-cover" src="{{ asset('storage/landing.png') }}">
                        <!-- Konten Anda di atas slider -->

                    </li>
                    <li class="splide__slide">
                        <img class="w-full h-100 object-cover" src="{{ asset('storage/landing2.png') }}">
                    </li>
                </ul>
            </div>
        </div>
        <div class="absolute inset-0 bg-black bg-opacity-40 pb-0 lg-bigger:pt-20 lg-bigger:pl-32 flex items-center">
            <div class="container mx-auto">
                <div class="text-white text-left ">
                    <h1 class="font-poppins text-9xl	 font-bold leading-relaxed sm:text-5xl">
                        Explore and <br>
                        <span>Travel With</span> Your <br>
                        Friend
                    </h1>
                                        <p class="mt-6 mb-8 text-lg sm:mb-12 font-medium" style="width: 600px">Lorem ipsum dolor sit amet consectetur. Elementum nunc adipiscing ac at. Lectus sed justo imperdiet mauris urna ut accumsan. Faucibus arcu odio aliquam rutrum vel mollis.</p>
                    {{-- <div class="flex justify-start">
                        <button type="button" class="text-white bg-merah hover:bg-blue-800 focus:ring-blue-800 hover:duration-150 focus:ring-4 focus:outline-none font-medium text-sm px-4 py-3 text-center"><i class="fa fa-users" aria-hidden="true"></i> &nbspJoin as a company</button>
                    </div> --}}
                </div>
            </div>
        </div>
        {{-- <div class="bg-black bg-opacity-40 pb-0 lg-bigger:pt-20 lg-bigger:pl-32">
            <div
                class="container flex flex-col justify-center p-6 mx-auto sm:py-12 lg:py-24 lg:flex-row lg:justify-between">
                <div
                    class="text-white flex flex-col justify-center p-6 text-center rounded-sm md:max-w-md xl:max-w-lg md:text-left">
                    <h1 class="mt-12 ml-0 md:ml-8 font-poppins text-4xl font-semibold leadi sm:text-5xl">Explore and
                        <span>Travel With</span> Your Friend
                    </h1>
                    <p class="mt-20 mb-8 text-lg sm:mb-12 font-medium">Dictum aliquam porta in condimentum ac integer
                        <br class="hidden md:inline lg:hidden">turpis pulvinar, est scelerisque ligula sem
                    </p>
                    <div
                        class="flex flex-col space-y-4 sm:items-center sm:justify-center sm:flex-row sm:space-y-0 sm:space-x-4 md:justify-start -mt-6">
                        <button type="button"
                            class="text-white bg-merah hover:bg-blue-800 focus:ring-blue-800 hover:duration-150 focus:ring-4 focus:outline-none font-medium text-sm px-4 py-3 text-center mr-3 md:mr-0"><i
                                class="fa fa-users" aria-hidden="true"></i> &nbspJoin as a company</button>
                    </div>
                </div>
            </div>
        </div> --}}
    </section>

    @include('package.footerpack')
    <script>
        new Splide('#image-slider').mount();
    </script>
</body>

</html>
