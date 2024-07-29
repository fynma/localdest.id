var quick = {
    
    getProvince: function(idParam) {
        $.ajax({
            url: '/getProvinsi',
            method: 'GET',
            success: function(data) {
                console.log(data);
                let provinces = data.map(province => {
                    return {
                        id: province.id,
                        text: province.name
                    };
                });
    
                // Tambahkan opsi kosong di awal array provinces
                provinces.unshift({
                    id: '',
                    text: ''
                });
    
                // Populate the select with province data
                $('#' + idParam).select2({
                    placeholder: '--Choose Province--',
                    data: provinces,
                    allowClear: true
                });
    
                // Set default value to empty (so the placeholder is shown)
                $('#' + idParam).val('').trigger('change');
            },
            error: function(xhr, status, error) {
                console.error('Failed to fetch provinces:', error);
            }
        });
    
        $('#' + idParam).select2({
            placeholder: '--Choose-- ',
            allowClear: true
        });
    
        $('#' + idParam).val('').trigger('change');
    },
    
    
    getCity: function(idParam, provinceId) {
        console.log(provinceId)
        $('#city').empty().trigger('change');

        $.ajax({
            url: `/api/getKota/${provinceId}`,
            method: 'GET',
            success: function(data) {
                let cities = data.map(city => {
                    return {
                        id: city.id,
                        text: city.name
                    };
                });

                $('#city').select2({
                    placeholder: '--Choose City--',
                    data: cities,
                    allowClear: true
                });
            },
            error: function(xhr, status, error) {
                console.error('Failed to fetch cities:', error);
            }
        });
        $('#' + idParam).select2({
            placeholder: '--Choose City--',
            allowClear: true
        })
        // $('.selection').addClass('bg-white border border-gray-200 text-gray-900 text-sm focus:ring-primary-600 focus:border-primary-600 block w-full p-2 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500');
    },

    block: function() {
        $('#loading-spinner').css('display', '')    
    },

    unblock: function() {
        $('#loading-spinner').css('display', 'none')
    },

    convertDate: function (data) {
        var date = new Date(data);

        var monthNames = [
            "Januari", "Februari", "Maret", "April", "Mei", "Juni",
            "Juli", "Agustus", "September", "Oktober", "November", "Desember"
        ];

        var day = date.getDate().toString().padStart(2, '0');
        var month = monthNames[date.getMonth()];
        var year = date.getFullYear();

        return day + ' ' + month + ' ' + year;
    },
    convertDateEng: function (data) {
        var date = new Date(data);

        var monthNames = [
            "January", "February", "March", "April", "May", "June",
            "July", "August", "September", "October", "November", "December"
        ];
    

        var day = date.getDate().toString().padStart(2, '0');
        var month = monthNames[date.getMonth()];
        var year = date.getFullYear();

        return day + ' ' + month + ' ' + year;
    },
    convertDateTime: function (data) {
        var date = new Date(data);
    
        var monthNames = [
            "Januari", "Februari", "Maret", "April", "Mei", "Juni",
            "Juli", "Agustus", "September", "Oktober", "November", "Desember"
        ];
    
        var day = date.getDate().toString().padStart(2, '0');
        var month = monthNames[date.getMonth()];
        var year = date.getFullYear();
    
        var hours = date.getHours().toString().padStart(2, '0');
        var minutes = date.getMinutes().toString().padStart(2, '0');
    
        return day + ' ' + month + ' ' + year + ' ' +  hours + ':' + minutes;
    },
    convertDateTimeEng: function (data) {
        var date = new Date(data);
    
        var monthNames = [
            "January", "February", "March", "April", "May", "June",
            "July", "August", "September", "October", "November", "December"
        ];
    
        var day = date.getDate().toString().padStart(2, '0');
        var month = monthNames[date.getMonth()];
        var year = date.getFullYear();
    
        var hours = date.getHours();
        var minutes = date.getMinutes().toString().padStart(2, '0');
        var ampm = hours >= 12 ? 'PM' : 'AM';
        hours = hours % 12;
        hours = hours ? hours : 12;
        hours = hours.toString().padStart(2, '0');
    
        return day + ' ' + month + ' ' + year + ' ' +  hours + ':' + minutes + ' ' + ampm;
    },
    
     convertHourMinutes: function (data) {
        var date = new Date(data);
    
        var hours = date.getHours().toString().padStart(2, '0');
        var minutes = date.getMinutes().toString().padStart(2, '0');
    
        return hours + ':' + minutes;
    },
    
    leafletMapSelector: function (id, a , b) {
        var map = L.map(id).setView([-2.5489, 118.0149], 5); 
    
        L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
        }).addTo(map);
    
        var markers = [];
    
        map.on('click', function (e) {
            markers.forEach(function (marker) {
                map.removeLayer(marker);
            });
            markers = []; 
    
            var marker = L.marker(e.latlng).addTo(map); 
            // marker.bindPopup('Latitude: ' + e.latlng.lat + '<br>Longitude: ' + e.latlng.lng).openPopup();
            marker.bindPopup('Location tagged').openPopup();

            markers.push(marker); 
            var latitude = e.latlng.lat
            var longitude = e.latlng.lng
    
            $(a).attr('value', latitude);
            $(b).attr('value', longitude);
            
        });
    },

    leafletMapShowStatic: function (id, lt, ln) {
        console.log(id)
        var map = L.map(id).setView([-2.5489, 118.0149], 5);

        L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
        }).addTo(map);

        var markers = L.layerGroup().addTo(map);

        function addMarkerAtCoordinates(lat, lng) {
            var marker = L.marker([lat, lng]).addTo(markers);
            var coordinates = lat + ',' + lng;
            
            var googleMapsUrl = 'https://www.google.com/maps/search/?q=' + encodeURIComponent(coordinates);


            marker.bindPopup('<a href="' + googleMapsUrl + '" target="_blank">For Detail</a>');

            marker.addTo(map);

        }

        addMarkerAtCoordinates(lt, ln);
    },

    swalNotif: function(data) {
        data = $.extend ( 
            true, 
            {
                title: 'error!',
                text: 'niki error mas bro tolong hubung i dapit sekarang yo bolo:D',
                icon: "error",
                callback: function () {},
            },
            data
        )
        swal.fire({
            title: data.title,
            text: data.text,
            icon: data.icon          
        }).then(function (result) {
            data.callback(result);
        })
    },

    toastNotif: function(data) {
        data = $.extend ( 
            true, 
            {
                title: 'error!',
                text: null,
                icon: "error",
                timer: 3500,
                position: "top-end",
                showConfirmButton: false,
                timerProgressBar: true,
                callback: function () {},
            },
            data
        )
        const Toast = Swal.mixin({
            toast: true,
            position: data.position,
            showConfirmButton: data.showConfirmButton,
            timer: data.timer,
            timerProgressBar: data.timerProgressBar,
            didOpen: (toast) => {
                toast.onmouseenter = Swal.stopTimer;
                toast.onmouseleave = Swal.resumeTimer;
            },
            didClose: (toast) => {
                data.callback(toast)
            }
        })
        Toast.fire({
            title: data.title,
            text: data.text,
            icon: data.icon,
        })
    },
    customToastNotif: function(data) {
        console.log(a)
        data = $.extend ( 
            true, 
            {
                title: 'Error!',
                text: 'Hubungi admin sekarang juga!',
                icon: "error",
                callback: function () {},
            },
            data
        )
        var selectedIcon = ``;
        switch (data.icon) {
            case 'success':
                selectedIcon = `<div
            class="inline-flex items-center justify-center flex-shrink-0 w-8 h-8 text-green-500 bg-green-100 rounded-lg dark:bg-green-800 dark:text-green-200">
            <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                viewBox="0 0 20 20">
                <path
                    d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
            </svg>
            <span class="sr-only">Check icon</span>
        </div>`
                break;
            case 'error':
                selectedIcon = `<div
            class="inline-flex items-center justify-center flex-shrink-0 w-8 h-8 text-red-500 bg-red-100 rounded-lg dark:bg-red-800 dark:text-red-200">
            <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                viewBox="0 0 20 20">
                <path
                    d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 11.793a1 1 0 1 1-1.414 1.414L10 11.414l-2.293 2.293a1 1 0 0 1-1.414-1.414L8.586 10 6.293 7.707a1 1 0 0 1 1.414-1.414L10 8.586l2.293-2.293a1 1 0 0 1 1.414 1.414L11.414 10l2.293 2.293Z" />
            </svg>
            <span class="sr-only">Error icon</span>
        </div>`
                break;
            case 'warning':
                selectedIcon = ` <div
            class="inline-flex items-center justify-center flex-shrink-0 w-8 h-8 text-orange-500 bg-orange-100 rounded-lg dark:bg-orange-700 dark:text-orange-200">
            <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                viewBox="0 0 20 20">
                <path
                    d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM10 15a1 1 0 1 1 0-2 1 1 0 0 1 0 2Zm1-4a1 1 0 0 1-2 0V6a1 1 0 0 1 2 0v5Z" />
            </svg>
            <span class="sr-only">Warning icon</span>
        </div>`;
                break;
            default:
                selectedIcon = `<div
            class="inline-flex items-center justify-center flex-shrink-0 w-8 h-8 text-blue-500 bg-blue-100 rounded-lg dark:bg-blue-800 dark:text-blue-200">
            <svg viewBox="0 0 24 24" class="text-blue-600 w-5 h-5 sm:w-5 sm:h-5 mr-3">
            <path fill="currentColor"
                d="M12,0A12,12,0,1,0,24,12,12.013,12.013,0,0,0,12,0Zm.25,5a1.5,1.5,0,1,1-1.5,1.5A1.5,1.5,0,0,1,12.25,5ZM14.5,18.5h-4a1,1,0,0,1,0-2h.75a.25.25,0,0,0,.25-.25v-4.5a.25.25,0,0,0-.25-.25H10.5a1,1,0,0,1,0-2h1a2,2,0,0,1,2,2v4.75a.25.25,0,0,0,.25.25h.75a1,1,0,1,1,0,2Z">
            </path>
        </svg>
            <span class="sr-only">Check icon</span>
        </div>`;
                break;
        };
        const template = `<div id="custom-toast" class="fixed bottom-0 right-5 z-50 transition-transform transform translate-y-full opacity-0">
        <div id="toast-success"
            class="flex items-center w-full max-w-xs p-4 mb-4 text-gray-500 bg-white rounded-lg shadow dark:text-gray-400 dark:bg-gray-800"
            role="alert">
          ${selectedIcon}
            <div class="ml-3 text-sm font-normal">${data.text}</div>
            <button type="button"
                class="ml-auto -mx-1.5 -my-1.5 bg-white text-gray-400 hover:text-gray-900 rounded-lg focus:ring-2 focus:ring-gray-300 p-1.5 hover:bg-gray-100 inline-flex items-center justify-center h-8 w-8 dark:text-gray-500 dark:hover:text-white dark:bg-gray-800 dark:hover:bg-gray-700"
                data-dismiss-target="#toast-success" aria-label="Close">
                <span class="sr-only">Close</span>
                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 14 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                </svg>
            </button>
        </div>
    </div>`
    $('body').append(template);

    setTimeout(function() {
        $('#custom-toast').removeClass('translate-y-full opacity-0').addClass('translate-y-0 opacity-100');
    }, 100); 

    setTimeout(function() {
        $('#custom-toast').removeClass('translate-y-0 opacity-100').addClass('translate-y-full opacity-0');
        setTimeout(function() {
            $('#custom-toast').remove();
        }, 500);
    }, data.timer);
    },
    ajax: function (config) {
        config = $.extend(
            true,
            {
              data: null,
              url: null,
              type: "POST",
              dataType: null,
              processData: null,
              contentType: null,
              success: function () {},
              complete: function () {},
              error: function () {},
            },
            config
        );
        quick.block()
        $.ajax({
            url: config.url,
            type: config.type,
            processData: config.processData,
            contentType: config.contentType,
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            data: config.data,
            success: function(response) {
                $('#loading-spinner').css('display', 'none')
                config.success(response)
            },
            error: function(xhr, status, error) {
                $('#loading-spinner').css('display', 'none')
                config.error(xhr, status, error)

                var messageError = xhr.responseJSON && xhr.responseJSON.message;
                if (messageError) {
                    quick.toastNotif({
                        title: messageError,
                        icon: "error"
                    })   
                } else {
                    quick.toastNotif()
                }
            },
            complate: function(response) {
                config.complate(response)
            }
        });
    }
};


