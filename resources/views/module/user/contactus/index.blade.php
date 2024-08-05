<!DOCTYPE html>
<html lang="en" data-theme="{{session('user_theme') == 1  ? 'dark' : 'light' }}">
@include('package.headerpack')
<title>Localdest - Contact Us</title>
<link rel="icon" type="image/png" href="/storage/vector/logo-localdest.jpg">
<style>
</style>
<script>
    mode = 'light'
</script>

<body>
    @include('package.penunjang.navbar')

    <div class="container mx-auto py-20 ">
        <div class="contact-form-section p-20">
            <div class=" flex justify-start mt-5">
                <div class="flex items-center">
                    <hr class="border-t-2 border-figma-textblue w-8 mr-2">
                    <span class="text-figma-textblue font-bold text-xl">Contact</span>
                </div>
            </div>
            <h1 class="font-bold text-4xl mt-5">
                Contact us and get your questions<br> answered. </h1>
            <form class="mt-5">
                <div class="grid gap-4 mb-4 grid-cols-2">
                    <div class="col-span-2 sm:col-span-1">
                        <label for="username"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Name</label>
                        <input type="text" name="username" id="username"
                            class="bg-white border border-gray-200 text-gray-900 text-sm focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            placeholder="Enter your Name" required="">
                    </div>
                    <div class="col-span-2 sm:col-span-1">
                        <label for="email"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email</label>
                        <input type="email" name="email" id="email"
                            class="bg-white border border-gray-200 text-gray-900 text-sm focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            placeholder="Enter your Email" required="">
                    </div>

                    <div class="col-span-2">
                        <label for="Telphone"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Telphone</label>
                        <input type="text" name="telphone" id="telphone"
                            class="bg-white border border-gray-200 text-gray-900 text-sm focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            placeholder="Enter your Telphone" required="">
                    </div>
                    <div class="col-span-2">
                        <label for="message"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Message</label>
                        <textarea placeholder="Add Message" name="message" id="message" cols="30" rows="10"
                            class="bg-white border border-gray-200 text-gray-900 text-sm focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"></textarea>
                        {{-- <input type="text" name="message" id="message"
                            class="bg-white border border-gray-200 text-gray-900 text-sm focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            placeholder="Re-Enter your Password" required=""> --}}
                    </div>
                </div>
                <div class="flex justify-start mb-5">
                    <button type="submit"
                        class="text-white hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                        style="background-color: #0B76BC;">
                        Send Message
                    </button>
                </div>
            </form>
        </div>
    </div>

    {{-- <div class="maps">
        <div class="maps-section mt-5 relative">
            <div class="">
                <div class="mb-6 h-[536px] sm:p-6" id="inject-leaflet">
                    <div class="banner inset-0 w-[513] h-[536px] bg-indigo-800"></div>
                </div>
            </div>
        </div>
    </div> --}}
    <div class="relative h-[536px]">
        <!-- Maps Section -->
        <div id="inject-leaflet" class="absolute inset-0 z-0">
        </div>
        {{-- inset-0 flex items-center justify-center z-10 w-[513] h-[536px] --}}
        <!-- Content Container on Top of the Map -->
        <div class="absolute ">
            <div class="bg-figma-about-blue text-white p-6 md:p-10 max-w-lg w-[513] h-[536px] mx-32">
                <h2 class="text-2xl font-bold mb-4">Contact Person</h2>
                <p class="mb-4">Lorem ipsum dolor sit amet consectetur. Hendrerit mauris sollicitudin.</p>
                <p class="flex items-center mb-2">
                    <div class="phone mb-10 inline-flex center ">
                        <div class="icon mx-3">
                            <i class="fa fa-phone" style="font-size:18px"></i></div>
                        <div class="teks"> +62 856-9110-1653 <br>
                            <span> Whatsapp - Hubungi sekarang</span>
                        </div>
                        {{-- <h2><i class="fa fa-phone" style="font-size:18px"></i> +62 856-9110-1653</h2>
                        <span> Whatsapp - Hubungi sekarang</span> --}}
                    </div>
                </p>
                <p class="flex items-center mb-2">
                    <div class="mail mb-10 inline-flex center">
                        <div class="icon mx-3">
                            <i class="fa fa-envelope" style="font-size:18px"></i></div>
                        <div class="teks"> localdest@gmail.com <br>
                            <span> Tinggalkan pesan cepat</span>
                        </div>
                        {{-- <h2><i class="fa fa-envelope" style="font-size:18px"></i> localdest@gmail.com</h2>
                        <span> Tinggalkan pesan</span> --}}
                    </div>
                </p>
                <p class="flex items-center">
                    <div class="phone mb-10 inline-flex center">
                        <div class="icon mx-3">
                            <i class="fa fa-map-marker" style="font-size:18px"></i></div>
                        <div class="teks"> Address <br>
                            <span> Jl. Lorem ipsum dolor sit amet consectetur No, 1B Blok C, Kota Malang, Jawa Timur, Indonesia</span>
                        </div>
                        {{-- <h2><i class="fa fa-map-marker" style="font-size:18px"></i> Address</h2>
                        <span> Jl. Lorem ipsum dolor sit amet consectetur No, 1B Blok C, Kota Malang, Jawa Timur, Indonesia</span> --}}
                    </div>
                    {{-- <span class="material-icons mr-2">location_on</span>
                    Address <hr>
                    <span class="ml-2">Jl. Lorem ipsum dolor sit amet consectetur No, 1B Blok C, Kota Malang, Jawa
                        Timur, Indonesia</span> --}}
                </p>
            </div>
        </div>
    </div>
   


    @include('package.penunjang.footer')

    @include('package.footerpack')

    <script>
        $(() => {
            quick.leafletMapShowStatic('inject-leaflet')
        });
    </script>

</body>

</html>
