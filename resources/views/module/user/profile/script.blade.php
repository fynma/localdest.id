<script>
    APP_URL = "{{ getenv('APP_URL') }}/";

    $(() => {

        init();
        // $('.menu-link').removeClass('active');
        // $('.dashboard').addClass('active');
    });

    init = async () => {
        await index();
    }

    function index() {
        axios.post(APP_URL + 'profile/index', {
                _token: '{{ csrf_token() }}',
            })
            .then(function(response) {
                let data = response.data;
                let nameSection = `<h1 class="font-semibold text-lg">${data.name}</h1>
                    <p class="text-gray-500 text-sm">${data.email}</p>`;
                $('.name-section').html(nameSection)
                let photo = ``;

                if (data.photo) {
                    photo = `<div class="relative">
                        <img class="w-24 h-24 rounded-full object-cover" src="/storage/photo-profile/${data.photo}"
                            alt="">
                        <span onclick="changePhoto()"
                            class=" absolute top-0 left-16 flex items-center justify-center w-8 h-8 bg-figma-btn-blue border-2 border-white rounded-full z-10 cursor-pointer">
                            <svg xmlns="http://www.w3.org/2000/svg" width="1.2rem" height="1.2rem" viewBox="0 0 24 24">
                                <path fill="#fff"
                                    d="M20.71 7.04c.39-.39.39-1.04 0-1.41l-2.34-2.34c-.37-.39-1.02-.39-1.41 0l-1.84 1.83l3.75 3.75M3 17.25V21h3.75L17.81 9.93l-3.75-3.75z" />
                            </svg>
                        </span>
                    </div>`;
                } else {
                    photo = `<div class="relative">
                        <img class="w-24 h-24 rounded-full object-cover" src="/storage/photo-profile/blank.webp"
                            alt="">
                        <span onclick="changePhoto()"
                            class="change-clicker absolute top-0 left-16 flex items-center justify-center w-8 h-8 bg-figma-btn-blue border-2 border-white rounded-full z-10 cursor-pointer">
                            <svg xmlns="http://www.w3.org/2000/svg" width="1.2rem" height="1.2rem" viewBox="0 0 24 24">
                                <path fill="#fff"
                                    d="M20.71 7.04c.39-.39.39-1.04 0-1.41l-2.34-2.34c-.37-.39-1.02-.39-1.41 0l-1.84 1.83l3.75 3.75M3 17.25V21h3.75L17.81 9.93l-3.75-3.75z" />
                            </svg>
                        </span>
                    </div>`;
                }
                $('.avatar-section').html(photo)
                $('#username').val(data.name)
                $('#email-form').val(data.email)
                $('#telphone').val(data.num_telp)
            })
            .catch(function(error) {
                console.error('Ada masalah dalam mengambil data:', error);
            });
    }

    let cropper;

    function updatePhoto(src) {
        const photo = `<div class="relative">
            <img class="w-24 h-24 rounded-full object-cover" src="${src}" alt="">
            <span onclick="changePhoto()" class="absolute top-0 left-16 flex items-center justify-center w-8 h-8 bg-figma-btn-blue border-2 border-white dark:border-gray-800 rounded-full z-10 cursor-pointer">
                <svg xmlns="http://www.w3.org/2000/svg" width="1.2rem" height="1.2rem" viewBox="0 0 24 24">
                    <path fill="#fff"
                        d="M20.71 7.04c.39-.39.39-1.04 0-1.41l-2.34-2.34c-.37-.39-1.02-.39-1.41 0l-1.84 1.83l3.75 3.75M3 17.25V21h3.75L17.81 9.93l-3.75-3.75z" />
                </svg>
            </span>
        </div>`;
        $('.avatar-section').html(photo);

    }
    // updatePhoto('/storage/photo-profile/orangilang.jpg');
    function changePhoto() {
        $('#photo-input').click();
    }
    $('#photo-input').on('change', function(event) {
        const file = event.target.files[0];
        if (file) {
            const reader = new FileReader();
            reader.onload = function(e) {
                $('#cropper-image').attr('src', e.target.result);
                modal_cropper.showModal()
                // Hancurkan instance cropper jika ada
                if (cropper) {
                    cropper.destroy();
                }

                // Inisialisasi cropper
                cropper = new Cropper(document.getElementById('cropper-image'), {
                    aspectRatio: 1,
                    viewMode: 1
                });
            };
            reader.readAsDataURL(file);
        }
    });

    // Event listener untuk tombol crop
    $('#crop-button').on('click', function() {
        if (cropper) {
            const canvas = cropper.getCroppedCanvas();
            const croppedImageSrc = canvas.toDataURL('image/png');
            updatePhoto(croppedImageSrc);
            cropper.destroy();
            cropper = null;
            $('.close-cropper-modal').click();
        }
    });

    // Event listener untuk tombol cancel crop
    $('#cancel-crop-button').on('click', function() {
        if (cropper) {
            cropper.destroy();
            cropper = null;
        }
        $('.close-cropper-modal').click();
    });

    function save() {
        var form = "profile-form";
        var data = new FormData($('[name="' + form + '"]')[0]);
        var button = $('#save-profile');

        // button.html(
        //     '<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span> Mengirim...');

        button.prop('disabled', true);
        // quick.blockPage()

        axios.post("/profile/save", data, {
                headers: {
                    'X-CSRF-TOKEN': '{{ csrf_token() }}',
                    // 'Content-Type': 'multipart/form-data', // Jangan ditambahkan header ini
                }
            })
            .then(response => {
                // quick.unblockPage()
                if (response.data.success) {
                    button.prop('disabled', false);

                    quick.toastNotif({
                        title: response.data.message,
                        icon: 'success',
                        timer: 1500,
                        callback: function() {
                            window.location.href = `/profile`;
                        }
                    });
                } else {
                    button.prop('disabled', false);

                    quick.toastNotif({
                        title: response.data.message,
                        icon: 'error',
                        timer: 3000,
                        // callback: function() {
                        //     window.location.reload()
                        // }
                    });
                }
            })
            .catch(error => {
                button.prop('disabled', false);

                console.error('There has been a problem with your Axios operation:', error.response.data
                    .message);
                quick.toastNotif({
                    title: error.response.data.message,
                    icon: 'error',
                    timer: 3000,
                    // callback: function() {
                    //     window.location.reload()
                    // }
                });
            });
    }
</script>
