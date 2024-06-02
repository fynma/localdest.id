<script>
    APP_URL = "{{ getenv('APP_URL') }}/";

    $(() => {
        init();
        $('.menu-link').removeClass('active');
        $('.dashboard').addClass('active');
    });

    init = async () => {
        await loadPage();

    }

    function truncateText(text, wordLimit) {
        const words = text.split(' ');
        if (words.length > wordLimit) {
            return words.slice(0, wordLimit).join(' ') + '...';
        }
        return text;
    }

    function loadPage() {
        const urlParams = new URLSearchParams(window.location.search);
        const id = urlParams.get('dest');

        if (id) {
            axios.post(APP_URL + 'api/destination/loadDetailDestination', {
                    _token: '{{ csrf_token() }}',
                    id: id
                })
                .then(function(response) {
                    var data = response.data.detaildest;
                    var herosection = `
                    <img src="/storage/wisata/pantai2.jpg" alt="" class="w-screen h-screen">

                    <div class="absolute inset-0 bg-black top-0 bg-opacity-40 flex flex-col justify-between  p-4">
                        <div class="container mx-auto flex flex-col justify-end items-start h-full mb-20">
                            <div class="text-white text-left">
                                <h1 class="font-poppins text-lg font-bold leading-relaxed lg:text-4xl">
                                    ${data.destination_name}
                                </h1>
                                <p class="mt-6 text-md mb-2 ">${truncateText(data.destination_desc, 50)}</p>
                                <span class="mt-5 mb-8 text-md font-semibold">
                                    4.8 ⭐⭐⭐⭐ | by ${data.name}
                                </span>
                            </div>
                        </div>
                    `;
                    var detailsection = `
                    <p class="mb-5 mt-5">${truncateText(data.destination_desc, 200)}</p>
                        <div class="grid gap-4 mb-4 grid-cols-2">
                            <div class="col-span-2 sm:col-span-1">
                                <img src="/storage/wisata/pantai2.jpg" alt="">
                            </div>
                            <div class="col-span-2 sm:col-span-1">
                                <img src="/storage/wisata/pantai2.jpg" alt="">
                            </div>
                        </div>

                        <p class="mt-5 mb-5">${truncateText(data.destination_desc, 200)}</p>
                    `;

                    $('#hero-section').html(herosection)
                    $('.detail-destination').html(detailsection)
                    quick.leafletMapShowStatic('inject-leaflet', data.destination_longitude, data
                        .destination_latitude)



                    getNearby(data.destination_latitude, data.destination_longitude)


                })
                .catch(function(error) {
                    console.error('Ada masalah dalam mengambil data:', error);
                });
        } else {
            // window.location = '/destination'
        }
    }

    function getNearby(a, b) {
        var latitude = a;
        var longitude = b;

        var radius = 1000;

        var overpassUrl = 'https://overpass-api.de/api/interpreter';
        var query = `
                        [out:json];
                        (
                            node["amenity"="restaurant"](around:${radius},${latitude},${longitude});
                            node["tourism"="hotel"](around:${radius},${latitude},${longitude});
                        );
                        out body;
                    `;

        $.ajax({
            url: overpassUrl,
            type: 'POST',
            data: {
                data: query
            },
            dataType: 'json',
            success: function(data) {
                $('#results').empty();
                if (data.elements.length > 0) {
                    data.elements.forEach(function(place) {
                        var name = place.tags.name || "Unnamed Place";
                        var distance = calculateDistance(latitude, longitude, place
                            .lat, place.lon);
                        var addressParts = [];
                        if (place.tags['addr:street']) addressParts.push(place.tags['addr:street']);
                        if (place.tags['addr:city']) addressParts.push(place.tags['addr:city']);
                        if (place.tags['addr:postcode']) addressParts.push(place.tags[
                            'addr:postcode']);
                        var address = addressParts.length > 0 ? addressParts.join(', ') :
                            'Tidak dapat menampilkan alamat';


                        var placeDiv = $(`<article class="cursor-pointer" onclick="window.location.href='https://www.google.com/maps/search/?api=1&query=${place.lat},${place.lon}'" target="_blank">
                            <div class="flex mb-4">
                                <img class="w-24 h-24 me-4 rounded-lg object-cover	" src="/storage/hotel.png"
                                    alt="">

                                {{-- <span class="w-10 h-10 me-4 rounded-full bg-figma-btn-blue text-center">S</span> --}}
                                <div class="font-medium dark:text-white">
                                    <p class="">${name}</p>

                                    <div class="flex items-center mt-2 space-x-1 rtl:space-x-reverse">
                                        <svg class="w-4 h-4 text-yellow-300" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                            viewBox="0 0 22 20">
                                            <path
                                                d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                        </svg>
                                        <svg class="w-4 h-4 text-yellow-300" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                            viewBox="0 0 22 20">
                                            <path
                                                d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                        </svg>
                                        <svg class="w-4 h-4 text-yellow-300" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                            viewBox="0 0 22 20">
                                            <path
                                                d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                        </svg>
                                        <svg class="w-4 h-4 text-yellow-300" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                            viewBox="0 0 22 20">
                                            <path
                                                d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                        </svg>
                                        <svg class="w-4 h-4 text-gray-300 dark:text-gray-500" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                            viewBox="0 0 22 20">
                                            <path
                                                d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                        </svg>
                                        <span
                                            class="ms-2 me-2 font-normal dark:text-white mx-4 border-r-2 px-2">4.8</span>
                                        {{-- <span class="ms-2 font-normal text-gray-400 dark:text-white mx-4">|</span> --}}
                                        <span
                                            class="ms-2 font-normal dark:text-white mx-4 border-r-2 px-2">${place.tags.amenity ?? 'Hotel'}</span>
                                        {{-- <span class="font-normal text-gray-400 dark:text-white mx-4">|</span> --}}
                                        <span class="ms-4 font-normal dark:text-white mx-4 ">${distance}m</span>

                                    </div>

                                    <p class="font-normal mt-2"> ${address}
                                    </p>
                                </div>
                            </div>
                            {{-- <a href="#"
                                class="block mb-5 text-sm font-medium text-blue-600 hover:underline dark:text-blue-500">Read
                                more</a> --}}
                        </article>`);
                        // placeDiv.text(name + ' - ' + place.tags.amenity || place
                        //     .tags.tourism + ' - ' + (distance / 1000).toFixed(
                        //         2) + ' km');
                        console.log(placeDiv)
                        $('.nearby-section').append(placeDiv);
                    });
                } else {
                    console.log("eror")
                }
            },
            error: function() {
                $('#results').text('Gagal mendapatkan data dari Overpass API.');
            }
        });
    }

    function calculateDistance(lat1, lon1, lat2, lon2) {
    var R = 6371e3;
    var φ1 = lat1 * Math.PI / 180;
    var φ2 = lat2 * Math.PI / 180;
    var Δφ = (lat2 - lat1) * Math.PI / 180;
    var Δλ = (lon2 - lon1) * Math.PI / 180;

    var a = Math.sin(Δφ / 2) * Math.sin(Δφ / 2) +
            Math.cos(φ1) * Math.cos(φ2) *
            Math.sin(Δλ / 2) * Math.sin(Δλ / 2);
    var c = 2 * Math.atan2(Math.sqrt(a), Math.sqrt(1 - a));

    var d = R * c; 
    return Math.round(d);
}

</script>
