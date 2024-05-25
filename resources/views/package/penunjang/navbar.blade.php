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

<nav class="fixed top-0 left-0 right-0 bg-transparent duration-150 z-50  navbar-full p-4">
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

            <button type="button"
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
<script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
    crossorigin="anonymous"></script>
<script>
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
