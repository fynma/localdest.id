var quick = {
    getProvince: function(idParam) {
        $.ajax({
            url: '/api/getProvinsi',
            method: 'GET',
            success: function(data) {
                console.log(data);
                let provinces = data.map(province => {
                    return {
                        id: province.id,
                        text: province.name
                    };
                });
    
                // Add an empty option at the beginning of the provinces array
                provinces.unshift({
                    id: '',
                    text: ''
                });
    
                // Populate the select with province data
                $('#province').select2({
                    placeholder: '--Choose Province--',
                    data: provinces,
                    allowClear: true
                });
            },
            error: function(xhr, status, error) {
                console.error('Failed to fetch provinces:', error);
            }
        });
    
        $('#' + idParam).select2({
            placeholder: '--Choose-- ',
            allowClear: true
        });
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


