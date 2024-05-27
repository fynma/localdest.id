<!DOCTYPE html>
<html lang="en">
@include('package.headerpack')
<title>gils</title>
<style>
    /* .splide__slide img {
        width: 100%;
        height: auto;
    } */
</style>
<script>
    mode = 'light' // set 'light' untuk perubahan warna dasar navbar
</script>

<body >
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
                            <textarea placeholder="Add Message" name="message" id="message" cols="30" rows="10" class="bg-white border border-gray-200 text-gray-900 text-sm focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"></textarea>
                        {{-- <input type="text" name="message" id="message"
                            class="bg-white border border-gray-200 text-gray-900 text-sm focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            placeholder="Re-Enter your Password" required=""> --}}
                    </div>
                </div>
                <div class="flex justify-start mb-5">
                    <button type="submit"
                        class="rounded-lg text-white hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                        style="background-color: #0B76BC;">
                        Send Message
                    </button>
                </div>
            </form>
        </div>

        {{-- <div class="explore-section flex justify-start mt-5">
            <h1 class="font-bold text-4xl">Explore new destinations arround ! </h1>
            <hr class="h-px my-8 bg-dark border-0 dark:bg-gray-700">

        </div> --}}
    </div>

    @include('package.penunjang.footer')




    @include('package.footerpack')

</body>

</html>
