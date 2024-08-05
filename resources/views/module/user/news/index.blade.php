<!DOCTYPE html>
<html lang="en" data-theme="{{session('user_theme') == 1  ? 'dark' : 'light' }}">

<head>
    @include('package.headerpack')
    <title>Localdest - News</title>
    <link rel="icon" type="image/png" href="/storage/vector/logo-localdest.jpg">    <style>
        .hidden-scrollbar::-webkit-scrollbar {
            display: none;
        }

        .hidden-scrollbar {
            -ms-overflow-style: none;
            scrollbar-width: none;
        }

        .splide__slide {
            flex: 0 0 auto;
            /* Prevent flex-grow */
            width: 300px;
            /* Ensure each slide has a fixed width */
            box-sizing: border-box;
            /* Ensure padding and border are included in width */
        }

        .splide__track {
            display: flex;
            gap: 16px;
            /* Adjust the gap as needed */
        }

        .photo-container img {
            object-fit: cover;
            /* Ensure the image covers the container */
        }
    </style>
</head>

<body>
    @include('package.penunjang.navbar')


    <section id="hero-section" class="relative" style="">
        <img src="/storage/bromo.png" alt="" class="w-screen h-screen">

        <div class="absolute inset-0 bg-black bg-opacity-40 p-4 pb-0 pl-32   lg-bigger:pt-20 flex items-center">
            <div class="container mx-auto flex items-center justify-between" style="margin-top: auto">
                <div class="text-white text-4xl mb-20">
                    <h1 class="font-poppins font-bold leading-relaxed">
                        Explore the World's Best <br>
                        <span>Travel Destinations</span>
                    </h1>
                </div>
                <div class="text-white w-1/2 mt-12 mb-20">
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
            <div class="text-black mr-20 text-4xl">
                <h1 class="font-poppins font-bold leading-relaxed">
                    Latest News
                </h1>
            </div>
            <div id="fslider" class="mt-10 relative">
                <div class="splide__track overflow-x-auto flex gap-x-4">
                    <!-- Slide 1 -->
                    <div class="splide__slide relative flex-none transform transition-transform duration-300">
                        <div class="photo-container h-80 w-full relative cursor-pointer center">
                            <div class="absolute inset-0 bg-black bg-opacity-50 rounded-xl"></div>
                            <img src="storage/wisata/bromo.png" alt="Kawah Bromo"
                                class="w-full h-full object-cover rounded-xl">
                        </div>
                        <div class="title max-w-72 text-xl">
                            Lorem ipsum dolor sit amet consectetur. In sed egestas odio quis augue.
                        </div>
                        <div class="date max-w-72 text-sm">
                            February, 13th 2024 | By Sheila Rahma
                        </div>
                    </div>
                    <!-- Slide 2 -->
                    <div class="splide__slide relative flex-none transform transition-transform duration-300">
                        <div class="photo-container h-80 w-full relative cursor-pointer center">
                            <div class="absolute inset-0 bg-black bg-opacity-50 rounded-xl"></div>
                            <img src="storage/wisata/airterjun.png" alt="Kawah Bromo"
                                class="w-full h-full object-cover rounded-xl">
                        </div>
                        <div class="title max-w-72 text-xl">
                            Lorem ipsum dolor sit amet consectetur. In sed egestas odio quis augue.
                        </div>
                        <div class="date max-w-72 text-sm">
                            February, 13th 2024 | By Sheila Rahma
                        </div>
                    </div>
                    <!-- Slide 1 -->
                    <div class="splide__slide relative flex-none transform transition-transform duration-300">
                        <div class="photo-container h-80 w-full relative cursor-pointer center">
                            <div class="absolute inset-0 bg-black bg-opacity-50 rounded-xl"></div>
                            <img src="storage/wisata/bromo.png" alt="Kawah Bromo"
                                class="w-full h-full object-cover rounded-xl">
                        </div>
                        <div class="title max-w-72 text-xl">
                            Lorem ipsum dolor sit amet consectetur. In sed egestas odio quis augue.
                        </div>
                        <div class="date max-w-72 text-sm">
                            February, 13th 2024 | By Sheila Rahma
                        </div>
                    </div>
                    <!-- Slide 2 -->
                    <div class="splide__slide relative flex-none transform transition-transform duration-300">
                        <div class="photo-container h-80 w-full relative cursor-pointer center">
                            <div class="absolute inset-0 bg-black bg-opacity-50 rounded-xl"></div>
                            <img src="storage/wisata/orangilang.jpg" alt="Kawah Bromo"
                                class="w-full h-full object-cover rounded-xl">
                        </div>
                        <div class="title max-w-72 text-xl">
                            Lorem ipsum dolor sit amet consectetur. In sed egestas odio quis augue.
                        </div>
                        <div class="date max-w-72 text-sm">
                            February, 13th 2024 | By Sheila Rahma
                        </div>
                    </div>
                    <!-- Slide 1 -->
                    <div class="splide__slide relative flex-none transform transition-transform duration-300">
                        <div class="photo-container h-80 w-full relative cursor-pointer center">
                            <div class="absolute inset-0 bg-black bg-opacity-50 rounded-xl"></div>
                            <img src="storage/wisata/bromo.png" alt="Kawah Bromo"
                                class="w-full h-full object-cover rounded-xl">
                        </div>
                        <div class="title max-w-72 text-xl">
                            Lorem ipsum dolor sit amet consectetur. In sed egestas odio quis augue.
                        </div>
                        <div class="date max-w-72 text-sm">
                            February, 13th 2024 | By Sheila Rahma
                        </div>
                    </div>
                    <!-- Slide 2 -->
                    <div class="splide__slide relative flex-none transform transition-transform duration-300">
                        <div class="photo-container h-80 w-full relative cursor-pointer center">
                            <div class="absolute inset-0 bg-black bg-opacity-50 rounded-xl"></div>
                            <img src="storage/wisata/orangilang.jpg" alt="Kawah Bromo"
                                class="w-full h-full object-cover rounded-xl">
                        </div>
                        <div class="title max-w-72 text-xl">
                            Lorem ipsum dolor sit amet consectetur. In sed egestas odio quis augue.
                        </div>
                        <div class="date max-w-72 text-sm">
                            February, 13th 2024 | By Sheila Rahma
                        </div>
                    </div>
                    <!-- Tambahkan slide lain sesuai kebutuhan -->
                </div>
                <!-- Tombol Navigasi -->
                <div class="flex justify-center mt-4 center">
                    <button id="prev" class="p-2 bg-white rounded-full shadow mx-2">
                        <svg class="w-6 h-6 text-black" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7">
                            </path>
                        </svg>
                    </button>
                    <button id="next" class="p-2 bg-white rounded-full shadow mx-2">
                        <svg class="w-6 h-6 text-black" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7">
                            </path>
                        </svg>
                    </button>
                    <div class="garis w-2/4 mt-4">
                        <div class="h-1 bg-gray-300 relative">
                            <div class="progress-bar-fill h-full bg-blue-500"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="all-news">
            <div class="text-black mr-20 text-4xl">
                <h1 class="font-poppins font-bold leading-relaxed">
                    All News
                </h1>
            </div>
            <div class="listing-wisata-pagination">
                <div class="listing-wisata-1 mb-5">
                    <div class="flex gap-x-4">
                        <div class="relative mt-5 mb-5">
                            <div class="photo-container h-48 w-72 relative cursor-pointer">
                                <div class="absolute inset-0 bg-black bg-opacity-50  rounded-xl"></div>
                                <img src="storage/wisata/bromo.png" alt="Photo 1"
                                    class="w-auto h-full object-cover rounded-xl">
                            </div>
                            <div class="title max-w-72 text-xl mt-5 mb-5">
                                Lorem ipsum dolor
                            </div>
                            <div class="date max-w-72 text-sm">
                                February, 13th 2024 | By Sheila Rahma
                            </div>
                        </div>

                        <div class="relative mt-5 mb-5">
                            <div class="photo-container h-48 w-72 relative cursor-pointer">
                                <div class="absolute inset-0 bg-black bg-opacity-50 rounded-xl"></div>
                                <img src="storage/wisata/airterjun.png" alt="Photo 2"
                                    class="w-full h-full object-cover rounded-xl">
                            </div>
                            <div class="title max-w-72 text-xl mt-5 mb-5">
                                Lorem ipsum dolor
                            </div>
                            <div class="date max-w-72 text-sm">
                                February, 13th 2024 | By Sheila Rahma
                            </div>
                        </div>
                        <div class="relative mt-5 mb-5">
                            <div class="photo-container h-48 w-72 relative cursor-pointer">
                                <div class="absolute inset-0 bg-black bg-opacity-50 rounded-xl"></div>
                                <img src="storage/wisata/pantai.png" alt="Photo 3"
                                    class="w-full h-full object-cover rounded-xl">
                            </div>
                            <div class="title max-w-72 text-xl mt-5 mb-5">
                                Lorem ipsum dolor
                            </div>
                            <div class="date max-w-72 text-sm">
                                February, 13th 2024 | By Sheila Rahma
                            </div>
                        </div>
                        <div class="relative mt-5 mb-5">
                            <div class="photo-container h-48 w-72 relative cursor-pointer">
                                <div class="absolute inset-0 bg-black bg-opacity-50 rounded-xl"></div>
                                <img src="storage/wisata/danau.png" alt="Photo 3"
                                    class="w-full h-full object-cover rounded-xl">
                            </div>
                            <div class="title max-w-72 text-xl mt-5 mb-5">
                                Lorem ipsum dolor
                            </div>
                            <div class="date max-w-72 text-sm">
                                February, 13th 2024 | By Sheila Rahma
                            </div>
                        </div>
                    </div>
                </div>
                <div class="listing-wisata-2 mb-5">
                    <div class="flex gap-x-4">
                        <div class="relative mt-5 mb-5">
                            <div class="photo-container h-48 w-72 relative cursor-pointer">
                                <div class="absolute inset-0 bg-black bg-opacity-50  rounded-xl"></div>
                                <img src="storage/wisata/bromo.png" alt="Photo 1"
                                    class="w-auto h-full object-cover rounded-xl">
                            </div>
                            <div class="title max-w-72 text-xl mt-5 mb-5">
                                Lorem ipsum dolor
                            </div>
                            <div class="date max-w-72 text-sm">
                                February, 13th 2024 | By Sheila Rahma
                            </div>
                        </div>

                        <div class="relative mt-5 mb-5">
                            <div class="photo-container h-48 w-72 relative cursor-pointer">
                                <div class="absolute inset-0 bg-black bg-opacity-50 rounded-xl"></div>
                                <img src="storage/wisata/airterjun.png" alt="Photo 2"
                                    class="w-full h-full object-cover rounded-xl">
                            </div>
                            <div class="title max-w-72 text-xl mt-5 mb-5">
                                Lorem ipsum dolor
                            </div>
                            <div class="date max-w-72 text-sm">
                                February, 13th 2024 | By Sheila Rahma
                            </div>
                        </div>
                        <div class="relative mt-5 mb-5">
                            <div class="photo-container h-48 w-72 relative cursor-pointer">
                                <div class="absolute inset-0 bg-black bg-opacity-50 rounded-xl"></div>
                                <img src="storage/wisata/pantai.png" alt="Photo 3"
                                    class="w-full h-full object-cover rounded-xl">
                            </div>
                            <div class="title max-w-72 text-xl mt-5 mb-5">
                                Lorem ipsum dolor
                            </div>
                            <div class="date max-w-72 text-sm">
                                February, 13th 2024 | By Sheila Rahma
                            </div>
                        </div>
                        <div class="relative mt-5 mb-5">
                            <div class="photo-container h-48 w-72 relative cursor-pointer">
                                <div class="absolute inset-0 bg-black bg-opacity-50 rounded-xl"></div>
                                <img src="storage/wisata/danau.png" alt="Photo 3"
                                    class="w-full h-full object-cover rounded-xl">
                            </div>
                            <div class="title max-w-72 text-xl mt-5 mb-5">
                                Lorem ipsum dolor
                            </div>
                            <div class="date max-w-72 text-sm">
                                February, 13th 2024 | By Sheila Rahma
                            </div>
                        </div>
                    </div>
                </div>

                <nav aria-label="Page navigation example mb-5">
                    <ul class="flex -space-x-px text-base h-10 justify-center">
                        <li>
                            <a href="#"
                                class="flex items-center justify-center px-4 h-10 ms-0 leading-tight text-gray-500 bg-white border border-e-0 border-gray-300 rounded-s-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">Previous</a>
                        </li>
                        <li>
                            <a href="#"
                                class="flex items-center justify-center px-4 h-10 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">1</a>
                        </li>
                        <li>
                            <a href="#"
                                class="flex items-center justify-center px-4 h-10 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">2</a>
                        </li>
                        <li>
                            <a href="#" aria-current="page"
                                class="flex items-center justify-center px-4 h-10 text-blue-600 border border-gray-300 bg-blue-50 hover:bg-blue-100 hover:text-blue-700 dark:border-gray-700 dark:bg-gray-700 dark:text-white">3</a>
                        </li>
                        <li>
                            <a href="#"
                                class="flex items-center justify-center px-4 h-10 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">4</a>
                        </li>
                        <li>
                            <a href="#"
                                class="flex items-center justify-center px-4 h-10 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">5</a>
                        </li>
                        <li>
                            <a href="#"
                                class="flex items-center justify-center px-4 h-10 leading-tight text-gray-500 bg-white border border-gray-300 rounded-e-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">Next</a>
                        </li>
                    </ul>
                </nav>

            </div>
        </div>
    </div>

    @include('package.penunjang.footer')
    @include('package.footerpack')

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const sliderTrack = document.querySelector('.splide__track');
            const slides = document.querySelectorAll('.splide__slide');
            const prevButton = document.getElementById('prev');
            const nextButton = document.getElementById('next');
            const progressBarFill = document.querySelector('.progress-bar-fill');
            let index = 0;

            function updateSliderPosition() {
                const slideWidth = slides[0].offsetWidth; // Width of the slide
                const gap = parseInt(getComputedStyle(sliderTrack).gap); // Gap between slides
                sliderTrack.scrollTo({
                    left: index * (slideWidth + gap), // Including the gap
                    behavior: 'smooth'
                });
                updateProgressBar();
            }

            function updateProgressBar() {
                const totalSlides = slides.length;
                const progress = ((index + 1) / totalSlides) * 100; // Calculate progress percentage
                progressBarFill.style.width = `${progress}%`; // Update progress bar width
            }

            prevButton.addEventListener('click', function() {
                if (index > 0) {
                    index--;
                    updateSliderPosition();
                }
            });

            nextButton.addEventListener('click', function() {
                if (index < slides.length - 1) {
                    index++;
                    updateSliderPosition();
                }
            });

            updateSliderPosition();
        });

        // document.addEventListener('DOMContentLoaded', function() {
        //     const sliderTrack = document.querySelector('.splide__track');
        //     const slides = document.querySelectorAll('.splide__slide');
        //     const prevButton = document.getElementById('prev');
        //     const nextButton = document.getElementById('next');
        //     const progressBarFill = document.querySelector('.progress-bar-fill');
        //     let index = 0;

        //     function updateSliderPosition() {
        //         const slideWidth = slides[0].offsetWidth + parseInt(getComputedStyle(sliderTrack)
        //         .columnGap); // Including the gap
        //         sliderTrack.scrollTo({
        //             left: index * slideWidth,
        //             behavior: 'smooth'
        //         });
        //         updateProgressBar();
        //     }

        //     function updateProgressBar() {
        //         const totalSlides = slides.length;
        //         const progress = ((index + 1) / totalSlides) * 100; // Calculate progress percentage
        //         progressBarFill.style.width = `${progress}%`; // Update progress bar width
        //     }

        //     prevButton.addEventListener('click', function() {
        //         if (index > 0) {
        //             index--;
        //             updateSliderPosition();
        //         }
        //     });

        //     nextButton.addEventListener('click', function() {
        //         if (index < slides.length - 1) {
        //             index++;
        //             updateSliderPosition();
        //         }
        //     });

        //     updateSliderPosition();
        // });



        // const slider = document.querySelector('.splide__track');
        // const slides = document.querySelectorAll('.splide__slide');
        // const prev = document.getElementById('prev');
        // const next = document.getElementById('next');

        // let currentIndex = 0;

        // function updateSlider() {
        //     slides.forEach((slide, index) => {
        //         slide.style.transform = `scale(${index === currentIndex ? 1.1 : 1})`;
        //     });
        // }

        // next.addEventListener('click', () => {
        //     if (currentIndex < slides.length - 1) {
        //         currentIndex++;
        //         slider.scrollBy({
        //             left: 300,
        //             behavior: 'smooth'
        //         });
        //         updateSlider();
        //     }
        // });

        // prev.addEventListener('click', () => {
        //     if (currentIndex > 0) {
        //         currentIndex--;
        //         slider.scrollBy({
        //             left: -300,
        //             behavior: 'smooth'
        //         });
        //         updateSlider();
        //     }
        // });

        // updateSlider();
    </script>
</body>

</html>
