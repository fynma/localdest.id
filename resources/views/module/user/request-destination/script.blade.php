<script>
    APP_URL = "{{ getenv('APP_URL') }}/";

    $(document).ready(function() {
        quick.leafletMapSelector('maps-selector', '#inp-latitude', '#inp-longitude')

        quick.getProvince('province');
        $('.selection').addClass(
            'bg-white border border-gray-200 text-gray-900 text-sm focus:ring-primary-600 focus:border-primary-600 block w-full p-2 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500'
        );

        //     changeClass: function() {
        //     console.log('ganti')
        init()
        // },
    });
    init = async () => {
        await quick.getProvince('province')

        await loadTag()
    }

    let fileCount = 0;
    let selectedFiles = [];
    $('#addTag').on('click', function() {
        var newTag = $('#newTag').val();
        if (newTag) {
            var newOption = new Option(newTag, newTag, true, true);
            $('#tag').append(newOption).trigger('change');
            $('#newTag').val('');
        }
    });
    $('#fileattch').change(function(event) {
        const files = event.target.files;
        for (let i = 0; i < files.length; i++) {
            const file = files[i];
            const fileId = 'file-' + fileCount++;
            const fileDate = new Date();

            $('#file-list').append(`
            <div class="file-item flex justify-between items-center bg-white mt-2 p-4 rounded-lg" id="${fileId}">
                <svg xmlns="http://www.w3.org/2000/svg" width="2em" height="2em" viewBox="0 0 24 24"><path fill="#98A2B3" d="M13 9V3.5L18.5 9M6 2c-1.11 0-2 .89-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8l-6-6z"/></svg>
                <div class="flex-1 ml-5">
                    <span class="text-blue-600">${file.name}</span>
                    <br>
                    <span class="text-gray-500 text-sm">${(file.size / 1024 / 1024).toFixed(2)} MB</span>
                </div>
                <div class="flex-1 ml-4 flex justify-end items-center">
                    <div class="flex-1">
                        <div class="flex items-center">
                            <span class="text-gray-400 text-sm me-2" id="progress-text-${fileId}">0%</span>
                            <div class="flex progress-container border h-3 p-0.5 rounded-lg w-full items-center">
                                <div class="progress-bar bg-blue-500 h-2 rounded" id="progress-${fileId}" style="width: 0%;"></div>
                            </div>
                        </div>
                    </div>
                    <button class="ml-4 text-red-500 bg-red-50 p-1 rounded" aria-label="Close" onclick="removeFile('${fileId}')">
                        <svg xmlns="http://www.w3.org/2000/svg" width="1.2em" height="1.2em" viewBox="0 0 20 20">
                            <path fill="#F04438" d="m6 2l2-2h4l2 2h4v2H2V2zM3 6h14l-1 14H4zm5 2v10h1V8zm3 0v10h1V8z"/>
                        </svg>
                    </button>
                </div>
            </div>
        `);

            simulateUpload(fileId, file, fileDate);
        }
        updateFileCount();

        // Reset the file input value to ensure change event triggers correctly
        $(this).val('');
    });

    function removeFile(fileId) {

        $('#' + fileId).remove();
        // Perbarui jumlah file
        updateFileCount();
        // let fileIdNum = parseInt(fileId.split('-')[1]);
        console.log('Target nya itu ini' + fileId + 'nah yang kehapus dibawah kok beda anjer')
        // console.log(selectedFiles.splice(fileId, 1))
        const index = selectedFiles.findIndex(file => file.id === fileId);

        // Hapus file dari array jika ditemukan
        if (index !== -1) {
            selectedFiles.splice(index, 1);
        }
        // console.log(selectedFiles.filter(file => file.id == fileId))

        // console.log(selectedFiles.splice(file => file.id === fileId, 1))


    };

    function updateFileCount() {
        $('#file-count').text($('#file-list .file-item').length + ' Files');
    }

    function simulateUpload(fileId, file, fileDate) {
        let progress = 0;
        file.id = fileId;
        selectedFiles.push(file);

        // console.log(fileDate)
        const interval = setInterval(() => {
            if (progress >= 100) {
                clearInterval(interval);
                $(`#${fileId}`).html(`
                <svg xmlns="http://www.w3.org/2000/svg" width="2em" height="2em" viewBox="0 0 24 24"><path fill="#98A2B3" d="M13 9V3.5L18.5 9M6 2c-1.11 0-2 .89-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8l-6-6z"/></svg>
                <div class="flex-1 ml-5">
                    <span class="text-blue-600">${file.name}</span>
                    <br>
                    <span class="text-gray-500 text-sm">${(file.size / 1024 / 1024).toFixed(2)} MB</span>
                </div>
                <div class="flex-1 ml-4 flex justify-end items-center">
                    <span class="text-gray-400 me-2 text-sm">${quick.convertDateTimeEng(fileDate)}</span>
                    <button class="ml-4 text-red-500 bg-red-50 p-1 rounded" aria-label="Close" onclick="removeFile('${fileId}')">
                        <svg xmlns="http://www.w3.org/2000/svg" width="1.2em" height="1.2em" viewBox="0 0 20 20">
                            <path fill="#F04438" d="m6 2l2-2h4l2 2h4v2H2V2zM3 6h14l-1 14H4zm5 2v10h1V8zm3 0v10h1V8z"/>
                        </svg>
                    </button>
                </div>
            `);
            } else {
                progress += Math.random() * 5 + 5; // Increased consistency and frequency
                progress = Math.min(progress, 100);
                $(`#progress-${fileId}`).css('width', progress + '%');
                $(`#progress-text-${fileId}`).text(Math.round(progress) + '%');
            }
        }, 100);
    }

    function openFolder() {
        $('#fileattch').click();

    }
    $('#dropzone-file').on('change', function(e) {
        var file = e.target.files[0];
        var reader = new FileReader();

        reader.onload = function(e) {
            $('#image-preview').html('<img src="' + e.target.result +
                '" class="max-w-full max-h-64 object-contain" />');
            $('#upload-instructions').addClass('hidden');
        };

        reader.readAsDataURL(file);
    });

    function createDest() {
        var form = "form-request";
        var data = new FormData($('[name="' + form + '"]')[0]);
        var button = $('#create-dest-button');

        // button.html(
        //     '<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span> Mengirim...');

        button.prop('disabled', true);
        // quick.blockPage()
        for (let i = 0; i < selectedFiles.length; i++) {
            data.append('files[]', selectedFiles[i]);
        }

        axios.post("/dest/create", data, {
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
                            window.location.href = `/`;
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

    function loadTag() {
        axios.post(APP_URL + 'api/destination/getTag', {
                _token: '{{ csrf_token() }}',
            })
            .then(function(response) {
                console.log(response)
                var data = response.data.tag
                let tags = data.map(tagsdata => {
                    return {
                        id: tagsdata.tag,
                        text: tagsdata.tag
                    };
                });
                $('#tag').select2({
                    placeholder: 'Select tags',
                    tags: true,
                    data: tags

                });
            })
            .catch(function(error) {
                console.error('Ada masalah dalam mengambil data:', error);
            });

    }
</script>
