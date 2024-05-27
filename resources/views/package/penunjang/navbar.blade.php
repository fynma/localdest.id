<style>
    .navbar {
        position: sticky;
        top: 0;
        width: 100%;
        transition: background-color 0.3s ease;
    }

    /* .navbar.scrolled {
        background-color: black;
    } */

    .nav-link {
        position: relative;
        /* color: white; */
        font-size: 0.875rem;
        /* text-sm */
        font-weight: 600;
        /* font-semibold */
        display: block;
        padding: 0.5rem 0;
        text-align: center;
        transition: color 0.3s;
    }

    .nav-link::after {
        content: '';
        position: absolute;
        width: 100%;
        transform: scaleX(0);
        height: 2px;
        bottom: 0;
        left: 0;
        background-color: white;
        transform-origin: bottom right;
        transition: transform 0.3s ease-out;
    }

    .nav-link:hover::after,
    .nav-link:focus::after,
    .nav-link:active::after,
    .nav-link.active::after {
        transform: scaleX(1);
        transform-origin: bottom left;
    }


    .nav-link:hover,
    .nav-link:focus,
    .nav-link:active {
        color: white;
    }

    #search-container {
        transition: max-width 0.5s, opacity 0.5s;
        max-width: 0;
        opacity: 0;
        overflow: hidden;
        display: flex;
        align-items: center;
        /* Ensure input aligns properly */
    }

    #search-container.active {
        max-width: 200px;
        /* Adjust as needed */
        opacity: 1;
    }
</style>

<nav class="fixed top-0 left-0 right-0 bg-transparent duration-150 z-10  navbar-full p-4">
    <div class="container flex items-center justify-between mx-auto">
        <div class="flex items-center justify-center space-x-3 rtl:space-x-reverse">
            <a href="/" class="flex items-center">
                <img src="/storage/logo_localdest.png" alt="" srcset="" class="logo-white">
                <img src="/storage/logo_localdest-light.png" alt="" srcset="" class="logo-light"
                    style="display: none">

                {{-- <span
                    class="text-white font-semibold whitespace-nowrap lg:text-2xl dark:text-white">LocalDest.id</span> --}}
            </a>
            <div class="flex items-center justify-center text-white  md:order-1" id="navbar-user">
                <ul class="flex ml-5 space-x-4 md:space-x-8 p-0 m-0 list-none">
                    <li>
                        <a href="/destination" class="nav-link destination">
                            DESTINATION
                        </a>
                    </li>
                    <li>
                        <a href="#" class="nav-link news">
                            NEWS
                        </a>
                    </li>
                    <li>
                        <a href="#" class="nav-link event">
                            EVENT
                        </a>
                    </li>
                    <li>
                        <a href="/contact-us" class="nav-link contact-us">
                            CONTACT US
                        </a>
                    </li>
                </ul>
            </div>

        </div>
        {{-- </div> --}}


        <div class="flex items-center md:order-2 space-x-3 gap-2 md:space-x-0 rtl:space-x-reverse">

            <button id="dropdownDefaultButton" data-dropdown-toggle="dropdown"
                class="change-color-area text-white bg-transparent focus:ring-4 focus:outline-none focus:ring-white rounded-lg text-sm  py-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                type="button">EN <svg class="w-2.5 h-2.5 ms-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                    fill="none" viewBox="0 0 10 6">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="m1 1 4 4 4-4" />
                </svg>
            </button>

            <!-- Dropdown menu -->
            <div id="dropdown"
                class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
                <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownDefaultButton">
                    <li>
                        <a href="#"
                            class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">INDONESIA</a>
                    </li>
                    <li>
                        <a href="#"
                            class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">ENGLISH</a>
                    </li>
                </ul>
            </div>

            <button type="button" id="toggle-search" aria-controls="navbar-search" aria-expanded="false"
                class=" text-gray-500 dark:text-gray-400 focus:outline-none dark:focus:ring-gray-700 rounded-lg text-sm p-2.5 ">
                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 20 20">
                    <path id="search-icon" stroke="white" stroke-linecap="round" stroke-linejoin="round"
                        stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                </svg>
                <span class="sr-only">Search</span>
            </button>
            <div id="search-container" class="hidden">
                <input type="text" id="search-navbar"
                    class="block w-full p-2 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="Search...">
            </div>

            <button type="button" data-modal-target="register-modal" data-modal-toggle="register-modal"
                class="change-color-area login-btn py-2.5 px-6 me-2 mb-2 text-sm font-base text-white focus:outline-none bg-transparent rounded-full border border-white hover:bg-gray-100 hover:text-black focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">Login</button>

            {{-- after login --}}
            {{-- <button type="button"
                class="flex text-sm bg-gray-800 rounded-full md:me-0 focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600"
                id="user-menu-button" aria-expanded="false" data-dropdown-toggle="user-dropdown"
                data-dropdown-placement="bottom">
                <span class="sr-only">Open user menu</span>
                <img class="w-8 h-8 rounded-full" src="/docs/images/people/profile-picture-3.jpg" alt="user photo">
            </button>
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
            </div> --}}

            <button data-collapse-toggle="navbar-user" type="button"
                class="hidden inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                aria-controls="navbar-user" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 17 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M1 1h15M1 7h15M1 13h15" />
                </svg>
            </button>
        </div>


    </div>
</nav>



{{-- <!-- Modal toggle -->
<button data-modal-target="register-modal" data-modal-toggle="crud-modal" class="block text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button">
    Toggle modal
  </button> --}}

<!-- Regis modal -->
<div id="register-modal" tabindex="-1" aria-hidden="true"
    class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full animate-fadeInUp">
    <div class="relative p-4 w-50 w-full max-w-2xl max-h-full">
        <!-- Modal content -->
        <div class="relative bg-white shadow dark:bg-gray-700">
            <!-- Modal header -->
            <div class="flex items-center justify-between p-4 md:p-5 dark:border-gray-600">
                <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                    Register
                </h3>
                <button type="button"
                    class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                    data-modal-toggle="register-modal">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>
            <div class="flex justify-center">
                <img src="/storage/vector/reg-vec.png" class="" alt="">
            </div>
            <!-- Modal body -->
            <form class="p-4 md:p-5">
                <div class="grid gap-4 mb-4 grid-cols-2">
                    <div class="col-span-2 sm:col-span-1">
                        <label for="email"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email</label>
                        <input type="email" name="email" id="email"
                            class="bg-white border border-gray-200 text-gray-900 text-sm focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            placeholder="Enter your Email" required="">
                    </div>
                    <div class="col-span-2 sm:col-span-1">
                        <label for="username"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Username</label>
                        <input type="text" name="username" id="username"
                            class="bg-white border border-gray-200 text-gray-900 text-sm focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            placeholder="Enter your Name" required="">
                    </div>
                    <div class="col-span-2">
                        <label for="password"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Password</label>
                        <input type="text" name="password" id="password"
                            class="bg-white border border-gray-200 text-gray-900 text-sm focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            placeholder="Enter your Password" required="">
                    </div>
                    <div class="col-span-2">
                        <label for="repassword"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Repeat
                            Password</label>
                        <input type="text" name="repassword" id="repassword"
                            class="bg-white border border-gray-200 text-gray-900 text-sm focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            placeholder="Re-Enter your Password" required="">
                    </div>
                </div>
                <div class="flex justify-center mb-5">
                    <button type="submit"
                        class="text-white inline-flex items-center justify-center hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium text-sm px-5 py-2.5 text-center w-1/2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                        style="background-color: #0B76BC;">
                        Sign Up
                    </button>
                </div>

                <div class="flex items-center justify-center mb-5">
                    <div class="border-t border-gray-300 w-full"></div>
                    <span class="px-3 text-sm font-thin text-gray-400 dark:text-gray-400">Or</span>
                    <div class="border-t border-gray-300 w-full"></div>
                </div>

                <div class="flex justify-center mb-5">
                    <button type="button"
                        class="text-gray-900 inline-flex items-center justify-center bg-gray-100 hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-300 font-medium text-sm px-5 py-2.5 text-center w-1/2 dark:bg-gray-700 dark:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-800">
                        <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="20" height="20"
                            class="mr-2" viewBox="0 0 48 48">
                            <path fill="#FFC107"
                                d="M43.611,20.083H42V20H24v8h11.303c-1.649,4.657-6.08,8-11.303,8c-6.627,0-12-5.373-12-12c0-6.627,5.373-12,12-12c3.059,0,5.842,1.154,7.961,3.039l5.657-5.657C34.046,6.053,29.268,4,24,4C12.955,4,4,12.955,4,24c0,11.045,8.955,20,20,20c11.045,0,20-8.955,20-20C44,22.659,43.862,21.35,43.611,20.083z">
                            </path>
                            <path fill="#FF3D00"
                                d="M6.306,14.691l6.571,4.819C14.655,15.108,18.961,12,24,12c3.059,0,5.842,1.154,7.961,3.039l5.657-5.657C34.046,6.053,29.268,4,24,4C16.318,4,9.656,8.337,6.306,14.691z">
                            </path>
                            <path fill="#4CAF50"
                                d="M24,44c5.166,0,9.86-1.977,13.409-5.192l-6.19-5.238C29.211,35.091,26.715,36,24,36c-5.202,0-9.619-3.317-11.283-7.946l-6.522,5.025C9.505,39.556,16.227,44,24,44z">
                            </path>
                            <path fill="#1976D2"
                                d="M43.611,20.083H42V20H24v8h11.303c-0.792,2.237-2.231,4.166-4.087,5.571c0.001-0.001,0.002-0.001,0.003-0.002l6.19,5.238C36.971,39.205,44,34,44,24C44,22.659,43.862,21.35,43.611,20.083z">
                            </path>
                        </svg>
                        Login with Google
                    </button>
                </div>
                <div class="flex justify-center mb-5">
                    <p class="text-sm dark:text-gray-400">If you already have an account, <button
                            data-modal-target="login-modal" data-modal-toggle="login-modal" id="login-button"
                            class="text-blue-600 dark:text-blue-500 hover:underline">Login</button> now.
                    </p>
                </div>
            </form>
        </div>
    </div>
</div>

<div id="login-modal" tabindex="-1" aria-hidden="true"
    class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full animate-fadeInUp">
    <div class="relative p-4 w-50 w-full max-w-2xl max-h-full">
        <!-- Modal content -->
        <div class="relative bg-white shadow dark:bg-gray-700">
            <!-- Modal header -->
            <div class="flex items-center justify-between p-4 md:p-5 dark:border-gray-600">
                <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                    Login
                </h3>
                <button type="button"
                    class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                    data-modal-toggle="login-modal">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>
            <div class="flex justify-center">
                <img src="/storage/vector/reg-vec.png" class="" alt="">
            </div>
            <!-- Modal body -->
            <form class="p-4 md:p-5">
                <div class="grid gap-4 mb-4 grid-cols-2">
                    <div class="col-span-2 sm:col-span-1">
                        <label for="email"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email</label>
                        <input type="email" name="email" id="email"
                            class="bg-white border border-gray-200 text-gray-900 text-sm focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            placeholder="Enter your Email" required="">
                    </div>
                    <div class="col-span-2 sm:col-span-1">
                        <label for="username"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Username</label>
                        <input type="text" name="username" id="username"
                            class="bg-white border border-gray-200 text-gray-900 text-sm focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            placeholder="Enter your Name" required="">
                    </div>
                    <div class="col-span-2">
                        <label for="password"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Password</label>
                        <input type="text" name="password" id="password"
                            class="bg-white border border-gray-200 text-gray-900 text-sm focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            placeholder="Enter your Password" required="">
                    </div>
                    <div class="col-span-2">
                        <label for="repassword"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Repeat
                            Password</label>
                        <input type="text" name="repassword" id="repassword"
                            class="bg-white border border-gray-200 text-gray-900 text-sm focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            placeholder="Re-Enter your Password" required="">
                    </div>
                </div>
                <div class="flex justify-center mb-5">
                    <button type="submit"
                        class="text-white inline-flex items-center justify-center hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium text-sm px-5 py-2.5 text-center w-1/2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                        style="background-color: #0B76BC;">
                        Sign Up
                    </button>
                </div>

                <div class="flex items-center justify-center mb-5">
                    <div class="border-t border-gray-300 w-full"></div>
                    <span class="px-3 text-sm font-thin text-gray-400 dark:text-gray-400">Or</span>
                    <div class="border-t border-gray-300 w-full"></div>
                </div>

                <div class="flex justify-center mb-5">
                    <button type="button"
                        class="text-gray-900 inline-flex items-center justify-center bg-gray-100 hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-300 font-medium text-sm px-5 py-2.5 text-center w-1/2 dark:bg-gray-700 dark:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-800">
                        <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="20" height="20"
                            class="mr-2" viewBox="0 0 48 48">
                            <path fill="#FFC107"
                                d="M43.611,20.083H42V20H24v8h11.303c-1.649,4.657-6.08,8-11.303,8c-6.627,0-12-5.373-12-12c0-6.627,5.373-12,12-12c3.059,0,5.842,1.154,7.961,3.039l5.657-5.657C34.046,6.053,29.268,4,24,4C12.955,4,4,12.955,4,24c0,11.045,8.955,20,20,20c11.045,0,20-8.955,20-20C44,22.659,43.862,21.35,43.611,20.083z">
                            </path>
                            <path fill="#FF3D00"
                                d="M6.306,14.691l6.571,4.819C14.655,15.108,18.961,12,24,12c3.059,0,5.842,1.154,7.961,3.039l5.657-5.657C34.046,6.053,29.268,4,24,4C16.318,4,9.656,8.337,6.306,14.691z">
                            </path>
                            <path fill="#4CAF50"
                                d="M24,44c5.166,0,9.86-1.977,13.409-5.192l-6.19-5.238C29.211,35.091,26.715,36,24,36c-5.202,0-9.619-3.317-11.283-7.946l-6.522,5.025C9.505,39.556,16.227,44,24,44z">
                            </path>
                            <path fill="#1976D2"
                                d="M43.611,20.083H42V20H24v8h11.303c-0.792,2.237-2.231,4.166-4.087,5.571c0.001-0.001,0.002-0.001,0.003-0.002l6.19,5.238C36.971,39.205,44,34,44,24C44,22.659,43.862,21.35,43.611,20.083z">
                            </path>
                        </svg>
                        Login with Google
                    </button>
                </div>
                <div class="flex justify-center mb-5">
                    <p class="text-sm dark:text-gray-400">If you already have an account, <a href="#"
                            class="text-blue-600 dark:text-blue-500 hover:underline">Login</a> now.
                    </p>
                </div>
            </form>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
    crossorigin="anonymous"></script>
<script>
    $('#login-button').on('click', function() {
        // Hide the Register Modal
        $('#register-modal').addClass('hidden');
        // Show the Login Modal
        $('#login-modal').removeClass('hidden');
        // Hide the Backdrop
        $('[modal-backdrop]').addClass('hidden');
    });

    $(document).ready(function() {
        var currentUrl = window.location.pathname;

        var endpoint = currentUrl.split('/').pop();
        $('.nav-link').each(function() {
            var linkHref = $(this).attr('href').split('/').pop();
            if (linkHref === endpoint) {
                $(this).addClass('active');
            } else {
                $(this).removeClass('active');
            }
        });
    });
    var mode;
    const nav = $('.navbar-full')
    const text_a = $('#navbar-user')
    // setmode = () => {
    const all_changecolor = $('.change-color-area')
    // }
    // var mode;
    if (mode == 'light') {
        text_a.removeClass('text-white')
        text_a.addClass('text-black')
        all_changecolor.removeClass('text-white')
        all_changecolor.addClass('text-black')
        nav.removeClass('bg-transparent');
        nav.addClass('bg-white')
        $("#search-icon").attr("stroke", "black");
        $('.login-btn').removeClass('border-white');
        $('.login-btn').addClass('border-black')
        $('.logo-white').hide()
        $('.logo-light').show()
    } else {
        document.addEventListener('scroll', function() {

            if (window.scrollY > 50) {
                // $('.navbar-full').addClass('')
                text_a.removeClass('text-white')
                text_a.addClass('text-black')
                all_changecolor.removeClass('text-white')
                all_changecolor.addClass('text-black')
                nav.removeClass('bg-transparent');
                nav.addClass('bg-white')
                $('.logo-white').hide()
                $('.logo-light').show()
                $("#search-icon").attr("stroke", "black");
                $('.login-btn').removeClass('border-white');
                $('.login-btn').addClass('border-black')

            } else {
                text_a.addClass('text-white')
                text_a.removeClass('text-black')
                all_changecolor.addClass('text-white')
                all_changecolor.removeClass('text-black')
                nav.removeClass('bg-white');
                nav.addClass('bg-transparent')
                $('.logo-light').hide()
                $('.logo-white').show()
                $("#search-icon").attr("stroke", "white");
                $('.login-btn').addClass('border-white');
                $('.login-btn').removeClass('border-black')
            }
        });
    }
    $('#toggle-search').on('click', function() {
        $('#search-container').toggleClass('active');
    });
</script>
