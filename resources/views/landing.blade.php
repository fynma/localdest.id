<!DOCTYPE html>
<html lang="en">
@include('package.headerpack')
<title>Localdest</title>
<link rel="icon" type="image/png" href="/storage/vector/logo-localdest.jpg">

<style>
    /* .splide__slide img {
        width: 100%;
        height: auto;
    } */

    .progress-bar {
        background: rgba(255, 255, 255, 0.3);
        border-radius: 5px;
        cursor: pointer;
    }

    .progress-filled {
        background: white;
        border-radius: 5px;
    }

    .splide__pagination__page {
        display: none;
    }

    .splide__arrow {
        display: none;
    }

    .transition {
        transition: all 0.3s;
    }
</style>

<body>
    @include('package.penunjang.navbar')
    <section id="hero-section" class="relative">
        <video id="video" class="w-screen h-screen object-cover video-first" autoplay muted loop>
            <source src="{{ asset('storage/video-contoh.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <div class="absolute inset-0 bg-black top-0 bg-opacity-40 flex flex-col justify-between  p-4">
            <div class="container mx-auto flex flex-col justify-end items-start h-full mb-20">
                <div class="text-white text-left">
                    <h1 class="font-poppins text-lg font-bold leading-relaxed lg:text-4xl">
                        Explore and
                        Travel With <br> Your
                        Friend
                    </h1>
                    <p class="mt-6 mb-8 text-md sm:mb-12 ">Lorem ipsum dolor sit amet
                        consectetur. Elementum nunc adipiscing ac at. Lectus <br> sed justo imperdiet mauris urna ut
                        accumsan. Faucibus arcu odio aliquam rutrum vel mollis.</p>
                </div>
            </div>
            <div class="container mx-auto pb-8 flex justify-start mb-10">
                <div class="flex items-center space-x-4 video-control">
                    <button id="play-pause"
                        class="w-12 h-12 bg-white/30 rounded-full grid place-items-center hover:bg-white/40 transition">
                        <span class="sr-only">Play/Pause</span>
                        <svg id="play-icon" class="w-6 h-6 text-white hidden" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M8 5v14l11-7z" />
                        </svg>
                        <svg id="pause-icon" class="w-6 h-6 text-white" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M6 19h4V5H6v14zm8-14v14h4V5h-4z" />
                        </svg>
                    </button>
                    <div class="progress-bar w-80 h-1 relative">
                        <div class="progress-filled h-full" style="width: 0;"></div>
                    </div>
                    <div class="time-indicator text-white font-bold text-sm">00:00</div>
                </div>
            </div>
        </div>
    </section>

    {{-- <section id="hero-section" class="hidden relative">
        <video id="video" class="w-screen h-screen object-cover video-first" loop autoplay muted>
            <source src="{{ asset('storage/video-contoh.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>

        <div
            class=" absolute inset-0 bg-black bg-opacity-40 pb-0 lg-bigger:pt-20 lg-bigger:pl-32 flex items-center z-10">
            <div class="container mx-auto">
                <div class="text-white text-left ">
                    <h1 class="font-poppins text-lg	 font-bold leading-relaxed lg:text-7xl">
                        Explore and <br>
                        <span>Travel With</span> Your <br>
                        Friend
                    </h1>
                    <p class="mt-6 mb-8 text-lg sm:mb-12 font-medium" style="width: 600px">Lorem ipsum dolor sit amet
                        consectetur. Elementum nunc adipiscing ac at. Lectus sed justo imperdiet mauris urna ut
                        accumsan. Faucibus arcu odio aliquam rutrum vel mollis.</p>
                    <div class="flex justify-start">
                        <button type="button" class="text-white bg-merah hover:bg-blue-800 focus:ring-blue-800 hover:duration-150 focus:ring-4 focus:outline-none font-medium text-sm px-4 py-3 text-center"><i class="fa fa-users" aria-hidden="true"></i> &nbspJoin as a company</button>
                    </div>
                </div>
                <div class="flex items-center space-x-4 video-control">
                    <button id="play-pause"
                        class="w-12 h-12 bg-white/30 rounded-full grid place-items-center hover:bg-white/40 transition">
                        <span class="sr-only">Play/Pause</span>
                        <svg id="play-icon" class="w-6 h-6 text-white hidden" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M8 5v14l11-7z" />
                        </svg>
                        <svg id="pause-icon" class="w-6 h-6 text-white " viewBox="0 0 24 24" fill="currentColor">
                            <path d="M6 19h4V5H6v14zm8-14v14h4V5h-4z" />
                        </svg>
                    </button>
                    <div class="progress-bar w-64 h-1 relative">
                        <div class="progress-filled h-full" style="width: 0;"></div>
                    </div>
                    <div class="time-indicator text-white font-bold text-sm">00:00</div>
                </div>
            </div>

        </div>
    </section> --}}
    {{-- <div class="container h-full">
        <div class="lg:order-first">
            <div class="grid grid-cols-1 gap-8">
                <div class="max-w-md p-8">
                    <div class="relative" style="padding-bottom: 100px">
                        <img src="{{ asset('storage/vec1.png') }}" alt="Foto"
                            class="absolute left-72 top-28 ml-24 -mb-8">
                        <!-- Video -->
                        <img src="{{ asset('storage/vidprev.png') }}" alt="Foto"
                            class="absolute left-0 top-0 rounded-lg">
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
    {{-- hall size --}}
    <div class="container mx-auto p-4 px-20">
        <div class="about-section mt-20">
            <div class=" flex justify-start mt-5">
                <div class="flex items-center">
                    <hr class="border-t-2 border-figma-textblue w-8 mr-2">
                    <span class="text-figma-textblue font-bold text-xl">About</span>
                </div>
            </div>
            <h1 class="font-bold text-4xl mt-5">
                Translucent Travel Exploring the World's Best Destinations at Your Fingertips
            </h1>
            <p class="mt-5">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley
                of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also
                the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s
                with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop
                publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
            <p class="mt-5">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley
                of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also
                the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s
                with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop
                publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>

        </div>
        <div class="explore-section mt-20">
            <div class=" flex justify-start mt-5">
                <div class="flex items-center">
                    <hr class="border-t-2 border-figma-textblue w-8 mr-2">
                    <span class="text-figma-textblue font-bold text-xl">New Destination</span>
                </div>
            </div>
            <h1 class="font-bold text-4xl mt-5">
                Explore new destinations arround </h1>
            <div class="p-sec mt-8">
                <p>
                    Lorem ipsum dolor sit amet consectetur. Egestas nisi et phasellus orci urna cursus sed malesuada
                    sit.
                    Mauris facilisi tellus amet <br> eget.
                    <strong class="font-semibold"> In mauris donec feugiat sit ac sit fermentum turpis odio.</strong>
                </p>
            </div>
            {{-- original --}}
            {{-- <div id="fslider" class="mt-10 ">
                <div class="splide__track h-full">
                    <div class="splide__list flex gap-x-4 ">
                        <div class="splide__slide ">
                            <div
                                class="photo-container h-80 w-72 relative cursor-pointer transition ease-in-out delay-150 hover:-translate-y-2 duration-300 ">
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
                            <div
                                class="photo-container h-80 w-72 relative cursor-pointer transition ease-in-out delay-150 hover:-translate-y-1 hover:scale-105 duration-300 ">
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
                            <div
                                class="photo-container h-80 w-72 relative cursor-pointer transition ease-in-out delay-150 hover:-translate-y-1 hover:scale-105 duration-300 ">
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
                            <div
                                class="photo-container h-80 w-72 relative cursor-pointer transition ease-in-out delay-150 hover:-translate-y-1 hover:scale-105 duration-300 ">
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
                            <div
                                class="photo-container h-80 w-72 relative cursor-pointer transition ease-in-out delay-150 hover:-translate-y-1 hover:scale-105 duration-300 ">
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
            </div> --}}
            <div id="fslider" style="mb-10">
                <div class="splide__track h-96">
                    <div class="splide__list flex gap-x-4" style="align-items:flex-end">
                        {{-- <div class="splide__slide">
                            <div
                                class="photo-container h-80 w-72 relative cursor-pointer transition ease-in-out delay-150 hover:-translate-y-4 duration-200 ">
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
                        </div> --}}
                    </div>
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

    {{-- full size --}}
    <div class="bg-gray-50">
        <div class="category-explore-section mt-20 container mx-auto py-20">
            <div class="text-black mr-20 text-4xl">
                <h1 class="font-poppins font-bold leading-relaxed">
                    Explore the World's Best Travel <br> Destinations by Category
                </h1>
            </div>
            <div class="p-sec mt-8 mb-10">
                <p>
                    Lorem ipsum dolor sit amet consectetur. Egestas nisi et phasellus orci urna cursus sed malesuada
                    sit.
                    Mauris facilisi tellus amet <br> eget.
                    <strong class="font-semibold"> In mauris donec feugiat sit ac sit fermentum turpis odio.</strong>
                </p>
            </div>
            <div class="flex gap-40	">
                <div class="list">
                    <div class="list-items flex justify-start mt-5 cursor-pointer">
                        <div class="flex items-center">
                            <hr class="border-t-2 border-gray-300 w-20 mr-4 transition">
                            <span class="text-gray-200 font-bold text-xl transition">Mountain</span>
                        </div>
                    </div>
                    <div class="list-items flex justify-start mt-5 cursor-pointer">
                        <div class="flex items-center">
                            <hr class="border-t-2 border-figma-textblue w-28 mr-4 transition">
                            <span class="text-figma-textblue font-bold text-2xl transition">Beach</span>
                        </div>
                    </div>
                    <div class="list-items flex justify-start mt-5 cursor-pointer">
                        <div class="flex items-center">
                            <hr class="border-t-2 border-gray-300 w-20 mr-4 transition">
                            <span class="text-gray-200 font-bold text-xl transition">Waterfall</span>
                        </div>
                    </div>
                    <div class="list-items flex justify-start mt-5 cursor-pointer">
                        <div class="flex items-center">
                            <hr class="border-t-2 border-gray-300 w-20 mr-4 transition">
                            <span class="text-gray-200 font-bold text-xl transition">Other</span>
                        </div>
                    </div>
                </div>


                <div class="flex gap-x-4">
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
                </div>
            </div>

            <div class="flex justify-between mt-10 hidden">
                <div class="flex flex-col items-center justify-center">
                    <dt class="mb-2 text-3xl text-figma-textblue font-bold  ">35+</dt>
                    <dd class="text-gray-500 dark:text-gray-400">Lorem Ipsum Dolor</dd>
                </div>
                <div class="flex flex-col items-center justify-center">
                    <dt class="mb-2 text-3xl text-figma-textblue font-bold  ">100+</dt>
                    <dd class="text-gray-500 dark:text-gray-400">Lorem ipsum Dolor sit</dd>
                </div>
                {{-- <div class="flex flex-col items-center justify-center">
                    <dd class="border-t "></dd>
                </div> --}}
                <div class="flex flex-col items-center justify-center">
                    <dt class="mb-2 text-3xl text-figma-textblue font-bold  ">2K</dt>
                    <dd class="text-gray-500 dark:text-gray-400">Lorem ipsum Dolor</dd>
                </div>
                <div class="flex flex-col items-center justify-center">
                    <dt class="mb-2 text-3xl text-figma-textblue font-bold  ">20+</dt>
                    <dd class="text-gray-500 dark:text-gray-400">Lorem ipsum Dolor</dd>
                </div>
            </div>
        </div>
    </div>
    <div class="container mx-auto p-4 px-20">
        <div class="partnership-section mt-20">
            <div class=" flex justify-start mt-5">
                <div class="flex items-center">
                    <hr class="border-t-2 border-figma-textblue w-8 mr-2">
                    <span class="text-figma-textblue font-bold text-xl">Partnership</span>
                </div>
            </div>
            <h1 class="font-bold text-4xl mt-5">
                Partnership that Open Doors to New <br> Adventures </h1>
            <div class="flex justify-between mt-5">
                <img src="/storage/partnership/logo-partnership-1.png" alt="">
                <img src="/storage/partnership/logo-partnership-2.png" alt="">
                <img src="/storage/partnership/logo-partnership-3.png" alt="">
                <img src="/storage/partnership/logo-partnership-4.png" alt="">
                <img src="/storage/partnership/logo-partnership-5.png" alt="">

            </div>
        </div>
        <div class="faq-section mt-20 mx-auto">
            <h1 class="font-bold text-2xl mt-5">Frequently Asked Questions</h1>

            <div class="faq-item mt-10 p-2 cursor-pointer">
                <div class="faq-question flex items-center gap-5">
                    <svg class="minus-icon-faq hidden" xmlns="http://www.w3.org/2000/svg" width="1em"
                        height="1em" viewBox="0 0 24 24">
                        <path fill="currentColor" d="M19 12.998H5v-2h14z" />
                    </svg>
                    <svg class="plus-icon-faq" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em"
                        viewBox="0 0 24 24">
                        <path fill="#0086C9" d="M19 12.998h-6v6h-2v-6H5v-2h6v-6h2v6h6z" />
                    </svg>
                    <h2 class=" text-gray-500 font-semibold text-xl">Lorem ipsum dolor sit amet consectetur?</h2>
                </div>
                <div class="faq-answer mt-2 hidden">
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                        the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley
                        of type and scrambled it to make a type specimen book. It has survived not only five centuries,
                        but also the leap into electronic typesetting, remaining essentially unchanged. It was
                        popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages,
                        and more recently with desktop publishing software like Aldus PageMaker including versions of
                        Lorem Ipsum.</p>
                </div>
            </div>

            <div class="faq-item mt-10 p-2 cursor-pointer">
                <div class="faq-question flex items-center gap-5">
                    <svg class="minus-icon-faq hidden" xmlns="http://www.w3.org/2000/svg" width="1em"
                        height="1em" viewBox="0 0 24 24">
                        <path fill="currentColor" d="M19 12.998H5v-2h14z" />
                    </svg>

                    <svg class="plus-icon-faq" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em"
                        viewBox="0 0 24 24">
                        <path fill="#0086C9" d="M19 12.998h-6v6h-2v-6H5v-2h6v-6h2v6h6z" />
                    </svg>
                    <h2 class=" text-gray-500 font-semibold text-xl">Lorem ipsum dolor sit amet consectetur?</h2>
                </div>
                <div class="faq-answer mt-2 hidden">
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                        the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley
                        of type and scrambled it to make a type specimen book. It has survived not only five centuries,
                        but also the leap into electronic typesetting, remaining essentially unchanged. It was
                        popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages,
                        and more recently with desktop publishing software like Aldus PageMaker including versions of
                        Lorem Ipsum.</p>
                </div>
            </div>

            <div class="faq-item mt-10 p-2 cursor-pointer   ">
                <div class="faq-question flex items-center gap-5">
                    <svg class="minus-icon-faq hidden" xmlns="http://www.w3.org/2000/svg" width="1em"
                        height="1em" viewBox="0 0 24 24">
                        <path fill="currentColor" d="M19 12.998H5v-2h14z" />
                    </svg>

                    <svg class="plus-icon-faq" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em"
                        viewBox="0 0 24 24">
                        <path fill="#0086C9" d="M19 12.998h-6v6h-2v-6H5v-2h6v-6h2v6h6z" />
                    </svg>
                    <h2 class="text-gray-500 font-semibold text-xl">Lorem ipsum dolor sit amet consectetur?</h2>
                </div>
                <div class="faq-answer mt-2 hidden">
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                        the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley
                        of type and scrambled it to make a type specimen book. It has survived not only five centuries,
                        but also the leap into electronic typesetting, remaining essentially unchanged. It was
                        popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages,
                        and more recently with desktop publishing software like Aldus PageMaker including versions of
                        Lorem Ipsum.</p>
                </div>
            </div>
        </div>
    </div>
    @include('package.penunjang.footer')

    @include('package.footerpack')
    {{-- <script>
        // new Splide('#image-slider').mount();
        // var splide = new Splide('#image-slider', {
        //     type: 'fade',
        //     rewind: true,

        // });

        // splide.mount();
    </script> --}}
    <script>
        $(document).ready(function() {
            const video = $('#video')[0];
            const playPauseButton = $('#play-pause');
            const playIcon = $('#play-icon');
            const pauseIcon = $('#pause-icon');
            const progressFilled = $('.progress-filled');
            const timeIndicator = $('.time-indicator');

            playPauseButton.click(function() {
                if (video.paused) {
                    video.play();
                    playIcon.addClass('hidden');
                    pauseIcon.removeClass('hidden');
                } else {
                    video.pause();
                    playIcon.removeClass('hidden');
                    pauseIcon.addClass('hidden');
                }
            });

            video.addEventListener('timeupdate', function() {
                const progressPercent = (video.currentTime / video.duration) * 100;
                progressFilled.css('width', `${progressPercent}%`);

                const currentMinutes = Math.floor(video.currentTime / 60);
                const currentSeconds = Math.floor(video.currentTime % 60);
                const durationMinutes = Math.floor(video.duration / 60);
                const durationSeconds = Math.floor(video.duration % 60);

                timeIndicator.text(
                    `${currentMinutes.toString().padStart(2, '0')}:${currentSeconds.toString().padStart(2, '0')}`
                );
            });
        });
        // var firstslider = new Splide('#fslider', {
        //     type: 'loop',
        //     drag: 'free',
        //     perPage: 5,
        //     autoScroll: {
        //         speed: 1,
        //     },
        // });
        APP_URL = "{{ getenv('APP_URL') }}/";

        $('.list-items').click(function() {
            $('.list-items hr').removeClass('w-28 border-figma-textblue').addClass(
                'w-20 border-gray-300');
            $('.list-items span').removeClass('text-figma-textblue text-2xl').addClass(
                'text-gray-200 text-xl');
            $(this).find('hr').removeClass('w-20 border-gray-300').addClass(
                'w-28 border-figma-textblue');
            $(this).find('span').removeClass('text-gray-200 text-xl').addClass(
                'text-figma-textblue text-2xl');
        });
        $(".faq-question").click(function() {
            $(this).next(".faq-answer").slideToggle();
            $(this).find(".minus-icon-faq").toggleClass("hidden");
            $(this).find(".plus-icon-faq").toggleClass("hidden");
            $(this).find("h2").toggleClass("text-gray-500 font-bold");
            $(this).parent().toggleClass('bg-blue-50');
        });

        $(document).ready(function() {
            a();

            // var splide = new Splide('#fslider', {
            //     type: 'loop',
            //     perPage: 5,
            //     gap: '1rem',
            //     pagination: false,
            //     breakpoints: {
            //         768: {
            //             perPage: 1
            //         }
            //     }
            // }).mount();


        });

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
        a = async () => {
            await loadNewestDestination()
        }

        function loadNewestDestination() {
            axios.post(APP_URL + 'api/destination/getDestNewest', {
                    _token: '{{ csrf_token() }}',
                })
                .then(function(response) {
                    var data = response.data;
                    console.log(data)
                    let newestDestination = '';

                    $.each(data, function(index, item) {
                        newestDestination = `<div class="splide__slide relative" onclick="window.location.href='/detail-destination?dest=${item.destination_id}'">
                            <div class="photo-container h-80 w-full relative cursor-pointer">
                                <div class="absolute inset-0 bg-black bg-opacity-50"></div>
                                <img src="${item.destination_thumbnail ? '/storage/uploaded-thumbnail/' + item.destination_thumbnail : '/storage/no-img.webp'}" alt="Photo 1" class="w-full h-full object-cover">
                                <div class="absolute bottom-0 left-0 right-0 text-white p-4">
                                     <p class="text-sm font-bold">${item.destination_name}</p>
                                    <p class="address">${item.destination_city_name + ' | ' + item.destination_province_name}</p>
                                    <p class="rating">4.2 ⭐⭐⭐</p>
                                </div>
                            </div>
                        </div>`
                        $('.splide__list').append(newestDestination);

                    });
                    $('.splide__arrows').hide()
                    var splide = new Splide('#fslider', {
                        type: 'slide',
                        perPage: 5,
                        gap: '1rem',
                        pagination: false,
                        breakpoints: {
                            1024: {
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
                })
                .catch(function(error) {
                    console.error('Ada masalah dalam mengambil data:', error);
                });
        }
    </script>
</body>

</html>
