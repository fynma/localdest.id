<!DOCTYPE html>
<html lang="en">
@include('package.headerpack')
<title>Localdest - Profile</title>
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
                    <span class="text-figma-textblue font-bold text-xl">Profile</span>
                </div>
            </div>
            <div class="head-section flex items-center gap-5">
                <div class="avatar-section mt-2">
                    <div class="relative">
                        <img class="w-24 h-24 rounded-full object-cover" src="/storage/photo-profile/orangilang.jpg"
                            alt="">
                        <span
                            class="absolute top-0 left-16 flex items-center justify-center w-8 h-8 bg-figma-btn-blue border-2 border-white dark:border-gray-800 rounded-full z-10 cursor-pointer">
                            <svg xmlns="http://www.w3.org/2000/svg" width="1.2rem" height="1.2rem" viewBox="0 0 24 24">
                                <path fill="#fff"
                                    d="M20.71 7.04c.39-.39.39-1.04 0-1.41l-2.34-2.34c-.37-.39-1.02-.39-1.41 0l-1.84 1.83l3.75 3.75M3 17.25V21h3.75L17.81 9.93l-3.75-3.75z" />
                            </svg>
                        </span>
                    </div>
                </div>
                <div class="name-section">
                    <h1 class="text-black font-semibold text-lg">Orang Ilang</h1>
                    <p class="text-gray-500 text-sm">orangilang22@gmail.com</p>
                </div>
            </div>

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
                        <label for="password"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Password</label>
                        <input type="password" name="password" id="password"
                            class="bg-white border border-gray-200 text-gray-900 text-sm focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            placeholder="Enter your password" required="">
                    </div>
                </div>
                <div class="flex justify-start mb-5">
                    <button type="submit"
                        class="text-white hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                        style="background-color: #0B76BC;">
                        Save
                    </button>
                </div>
            </form>
        </div>
    </div>




    @include('package.penunjang.footer')

    @include('package.footerpack')

    @include('module.user.profile.script')


</body>

</html>
