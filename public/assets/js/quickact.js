var quick = {
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
            marker.bindPopup('Latitude: ' + e.latlng.lat + '<br>Longitude: ' + e.latlng.lng).openPopup();
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


