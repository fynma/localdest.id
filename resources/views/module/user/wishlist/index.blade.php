<!DOCTYPE html>
<html lang="en">
@include('package.headerpack')
<title>Localdest - Wishlist</title>
<link rel="icon" type="image/png" href="/storage/vector/logo-localdest.jpg">
<style>
</style>
<script>
    mode = 'light'
</script>

<body>
    @include('package.penunjang.navbar')
    <div class="container mx-auto flex justify-center py-20">


        <div class="title-section mt-20">
            <div class="text-black text-4xl">
                <h1 class="text-center font-poppins font-bold leading-relaxed lg:text-center">
                    Discover Your Destination Dreams
                </h1>
            </div>
            <div class="p-sec mt-8 text-center lg:text-center">
                <p>
                    Lorem ipsum dolor sit amet consectetur. In senectus ultricies viverra faucibus tristique lobortis.
                    Adipiscing porttitor pellentesque suspendisse adipiscing dis semper. In ornare ac sit commodo.
                    Tortor odio egestas non etiam.
                </p>
            </div>
            <div class="input-container mt-5 mb-5 flex justify-center">

                <label for="default-search"
                    class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
                <div class="relative">
                    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                        <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"></path>
                        </svg>
                    </div>
                    <input type="search" id="search-bar" autocomplete="off"
                        class="block w-full pl-10 pr-4 py-2 text-sm text-gray-900 bg-white border-0 border-b-2 border-gray-300 focus:ring-0 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:border-blue-500"
                        placeholder="Search Destination..." required="">
                    <div class="bg-white border w-100 absolute container mx-auto p-4 pt-2 mt-2 z-10"
                        style="display: none;">
                        <div class="search-by-tag">
                            <span>Search By Popular Tags</span>
                            <div class="list-tag">
                                <div class="p-1 tag mt-2 flex justify-between hover:bg-gray-50 cursor-pointer">
                                    <span class="tag-value">#Tumpang</span>
                                    <span class="text-gray-400">3 Post</span>
                                </div>
                                <div class="p-1 tag mt-2 flex justify-between hover:bg-gray-50 cursor-pointer">
                                    <span class="tag-value">#Fyp_-</span>
                                    <span class="text-gray-400">2 Post</span>
                                </div>
                                <div class="p-1 tag mt-2 flex justify-between hover:bg-gray-50 cursor-pointer">
                                    <span class="tag-value">#Malang</span>
                                    <span class="text-gray-400">2 Post</span>
                                </div>
                                <div class="p-1 tag mt-2 flex justify-between hover:bg-gray-50 cursor-pointer">
                                    <span class="tag-value">#aaa</span>
                                    <span class="text-gray-400">1 Post</span>
                                </div>
                                <div class="p-1 tag mt-2 flex justify-between hover:bg-gray-50 cursor-pointer">
                                    <span class="tag-value">#Kopian</span>
                                    <span class="text-gray-400">1 Post</span>
                                </div>
                                <div class="p-1 tag mt-2 flex justify-between hover:bg-gray-50 cursor-pointer">
                                    <span class="tag-value">#Cafe</span>
                                    <span class="text-gray-400">1 Post</span>
                                </div>
                                <div class="p-1 tag mt-2 flex justify-between hover:bg-gray-50 cursor-pointer">
                                    <span class="tag-value">#Batu</span>
                                    <span class="text-gray-400">1 Post</span>
                                </div>
                                <div class="p-1 tag mt-2 flex justify-between hover:bg-gray-50 cursor-pointer">
                                    <span class="tag-value">#Paralayang</span>
                                    <span class="text-gray-400">1 Post</span>
                                </div>
                            </div>
                        </div>
                    </div>
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
                                <div class="p-1 tag mt-2 flex justify-between hover:bg-gray-50 cursor-pointer">
                                    <span>#Tumpang</span>
                                    <span class="text-gray-400">200 Post</span>
                                </div>
                                <div class="p-1 tag mt-2 flex justify-between hover:bg-gray-50 cursor-pointer">
                                    <span>#Tumpang</span>
                                    <span class="text-gray-400">200 Post</span>
                                </div>
                                <div class="p-1 tag mt-2 flex justify-between hover:bg-gray-50 cursor-pointer">
                                    <span>#Tumpang</span>
                                    <span class="text-gray-400">200 Post</span>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class="bg-gray-100 flex items-center justify-center min-h-screen">
        <div class="relative w-80">
            <!-- Background card 1 -->
            <div class="absolute bg-white rounded-lg shadow-lg transform translate-x-2 w-full h-full"></div>
            <!-- Background card 2 -->
            <div class="absolute bg-white rounded-lg shadow-lg transform translate-x-4 w-full h-full"></div>
            <!-- Main card -->
            <div class="relative bg-white rounded-lg shadow-lg overflow-hidden">
                <img src="storage/wisata/bromo.png" alt="Kawah Bromo" class="w-full h-48 object-cover">
                <div class="p-4 bg-gradient-to-t from-black to-transparent absolute bottom-0 w-full">
                    <h2 class="text-lg font-bold text-white">Kawah Bromo</h2>
                    <p class="text-white text-sm">Lorem ipsum dolor sit amet consectetur. Egestas nisi orci urna cursus sed mala sit.</p>
                    <a href="#" class="text-white mt-2 inline-block">→</a>
                </div>
            </div>
            <div class="mt-2 text-gray-700">12 Januari 2024</div>
        </div>
    </div>
    @include('package.penunjang.footer')

    @include('package.footerpack')



</body>

</html>
