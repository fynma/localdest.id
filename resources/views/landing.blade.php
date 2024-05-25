<!DOCTYPE html>
<html lang="en">
@include('package.headerpack')
<title>gils</title>
<style>
    .splide__slide img {
        width: 100%;
        height: auto;
    }

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
    .splide__arrow{
        display: none;
    }
</style>

<body>
    @include('package.penunjang.navbar')
    <section id="hero-section" class="relative">
        <video id="video" class="w-screen h-screen object-cover video-first" autoplay muted loop>
            <source src="{{ asset('storage/video-contoh.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <div class="absolute inset-0 bg-black bg-opacity-40 flex flex-col justify-between">
            <div class="container mx-auto flex flex-col justify-center items-start h-full pl-32">
                <div class="text-white text-left">
                    <h1 class="font-poppins text-lg font-bold leading-relaxed lg:text-6xl">
                        Explore and
                        Travel With <br> Your
                        Friend
                    </h1>
                    <p class="mt-6 mb-8 text-xl sm:mb-12 font-medium ">Lorem ipsum dolor sit amet
                        consectetur. Elementum nunc adipiscing ac at. Lectus <br> sed justo imperdiet mauris urna ut
                        accumsan. Faucibus arcu odio aliquam rutrum vel mollis.</p>
                </div>
            </div>
            <div class="container mx-auto pb-8 flex justify-start pl-32 mb-10">
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
    <div class="container mx-auto">
        <div class="grid grid-cols-1 lg:grid-cols-2 bg-gray-100 gap-10 hidden">
            <div class="container ml-52 mx-auto lg:order-first">
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
            <div class="grid grid-cols-1 mr-20 mb-20">
                <div class="flex justify-center lg:justify-start">
                    <p class="pt-20 font-bold text-4xl text-blue animate-right-about active">Lorem Ipsum Dolor Sit Amet
                    </p>
                </div>
                <div class="flex justify-center lg:justify-start">
                    <p class="mb-5 leading-loose px-8 mr-0 lg:mr-8 lg:px-0 animate-right-about active">Lorem ipsum dolor
                        sit amet consectetur. Aliquam leo nunc in amet. Quisque sagittis massa mi parturient. Lacus
                        rutrum
                        ultricies egestas id fusce eget. Consequat enim neque faucibus eget. Mauris pharetra vestibulum
                        interdum tortor. Mi posuere morbi sagittis dis. Pretium integer eget aliquam libero mollis ut
                        amet
                        duis. Lorem ipsum dolor sit amet consectetur. Aliquam leo nunc in amet. Quisque sagittis massa
                        mi
                        parturient. Lacus rutrum ultricies egestas id fusce eget. Consequat enim neque faucibus eget.
                        Mauris
                        pharetra vestibulum interdum tortor. Mi posuere morbi sagittis dis. Pretium integer eget aliquam
                        libero mollis ut amet duis.</p>
                </div>
                <div class="flex">
                    <!-- Counter 1 -->
                    <div class="flex justify-center lg:justify-start mr-4">
                        <div>
                            <p class="font-extrabold text-3xl" style="color: #56B9D9;">35+</p>
                            <p class="text-lg">Lorem ipsum dolor</p>
                        </div>
                    </div>
                    <!-- Counter 2 -->
                    <div class="flex justify-center lg:justify-start mr-4">
                        <div>
                            <p class="font-extrabold text-3xl" style="color: #56B9D9;">100+</p>
                            <p class="text-lg">Lorem ipsum dolor sit</p>
                        </div>
                    </div>
                    <!-- Counter 3 -->
                    <div class="flex justify-center lg:justify-start mr-4">
                        <div>
                            <p class="font-extrabold text-3xl" style="color: #56B9D9;">2K</p>
                            <p class="text-lg">Lorem ipsum dolor</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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
            <div id="fslider" class="mt-10">
                <div class="splide__track">
                    <div class="splide__list flex gap-x-4">
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
                </div>
                <button class="splide-prev">Previous</button>
                <button class="splide-next">Next</button>

            </div>
        </div>




        {{-- <div class="explore-section flex justify-start mt-5">
            <h1 class="font-bold text-4xl">Explore new destinations arround ! </h1>
            <hr class="h-px my-8 bg-dark border-0 dark:bg-gray-700">

        </div> --}}
    </div>

    {{-- full size --}}
    <div class="container">
        <div class="big-explore-section">
            
        </div>
    </div>
    @include('package.footerpack')
    <script>
        // new Splide('#image-slider').mount();
        // var splide = new Splide('#image-slider', {
        //     type: 'fade',
        //     rewind: true,

        // });

        // splide.mount();
    </script>
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

        $(document).ready(function() {
            a();
            var splide = new Splide('#fslider', {
                type: 'loop',
                perPage: 5,
                gap: '1rem',
                pagination: false,
                breakpoints: {
                    768: {
                        perPage: 1
                    }
                }
            }).mount();

            $('.splide-prev').click(function() {
                if (splide.index === 0) {
                    splide.go(splide.length - 1);
                } else {
                    splide.go('-1');
                }
            });

            $('.splide-next').click(function() {
                if (splide.index === splide.length - 1) {
                    splide.go(0);
                } else {
                    splide.go('+1');
                }
            });
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
            // firstslider.mount();
            $('.splide__arrows').hide()
        }
    </script>
</body>

</html>
