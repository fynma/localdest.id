<!DOCTYPE html>
<html lang="en" data-theme="{{ session('user_theme') == 1 ? 'dark' : 'light' }}">
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
        <div class="contact-form-section p-20 ">
            <div class=" flex justify-start mt-5">
                <div class="flex items-center">
                    <hr class="border-t-2 border-figma-textblue w-8 mr-2">
                    <span class="text-figma-textblue font-bold text-xl">Profile</span>
                </div>
            </div>
            <div class="head-section flex items-center gap-5 mt-2">
                <div class="avatar-section mt-2">

                </div>
                <div class="name-section">
                    {{-- <h1 class="text-black font-semibold text-lg">Orang Ilang</h1>
                    <p class="text-gray-500 text-sm">orangilang22@gmail.com</p> --}}
                </div>
            </div>

            <form class="mt-5" name="profile-form" id="profile-form" method="POST" action="javascript:save()"
                enctype="multipart/form-data">
                <div class="grid gap-4 mb-4 grid-cols-2">
                    <div class="col-span-2 sm:col-span-1">
                        <label for="username" class="block mb-2 text-sm font-medium">Name</label>
                        <input type="text" name="username" id="username"
                            class="bg-base-100 border border-gray-200 text-sm focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5  dark:placeholder-gray-400 dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            placeholder="Enter your Name" required="">
                    </div>
                    <div class="col-span-2 sm:col-span-1">
                        <label for="email" class="block mb-2 text-sm font-medium">Email</label>
                        <input type="text" name="email" id="email-form" disabled
                            class="bg-base-100 border border-gray-200 text-sm focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5  dark:placeholder-gray-400 dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            placeholder="Enter your Email" required="">
                    </div>

                    <div class="col-span-2">
                        <label for="telphone" class="block mb-2 text-sm font-medium">Telphone</label>
                        <input type="text" name="telphone" id="telphone"
                            class="bg-base-100 border border-gray-200 text-sm focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5  dark:placeholder-gray-400 dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            placeholder="Enter your Telphone">
                    </div>
                    {{-- <div class="col-span-2">
                        <label for="password"
                            class="block mb-2 text-sm font-medium">Password</label>
                        <input type="password" name="password" id="password"
                            class="bg-base-100 border border-gray-200 text-sm focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5  dark:placeholder-gray-400 dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            placeholder="Enter your password" required="">
                    </div> --}}
                    <input type="file" id="photo-input" name="photo-profile" accept="image/*" style="display: none;">

                </div>
                <div class="flex justify-start mb-5">
                    <button type="submit" id="save-profile"
                        class="text-white hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                        style="background-color: #0B76BC;">
                        Save
                    </button>
                </div>
            </form>
            <div class=" flex justify-start mt-20">
                <div class="flex items-center">
                    <hr class="border-t-2 border-figma-textblue w-8 mr-2">
                    <span class="text-figma-textblue font-bold text-xl">Change Password</span>
                </div>
            </div>
            <form class="mt-5" name="change-password" id="change-password" method="POST" action="javascript:save()">
                <div class="grid gap-4 mb-4 grid-cols-2">
                    <div class="col-span-2">
                        <label for="email" class="block mb-2 text-sm font-medium">Old
                            Password</label>
                        <input type="text" name="email" id="email-form"
                            class="bg-base-100 border border-gray-200 text-sm focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5  dark:placeholder-gray-400 dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            placeholder="Enter your Email" required="">
                    </div>

                    <div class="col-span-2 sm:col-span-1">
                        <label for="telphone" class="block mb-2 text-sm font-medium">New
                            Password</label>
                        <input type="text" name="telphone" id="telphone"
                            class="bg-base-100 border border-gray-200 text-sm focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5  dark:placeholder-gray-400 dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            placeholder="Enter your Telphone">
                    </div>
                    <div class="col-span-2 sm:col-span-1">
                        <label for="telphone" class="block mb-2 text-sm font-medium">Repeat new
                            Password</label>
                        <input type="text" name="telphone" id="telphone"
                            class="bg-base-100 border border-gray-200 text-sm focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5  dark:placeholder-gray-400 dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            placeholder="Enter your Telphone">
                    </div>
                    {{-- <div class="col-span-2">
                        <label for="password"
                            class="block mb-2 text-sm font-medium">Password</label>
                        <input type="password" name="password" id="password"
                            class="bg-base-100 border border-gray-200 text-sm focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5  dark:placeholder-gray-400 dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            placeholder="Enter your password" required="">
                    </div> --}}
                    <input type="file" id="photo-input" name="photo-profile" accept="image/*" style="display: none;">

                </div>
                <div class="flex justify-start mb-5">
                    <button type="submit" disabled
                        class="text-white hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                        style="background-color: #0B76BC;">
                        Change Password
                    </button>
                </div>
            </form>
        </div>
    </div>

    <dialog id="modal_cropper" class="modal">
        <div class="modal-box">
            <form method="dialog">
                <button class="btn btn-sm btn-circle btn-ghost absolute right-2 top-2 close-cropper-modal">✕</button>
            </form>
            <div class="mt-10 cropper-container max-h-[60vh] max-w-[60vw]">
                <img id="cropper-image" src="">
            </div>
            <div class="p-4 border-t flex justify-end space-x-2">
                <button id="crop-button" type="button"
                    class="bg-blue-500 text-white px-4 py-2 rounded">Crop</button>
                <button id="cancel-crop-button" type="button"
                    class="bg-gray-300 text-gray-700 px-4 py-2 rounded">Cancel</button>
            </div>
        </div>
    </dialog>
    {{-- <div id="cropper-modal"
        class="fixed inset-0 h-50 flex items-center justify-center hidden bg-gray-800 bg-opacity-75 z-50 ">
        <div class="bg-base-100 rounded-lg overflow-hidden w-11/12 md:w-2/3 lg:w-1/2 ">
            <div class="p-4 border-b">
                <h2 class="text-lg font-semibold">Crop Image</h2>
            </div>

        </div>
    </div> --}}


    @include('package.penunjang.footer')

    @include('package.footerpack')

    @include('module.user.profile.script')


</body>

</html>
