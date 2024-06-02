<!DOCTYPE html>
<html lang="en">
@include('package.headerpack')
<title>Localdest - Detail Destination</title>
<link rel="icon" type="image/png" href="/storage/vector/logo-localdest.jpg">
<style>
    /* .splide__slide img {
        width: 100%;
        height: auto;
    } */
</style>
<script>
    //    mode = 'light' // set 'light' untuk perubahan warna dasar navbar
</script>

<body class="">
    @include('package.penunjang.navbar')

    <section id="hero-section" class="relative" style="">
        {{-- <img src="/storage/wisata/pantai2.jpg" alt="" class="w-screen h-screen">

        <div class="absolute inset-0 bg-black top-0 bg-opacity-40 flex flex-col justify-between  p-4">
            <div class="container mx-auto flex flex-col justify-end items-start h-full mb-20">
                <div class="text-white text-left">
                    <h1 class="font-poppins text-lg font-bold leading-relaxed lg:text-4xl">
                        Pantai Pasir Meneng
                    </h1>
                    <p class="mt-6 text-md mb-2 ">Lorem ipsum dolor sit amet
                        consectetur. Elementum nunc adipiscing ac at. Lectus <br> sed justo imperdiet mauris urna ut
                        accumsan. Faucibus arcu odio aliquam rutrum vel mollis.</p>
                    <span class="mt-5 mb-8 text-md font-semibold">
                        4.8 ⭐⭐⭐⭐ | by Rifky Dian
                    </span>
                </div>
            </div> --}}
    </section>

    <div class="container mx-auto p-4">
        <div class="detail-section mt-20">
            {{-- <div class="text-black mr-20 text-4xl">
                <h1 class="font-poppins font-bold leading-relaxed">
                    Find the best destination for your holiday
                </h1>
            </div> --}}
            {{-- <div class="p-sec mt-8">
                <p>
                    Lorem ipsum dolor sit amet consectetur. Egestas nisi et phasellus orci urna cursus sed malesuada
                    sit.
                    Mauris facilisi tellus amet <br> eget.
                    <strong class="font-semibold"> In mauris donec feugiat sit ac sit fermentum turpis odio.</strong>
                </p>
            </div> --}}
            <div class="flex justify-between">

                <div class="card-section w-3/4">

                    {{-- tabs sect --}}
                    <div class="tabs-sect mb-10">
                        <ul
                            class="flex flex-wrap text-sm font-medium text-center text-gray-500 w-full border-b-2 border-gray-200 dark:border-gray-700 dark:text-gray-400">
                            <li class="mr-2 -mb-0.5">
                                <button onclick="switchPage('detail-destination')" aria-current="page"
                                    class="btn-detail-destination inline-block p-4 border-b-2 border-blue-500 rounded-t-lg hover:text-gray-600 hover:bg-gray-50 dark:bg-gray-800 dark:text-blue-500">
                                    Detail Destination
                                </button>
                            </li>
                            <li class="mr-2 -mb-0.5">
                                <button onclick="switchPage('review-section')"
                                    class="btn-review-section inline-block p-4 border-b-2 rounded-t-lg hover:text-gray-600 hover:bg-gray-50 dark:hover:bg-gray-800 dark:hover:text-gray-300">
                                    Reviews
                                </button>
                            </li>
                            <li class="mr-2 -mb-0.5">
                                <button onclick="switchPage('maps-section')"
                                    class="btn-maps-section inline-block p-4 border-b-2 rounded-t-lg hover:text-gray-600 hover:bg-gray-50 dark:hover:bg-gray-800 dark:hover:text-gray-300">
                                    Maps
                                </button>
                            </li>
                            <li class="mr-2 -mb-0.5">
                                <button onclick="switchPage('nearby-section')"
                                    class="btn-nearby-section inline-block p-4 border-b-2 rounded-t-lg hover:text-gray-600 hover:bg-gray-50 dark:hover:bg-gray-800 dark:hover:text-gray-300">
                                    Nearby Restaurants & Hotels
                                </button>
                            </li>
                        </ul>
                    </div>


                    {{-- detail destination section --}}
                    <div class="detail-destination mt-5">
                        <p class="mb-5 mt-5">Lorem ipsum dolor sit amet consectetur. Cursus id aliquet odio erat nisl
                            eget cras risus
                            senectus. Suspendisse eu nam eget pellentesque. Faucibus tempor purus facilisi enim egestas
                            porta lectus vulputate. Sed pretium eget tempus tempus risus fringilla dui eget imperdiet.
                            Ut lobortis nec nunc eu dignissim eu orci enim. Amet nibh at ante eget varius leo cursus.
                            Ultrices eu cum diam quis ultrices ullamcorper pharetra iaculis.
                            Blandit quis tincidunt eros velit odio lectus faucibus sed. Arcu fames cursus odio vel donec
                            consectetur faucibus pulvinar fringilla. </p>
                        <div class="grid gap-4 mb-4 grid-cols-2">
                            <div class="col-span-2 sm:col-span-1">
                                <img src="/storage/wisata/pantai2.jpg" alt="">
                            </div>
                            <div class="col-span-2 sm:col-span-1">
                                <img src="/storage/wisata/pantai2.jpg" alt="">
                            </div>
                        </div>
                        <p class="font-semibold mt-5 mb-5">Lorem ipsum dolor sit amet consectetur. Pellentesque mi et
                            praesent sapien vitae sapien eget.</p>
                        <p class="mt-5 mb-5">Lorem ipsum dolor sit amet consectetur. Sagittis ac mi ut id diam lacinia
                            integer amet. Quam tempus porttitor massa senectus molestie metus cursus morbi fringilla.
                            Eget pellentesque volutpat id gravida gravida massa. Diam a sit integer bibendum pulvinar
                            viverra facilisi semper. Convallis vitae purus ridiculus ultrices bibendum adipiscing dui.
                            Cursus nec suspendisse risus eget ut eleifend. Id duis sem purus sed amet nisl tempus
                            pretium.</p>
                        <p class="mt-5 mb-5">Lorem ipsum dolor sit amet consectetur. Tellus enim turpis ac viverra
                            lectus. Ullamcorper consectetur tellus eget pharetra ornare maecenas ipsum at lacus. Metus
                            aliquam est nulla nisl erat. In turpis viverra purus egestas amet adipiscing. Congue nec
                            massa ante aliquet hac ut non.</p>
                        <p class="mt-5 mb-5">Lorem ipsum dolor sit amet consectetur. Nulla libero condimentum risus
                            eros. Semper egestas senectus ornare est faucibus duis senectus ut. Ultrices augue duis
                            gravida et.</p>
                        <p class="mt-5 mb-5">Lorem ipsum dolor sit amet consectetur. Sagittis ac mi ut id diam lacinia
                            integer amet. Quam tempus porttitor massa senectus molestie metus cursus morbi fringilla.
                            Eget pellentesque volutpat id gravida gravida massa. Diam a sit integer bibendum pulvinar
                            viverra facilisi semper. Convallis vitae purus ridiculus ultrices bibendum adipiscing dui.
                            Cursus nec suspendisse risus eget ut eleifend. Id duis sem purus sed amet nisl tempus
                            pretium.</p>
                        <p class="mt-5 mb-5">Lorem ipsum dolor sit amet consectetur. Cursus id aliquet odio erat nisl
                            eget cras risus senectus. Suspendisse eu nam eget pellentesque. Faucibus tempor purus
                            facilisi enim egestas porta lectus vulputate. Sed pretium eget tempus tempus risus fringilla
                            dui eget imperdiet. Ut lobortis nec nunc eu dignissim eu orci enim. Amet nibh at ante eget
                            varius leo cursus. Ultrices eu cum diam quis ultrices ullamcorper pharetra iaculis.
                            <br>Blandit quis tincidunt eros velit odio lectus faucibus sed. Arcu fames cursus odio vel
                            donec
                            consectetur faucibus pulvinar fringilla.
                        </p>

                    </div>
                    {{-- Reviews Section --}}
                    <div class="review-section mt-5 hidden">
                        <div class="rating-section flex">
                            <div class="left-section ">
                                <div class="text-left">
                                    <div class="text-4xl font-bold mb-5">4.8</div>
                                    <div class="flex justify-start mt-5 mb-2">
                                        <!-- Bintang-bintang -->
                                        <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 24 24">
                                            <path
                                                d="M12 .587l3.668 7.568L24 9.423l-6 5.847 1.416 8.271L12 18.896l-7.416 4.645L6 15.27 0 9.423l8.332-1.268L12 .587z" />
                                        </svg>
                                        <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 24 24">
                                            <path
                                                d="M12 .587l3.668 7.568L24 9.423l-6 5.847 1.416 8.271L12 18.896l-7.416 4.645L6 15.27 0 9.423l8.332-1.268L12 .587z" />
                                        </svg>
                                        <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 24 24">
                                            <path
                                                d="M12 .587l3.668 7.568L24 9.423l-6 5.847 1.416 8.271L12 18.896l-7.416 4.645L6 15.27 0 9.423l8.332-1.268L12 .587z" />
                                        </svg>
                                        <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 24 24">
                                            <path
                                                d="M12 .587l3.668 7.568L24 9.423l-6 5.847 1.416 8.271L12 18.896l-7.416 4.645L6 15.27 0 9.423l8.332-1.268L12 .587z" />
                                        </svg>
                                        <svg class="w-5 h-5 text-gray-300" fill="currentColor" viewBox="0 0 24 24">
                                            <path
                                                d="M12 .587l3.668 7.568L24 9.423l-6 5.847 1.416 8.271L12 18.896l-7.416 4.645L6 15.27 0 9.423l8.332-1.268L12 .587z" />
                                        </svg>
                                    </div>
                                    <div class="text-gray-600">214 Rated</div>
                                </div>
                            </div>
                            <div class="right-section w-2/3 pl-10">
                                <div class="flex items-center mb-2">
                                    <span class="text-sm text-gray-600 text-left">5</span>
                                    <div class="w-4/5 bg-gray-200 rounded-full h-2.5 ml-5">
                                        <div class="bg-yellow-400 h-2.5 rounded-full" style="width: 80%"></div>
                                    </div>
                                </div>
                                <div class="flex items-center mb-2">
                                    <span class="text-sm text-gray-600 text-left">4</span>
                                    <div class="w-4/5 bg-gray-200 rounded-full h-2.5 ml-5">
                                        <div class="bg-yellow-400 h-2.5 rounded-full" style="width: 15%"></div>
                                    </div>
                                </div>
                                <div class="flex items-center mb-2">
                                    <span class="text-sm text-gray-600 text-left">3</span>
                                    <div class="w-4/5 bg-gray-200 rounded-full h-2.5 ml-5">
                                        <div class="bg-yellow-400 h-2.5 rounded-full" style="width: 5%"></div>
                                    </div>
                                </div>
                                <div class="flex items-center mb-2">
                                    <span class="text-sm text-gray-600 text-left">2</span>
                                    <div class="w-4/5 bg-gray-200 rounded-full h-2.5 ml-5">
                                        <div class="bg-yellow-400 h-2.5 rounded-full" style="width: 0%"></div>
                                    </div>
                                </div>
                                <div class="flex items-center mb-2">
                                    <span class="text-sm text-gray-600 text-left">1</span>
                                    <div class="w-4/5 bg-gray-200 rounded-full h-2.5 ml-5">
                                        <div class="bg-yellow-400 h-2.5 rounded-full" style="width: 0%"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="add-review">
                            <h3 class="font-semibold mb-5 mt-5">Add your Review</h3>
                            <div class="flex justify-start mt-5 mb-5">
                                <!-- Bintang-bintang -->
                                <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 24 24">
                                    <path
                                        d="M12 .587l3.668 7.568L24 9.423l-6 5.847 1.416 8.271L12 18.896l-7.416 4.645L6 15.27 0 9.423l8.332-1.268L12 .587z" />
                                </svg>
                                <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 24 24">
                                    <path
                                        d="M12 .587l3.668 7.568L24 9.423l-6 5.847 1.416 8.271L12 18.896l-7.416 4.645L6 15.27 0 9.423l8.332-1.268L12 .587z" />
                                </svg>
                                <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 24 24">
                                    <path
                                        d="M12 .587l3.668 7.568L24 9.423l-6 5.847 1.416 8.271L12 18.896l-7.416 4.645L6 15.27 0 9.423l8.332-1.268L12 .587z" />
                                </svg>
                                <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 24 24">
                                    <path
                                        d="M12 .587l3.668 7.568L24 9.423l-6 5.847 1.416 8.271L12 18.896l-7.416 4.645L6 15.27 0 9.423l8.332-1.268L12 .587z" />
                                </svg>
                                <svg class="w-5 h-5 text-gray-300" fill="currentColor" viewBox="0 0 24 24">
                                    <path
                                        d="M12 .587l3.668 7.568L24 9.423l-6 5.847 1.416 8.271L12 18.896l-7.416 4.645L6 15.27 0 9.423l8.332-1.268L12 .587z" />
                                </svg>
                            </div>
                            <div class="flex items-center mb-10">
                                <input type="text" name="inp-review" id="inp-review"
                                    placeholder="Add your review" class="w-3/4 rounded-full p-3 border-gray-200">
                                <button type="button"
                                    class="bg-figma-btn-blue rounded-full w-12 h-12 flex items-center justify-center ml-2 hover:bg-blue-500">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px"
                                        viewBox="0 0 36 36">
                                        <path fill="white"
                                            d="M32 8h-7.3l-1.06-2.72A2 2 0 0 0 21.78 4h-7.56a2 2 0 0 0-1.87 1.28L11.3 8H4a2 2 0 0 0-2 2v20a2 2 0 0 0 2 2h28a2 2 0 0 0 2-2V10a2 2 0 0 0-2-2m0 22H4V10h8.67l1.55-4h7.56l1.55 4H32Z"
                                            class="clr-i-outline clr-i-outline-path-1" />
                                        <path fill="white"
                                            d="M9 19a9 9 0 1 0 9-9a9 9 0 0 0-9 9m16.4 0a7.4 7.4 0 1 1-7.4-7.4a7.41 7.41 0 0 1 7.4 7.4"
                                            class="clr-i-outline clr-i-outline-path-2" />
                                        <path fill="white"
                                            d="M9.37 12.83a.8.8 0 0 0-.8-.8h-2.4a.8.8 0 0 0 0 1.6h2.4a.8.8 0 0 0 .8-.8"
                                            class="clr-i-outline clr-i-outline-path-3" />
                                        <path fill="white"
                                            d="M12.34 19a5.57 5.57 0 0 0 3.24 5l.85-1.37a4 4 0 1 1 4.11-6.61l.86-1.38A5.56 5.56 0 0 0 12.34 19"
                                            class="clr-i-outline clr-i-outline-path-4" />
                                        <path fill="none" d="M0 0h36v36H0z" />
                                    </svg> </button>
                            </div>
                            <hr class="border-gray-300 border-dashed mt-5 mb-10">
                            <h3 class="font-semibold mb-5 mt-5">Review</h3>

                            {{-- versi komen --}}
                            <article>
                                <div class="flex items-center mb-4">
                                    <img class="w-10 h-10 me-4 rounded-full object-cover	"
                                        src="/storage/photo-profile/orangilang.jpg" alt="">

                                    {{-- <span class="w-10 h-10 me-4 rounded-full bg-figma-btn-blue text-center">S</span> --}}
                                    <div class="font-medium dark:text-white">
                                        <p>Orang Ilang
                                        <div class="flex items-center mb-1 space-x-1 rtl:space-x-reverse">
                                            <svg class="w-4 h-4 text-yellow-300" aria-hidden="true"
                                                xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                                viewBox="0 0 22 20">
                                                <path
                                                    d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                            </svg>
                                            <svg class="w-4 h-4 text-yellow-300" aria-hidden="true"
                                                xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                                viewBox="0 0 22 20">
                                                <path
                                                    d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                            </svg>
                                            <svg class="w-4 h-4 text-yellow-300" aria-hidden="true"
                                                xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                                viewBox="0 0 22 20">
                                                <path
                                                    d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                            </svg>
                                            <svg class="w-4 h-4 text-yellow-300" aria-hidden="true"
                                                xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                                viewBox="0 0 22 20">
                                                <path
                                                    d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                            </svg>
                                            <svg class="w-4 h-4 text-gray-300 dark:text-gray-500" aria-hidden="true"
                                                xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                                viewBox="0 0 22 20">
                                                <path
                                                    d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                            </svg>
                                            <span class="ms-2 text-sm font-normal text-gray-400 dark:text-white">|
                                                10/12/2025</span>
                                        </div>
                                        </p>
                                    </div>
                                </div>
                                <p class="mb-2 text-gray-500 dark:text-gray-400">Lorem ipsum dolor sit amet
                                    consectetur. Fames ac vulputate et nulla bibendum quis vehicula. Lectus tincidunt
                                    etiam sed turpis facilisis id mi. Cum arcu dui nunc enim quisque orci. Scelerisque
                                    lacus tortor magna congue.</p>
                                {{-- <a href="#"
                                    class="block mb-5 text-sm font-medium text-blue-600 hover:underline dark:text-blue-500">Read
                                    more</a> --}}
                            </article>
                            {{-- versi dibales admin --}}
                            <article class="bg-gray-100 p-4 mb-5">
                                <div class="flex items-center mb-4">
                                    <div class="font-medium dark:text-white">
                                        <p>Admin Ilang
                                        </p>
                                    </div>
                                </div>
                                <p class="mb-2 text-gray-500 dark:text-gray-400">Lorem ipsum dolor sit amet
                                    consectetur. Consequat arcu gravida ornare sed sagittis in quam in amet. Eu feugiat
                                    nunc facilisi vel ipsum. Fringilla id dolor mauris eleifend in fermentum urna auctor
                                    mauris. Sed integer pulvinar rhoncus hendrerit eget duis maecenas potenti. Varius
                                    pharetra tincidunt sit suscipit. At facilisis eget id tortor quis cras felis. Lorem
                                    ultricies sed faucibus cursus habitant rhoncus et imperdiet.</p>
                                {{-- <a href="#"
                                    class="block mb-5 text-sm font-medium text-blue-600 hover:underline dark:text-blue-500">Read
                                    more</a> --}}
                            </article>

                            {{-- versi pake foto --}}
                            <article>
                                <div class="flex items-center mb-4">
                                    <img class="w-10 h-10 me-4 rounded-full object-cover	"
                                        src="/storage/photo-profile/orangilang.jpg" alt="">

                                    {{-- <span class="w-10 h-10 me-4 rounded-full bg-figma-btn-blue text-center">S</span> --}}
                                    <div class="font-medium dark:text-white">
                                        <p>Orang Ilang
                                        <div class="flex items-center mb-1 space-x-1 rtl:space-x-reverse">
                                            <svg class="w-4 h-4 text-yellow-300" aria-hidden="true"
                                                xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                                viewBox="0 0 22 20">
                                                <path
                                                    d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                            </svg>
                                            <svg class="w-4 h-4 text-yellow-300" aria-hidden="true"
                                                xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                                viewBox="0 0 22 20">
                                                <path
                                                    d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                            </svg>
                                            <svg class="w-4 h-4 text-yellow-300" aria-hidden="true"
                                                xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                                viewBox="0 0 22 20">
                                                <path
                                                    d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                            </svg>
                                            <svg class="w-4 h-4 text-yellow-300" aria-hidden="true"
                                                xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                                viewBox="0 0 22 20">
                                                <path
                                                    d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                            </svg>
                                            <svg class="w-4 h-4 text-gray-300 dark:text-gray-500" aria-hidden="true"
                                                xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                                viewBox="0 0 22 20">
                                                <path
                                                    d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                            </svg>
                                            <span class="ms-2 text-sm font-normal text-gray-400 dark:text-white">|
                                                10/12/2025</span>
                                        </div>
                                        </p>
                                    </div>
                                </div>
                                <div class="tag-sect mb-5 flex flex-wrap gap-2 justify-start">
                                    <img src="storage/fotbarbromo.jpg" alt="Photo 1"
                                        class="max-w-xs h-32 object-cover rounded-xl">
                                    <img src="storage/wisata/danau.png" alt="Photo 2"
                                        class="max-w-xs h-32 object-cover rounded-xl">
                                    <img src="storage/wisata/pantai.png" alt="Photo 3"
                                        class="max-w-xs h-32 object-cover rounded-xl">
                                    <img src="storage/wisata/pantai2.jpg" alt="Photo 4"
                                        class="max-w-xs h-32 object-cover rounded-xl">
                                    <img src="storage/wisata/orangilang.jpg" alt="Photo 5"
                                        class="max-w-xs h-32 object-cover rounded-xl">
                                    <img src="storage/bromo2.jpg" alt="Photo 6"
                                        class="max-w-xs h-32 object-cover rounded-xl">
                                </div>

                                <p class="mb-2 text-gray-500 dark:text-gray-400">Keren Bang</p>
                                {{-- <a href="#"
                                    class="block mb-5 text-sm font-medium text-blue-600 hover:underline dark:text-blue-500">Read
                                    more</a> --}}
                            </article>
                            <article class="bg-gray-100 p-4 mb-5">
                                <div class="flex items-center mb-4">
                                    <div class="font-medium dark:text-white">
                                        <p>Admin Ilang
                                        </p>
                                    </div>
                                </div>
                                <p class="mb-2 text-gray-500 dark:text-gray-400">genah ae lek rating, pantai opo bromo
                                    iki?</p>
                                {{-- <a href="#"
                                    class="block mb-5 text-sm font-medium text-blue-600 hover:underline dark:text-blue-500">Read
                                    more</a> --}}
                            </article>

                        </div>
                    </div>
                    <div class="maps-section mt-5 hidden">
                        <div class="p-4 mb-6 z-10 mx-8 w-75 h-64 sm:p-6 " id="inject-leaflet">
                        </div>
                        <div id="results"></div>

                    </div>
                    <div class="nearby-section mt-5 hidden">
                        {{-- list hotel --}}
                        <article class="hidden">
                            <div class="flex mb-4">
                                <img class="w-24 h-24 me-4 rounded-lg object-cover	" src="/storage/hotel.png"
                                    alt="">

                                {{-- <span class="w-10 h-10 me-4 rounded-full bg-figma-btn-blue text-center">S</span> --}}
                                <div class="font-medium dark:text-white">
                                    <p class="">Hotel ABC </p>

                                    <div class="flex items-center mt-2 space-x-1 rtl:space-x-reverse">
                                        <svg class="w-4 h-4 text-yellow-300" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                            viewBox="0 0 22 20">
                                            <path
                                                d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                        </svg>
                                        <svg class="w-4 h-4 text-yellow-300" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                            viewBox="0 0 22 20">
                                            <path
                                                d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                        </svg>
                                        <svg class="w-4 h-4 text-yellow-300" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                            viewBox="0 0 22 20">
                                            <path
                                                d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                        </svg>
                                        <svg class="w-4 h-4 text-yellow-300" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                            viewBox="0 0 22 20">
                                            <path
                                                d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                        </svg>
                                        <svg class="w-4 h-4 text-gray-300 dark:text-gray-500" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                            viewBox="0 0 22 20">
                                            <path
                                                d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                        </svg>
                                        <span
                                            class="ms-2 me-2 font-normal dark:text-white mx-4 border-r-2 px-2">4.8</span>
                                        {{-- <span class="ms-2 font-normal text-gray-400 dark:text-white mx-4">|</span> --}}
                                        <span
                                            class="ms-2 font-normal dark:text-white mx-4 border-r-2 px-2">Penginapan</span>
                                        {{-- <span class="font-normal text-gray-400 dark:text-white mx-4">|</span> --}}
                                        <span class="ms-2 font-normal dark:text-white mx-4 ">300m</span>

                                    </div>

                                    <p class="font-normal mt-2"> Jl. Jenderal Basuki Rahmat No.56, Kauman, Kec. Klojen,
                                        Kota
                                        Malang, Jawa Timur
                                    </p>
                                </div>
                            </div>
                            {{-- <a href="#"
                                class="block mb-5 text-sm font-medium text-blue-600 hover:underline dark:text-blue-500">Read
                                more</a> --}}
                        </article>
                      
                    </div>
                </div>
                <div id="share" class="ml-5 p-3 dark:bg-gray-700 rounded-lg">
                    <p class="font-semibold mb-5">Share with friends</p>
                    <div class="flex justify-start gap-2 mb-5">
                        <a href="https://facebook.com"
                            class="bg-blue-600 text-white p-3 rounded-full flex items-center justify-center w-10 h-10">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="https://twitter.com"
                            class="bg-blue-400 text-white p-3 rounded-full flex items-center justify-center w-10 h-10">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="https://instagram.com"
                            class="bg-pink-500 text-white p-3 rounded-full flex items-center justify-center w-10 h-10">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a href="https://wa.me"
                            class="bg-green-500 text-white p-3 rounded-full flex items-center justify-center w-10 h-10">
                            <i class="fab fa-whatsapp"></i>
                        </a>
                    </div>
                    <p class="font-semibold mb-5 ">Tag</p>
                    <div class="tag-sect mb-5 flex flex-wrap gap-2 justify-start">
                        <a href="" class="bg-gray-200 p-2 rounded">Beach</a>
                        <a href="" class="bg-gray-200 p-2 rounded">Jawa Timur</a>
                        <a href="" class="bg-gray-200 p-2 rounded">Indonesia</a>
                        <a href="" class="bg-gray-200 p-2 rounded">Malang</a>
                        <a href="" class="bg-gray-200 p-2 rounded">Bululawang</a>
                    </div>
                    <div class="create-section flex flex-col bg-gray-200 rounded justify-center items-center p-4">
                        <h1 class="font-bold text-center text-lg mb-5">Start creating your wishlist<br> destination
                        </h1>
                        <p class="text-center mb-5">Start creating your wishlist<br> destination</p>
                        <button data-modal-target="date-wishlist" data-modal-toggle="date-wishlist"
                            class="bg-figma-btn-blue text-white rounded p-2 px-6 mt-5">Save to Wishlist Now <i
                                class="ml-2 fa fa-arrow-right"></i></button>
                    </div>


                </div>

            </div>
        </div>
    </div>



    <div id="date-wishlist" tabindex="-1" aria-hidden="true"
        class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative p-4 w-full max-w-2xl max-h-full">
            <!-- Modal content -->
            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                <!-- Modal header -->
                <div class="flex items-center justify-between p-4 md:p-5 rounded-t dark:border-gray-600">
                    <h3 class="text-xl font-bold dark:text-white">
                        Wishlist
                    </h3>
                    <button type="button"
                        class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                        data-modal-hide="date-wishlist">
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                </div>
                <!-- Modal body -->
                <div class="p-2 md:p-5">
                    <label for="date-pick">Date</label>

                    <div class="relative max-w-sm mt-2">
                        <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                            <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z" />
                            </svg>
                        </div>
                        <input datepicker datepicker-buttons datepicker-autoselect-today type="text"
                            name="date-pick"
                            class="border border-gray-300 text-gray-900 text-sm focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="Select date">
                    </div>
                    <button type="submit" class="bg-figma-btn-blue text-white rounded p-2 px-6 mt-5">Save <i
                            class="ml-2 fa fa-arrow-right"></i></button>

                </div>
                <!-- Modal footer -->
            </div>
        </div>
    </div>

    @include('package.penunjang.footer')




    @include('package.footerpack')
    <script>
        // var firstslider = new Splide('#fslider', {
        //     type: 'loop',
        //     drag: 'free',
        //     perPage: 5,
        //     autoScroll: {
        //         speed: 1,
        //     },
        // });

        $(() => {
        });


        a = async () => {
            // firstslider.mount();
            // $('.splide__arrows').hide()
        }

        function switchPage(a) {

            var classes = $('.detail-destination, .review-section, .maps-section, .nearby-section');
            var buttonClasses = $('.btn-detail-destination, .btn-review-section, .btn-maps-section, .btn-nearby-section')
            classes.not('.' + a).fadeOut(200);

            $('.' + a).fadeIn(200);
            if (a == 'detail-destination') {
                buttonClasses.not('.btn-detail-destination').removeClass('border-blue-500');
                $('.btn-detail-destination').addClass('border-blue-500')
            } else if (a == 'review-section') {
                buttonClasses.not('.btn-review-section').removeClass('border-blue-500');
                $('.btn-review-section').addClass('border-blue-500')
            } else if (a == 'maps-section') {
                buttonClasses.not('.btn-maps-section').removeClass('border-blue-500');
                $('.btn-maps-section').addClass('border-blue-500')
            } else if (a == 'nearby-section') {
                buttonClasses.not('.btn-nearby-section').removeClass('border-blue-500');
                $('.btn-nearby-section').addClass('border-blue-500')
            }
            console.log(a);
        }
    </script>
    @include('module.user.detail-destination.script')
</body>

</html>
