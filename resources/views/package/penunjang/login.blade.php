<form class="p-4 login-form md:p-5" name="form-login" method="POST" action="javascript:signin()">
    <div class="grid gap-4 mb-4 grid-cols-2">
        <div class="col-span-2">
            <label for="email" class="block mb-2 text-sm font-medium ">Email</label>
            <input type="email" name="email" id="email"
                class="bg-base-100 border border-gray-200  text-sm focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5"
                placeholder="Enter your Email" required="">
        </div>
        <div class="col-span-2">
            <label for="password" class="block mb-2 text-sm font-medium ">Password</label>
            <input type="password" name="password" id="password"
                class="bg-base-100 border border-gray-200  text-sm focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5"
                placeholder="Enter your Password" required="">
        </div>
    </div>
    <div class="flex justify-center mb-5">
        <button type="submit" id="login-account-button"
            class="text-white inline-flex items-center justify-center hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium text-sm px-5 py-2.5 text-center w-1/2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
            style="background-color: #0B76BC;">
            Sign In
        </button>
    </div>

    <div class="flex items-center justify-center mb-5">
        <div class="border-t border-gray-300 w-full"></div>
        <span class="px-3 text-sm font-thin text-gray-400">Or</span>
        <div class="border-t border-gray-300 w-full"></div>
    </div>

    <div class="flex justify-center mb-5">
        <button type="button" onclick="window.location='/authorized/google'"
            class=" inline-flex items-center justify-center bg-base-200 hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-300 font-medium text-sm px-5 py-2.5 text-center w-1/2">
            <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="20" height="20" class="mr-2"
                viewBox="0 0 48 48">
                <path fill="#FFC107"
                    d="M43.611,20.083H42V20H24v8h11.303c-1.649,4.657-6.08,8-11.303,8c-6.627,0-12-5.373-12-12c0-6.627,5.373-12,12-12c3.059,0,5.842,1.154,7.961,3.039l5.657-5.657C34.046,6.053,29.268,4,24,4C12.955,4,4,12.955,4,24c0,11.045,8.955,20,20,20c11.045,0,20-8.955,20-20C44,22.659,43.862,21.35,43.611,20.083z">
                </path>
                <path fill="#FF3D00"
                    d="M6.306,14.691l6.571,4.819C14.655,15.108,18.961,12,24,12c3.059,0,5.842,1.154,7.961,3.039l5.657-5.657C34.046,6.053,29.268,4,24,4C16.318,4,9.656,8.337,6.306,14.691z">
                </path>
                <path fill="#4CAF50"
                    d="M24,44c5.166,0,9.86-1.977,13.409-5.192l-6.19-5.238C29.211,35.091,26.715,36,24,36c-5.202,0-9.619-3.317-11.283-7.946l-6.522,5.025C9.505,39.556,16.227,44,24,44z">
                </path>
                <path fill="#1976D2"
                    d="M43.611,20.083H42V20H24v8h11.303c-0.792,2.237-2.231,4.166-4.087,5.571c0.001-0.001,0.002-0.001,0.003-0.002l6.19,5.238C36.971,39.205,44,34,44,24C44,22.659,43.862,21.35,43.611,20.083z">
                </path>
            </svg>
            Login with Google
        </button>
    </div>
    <div class="flex justify-center mb-5">
        <p class="text-sm">If you don't have an account yet, <button type="button"
                onclick="switchFormRegister(this)"
                class="text-blue-600 dark:text-blue-500 hover:underline">Register</button> now.
        </p>
    </div>
</form>

<script>
    function signin() {
        var form = "form-login";
        var data = new FormData($('[name="' + form + '"]')[0]);
        var button = $('#login-account-button');

        // button.html(
        //     '<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span> Mengirim...');

        button.prop('disabled', true);
        // quick.blockPage()

        axios.post("/auth/login", data, {
                headers: {
                    'X-CSRF-TOKEN': '{{ csrf_token() }}',
                    // 'Content-Type': 'multipart/form-data', // Jangan ditambahkan header ini
                }
            })
            .then(response => {
                // quick.unblockPage()
                if (response.data.success) {
                    button.prop('disabled', false);
                    window.location.reload();
                    quick.customToastNotif({
                        text: response.data.message,
                        icon: 'success',
                        timer: 3000,
                        // callback: function() {
                        //     window.location.reload();
                        // }
                    });
                } else {
                    button.prop('disabled', false);

                    quick.customToastNotif({
                        text: response.data.message,
                        icon: 'error',
                        timer: 5000,
                        // callback: function() {
                        //     window.location.reload()
                        // }
                    });
                }
            })
            .catch(error => {
                button.prop('disabled', false);

                console.error('There has been a problem with your Axios operation:', error.response.data.message);
                quick.customToastNotif({
                    text: error.response.data.message,
                    icon: 'error',
                    timer: 5000,
                    // callback: function() {
                    //     window.location.reload()
                    // }
                });
            });
    }
</script>
