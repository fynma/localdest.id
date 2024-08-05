<!DOCTYPE html>
<html lang="en" data-theme="{{ session('user_theme') == 1 ? 'dark' : 'light' }}">
@include('package.headerpack')
<title>Localdest - Created Destination</title>
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
    mode = 'light' // set 'light' untuk perubahan warna dasar navbar
</script>

<body>
    @include('package.penunjang.navbar')

    <div class="container container-post mx-auto p-4 py-20">

        <div class="findbest-section mt-20" id="destination-show-section">
            <div class=" flex justify-start mt-5">
                <div class="flex items-center">
                    <hr class="border-t-2 border-figma-textblue w-8 mr-2">
                    <span class="text-figma-textblue font-bold text-xl">Post</span>
                </div>
            </div>
            <div class="md:flex md:gap-2 justify-between">
                <div class="card-section w-full mx-auto mt-5 lg:ml-5" id="destination-show-section">

                    <div class="flex items-center w-full">
                        <label for="simple-search" class="sr-only">Search</label>
                        <div class="relative w-full">
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
                            </div>
                            <div class="flex justify-center not-found"></div>
                            <div
                                class="listing-wisata-pagination mt-8 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-4 gap-12">
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

                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-form container mx-auto p-4 py-20 hidden">
        @include('module.user.user-destination.update')
    </div>
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
    @include('module.user.user-destination.script')

</body>

</html>
