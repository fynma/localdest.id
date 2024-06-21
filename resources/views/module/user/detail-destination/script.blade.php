<script>
    APP_URL = "{{ getenv('APP_URL') }}/";

    $(() => {
        init();
        $('.menu-link').removeClass('active');
        $('.dashboard').addClass('active');
        lightbox.option({
            'resizeDuration': 200,
            'wrapAround': true
        });

    });

    init = async () => {
        await loadPage();
        await loadReview();
        await loadTag();
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
                    var listPhotos = response.data.photos;
                    console.log(listPhotos)
                    var photoTemplate = '';
                    var photoTemplate = '';
                    $.each(listPhotos, function(index, photo) {
                        if (index < 2) {
                            photoTemplate += `
                               <div class="col-span-2 sm:col-span-1 relative">
                                <a href="/storage/uploaded-destphoto/${photo.image_filename}" data-lightbox="photos" data-title="Photo ${index + 1}">
                                    <img src="/storage/uploaded-destphoto/${photo.image_filename}" alt="nothing" class="w-full h-auto cursor-pointer max-w-full max-h-full">
                                </a>
                            </div>
                            `;
                        } else {
                            photoTemplate += `
                                <div class="hidden">
                                    <a href="/storage/uploaded-destphoto/${photo.image_filename}" class="hidden" data-lightbox="photos" data-title="Photo ${index + 1}">
                                        <img src="/storage/uploaded-destphoto/${photo.image_filename}" alt="nothing" class="hidden" >
                                    </a>
                                </div>
                            `;
                        }
                    });



                    var herosection = `
                    <img src="/storage/uploaded-thumbnail/${data.destination_thumbnail}" alt="" class="w-screen h-screen object-cover">

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
                        <div class="grid gap-4 mb-4 grid-cols-2 photo-container">
                           ${photoTemplate}
                        </div>

                        <p class="mt-5 mb-5">${truncateText(data.destination_desc, 200)}</p>
                    `;

                    $('#hero-section').html(herosection)
                    $('.detail-destination').html(detailsection)
                    quick.leafletMapShowStatic('inject-leaflet', data.destination_longitude, data
                        .destination_latitude)


                    console.log(data)
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
                console.log("Data received from Overpass API:", data);
                $('#results').empty();
                if (data.elements.length > 0) {
                    data.elements.forEach(function(place) {
                        var name = place.tags.name || "Unnamed Place";
                        var distance = calculateDistance(latitude, longitude, place.lat, place.lon);
                        var addressParts = [];
                        if (place.tags['addr:street']) addressParts.push(place.tags['addr:street']);
                        if (place.tags['addr:city']) addressParts.push(place.tags['addr:city']);
                        if (place.tags['addr:postcode']) addressParts.push(place.tags[
                            'addr:postcode']);
                        var address = addressParts.length > 0 ? addressParts.join(', ') :
                            'Tidak dapat menampilkan alamat';

                        var placeDiv = $(`
                        <article class="cursor-pointer" onclick="window.location.href='https://www.google.com/maps/search/?api=1&query=${place.lat},${place.lon}'" target="_blank">
                            <div class="flex mb-4">
                                <img class="w-24 h-24 me-4 rounded-lg object-cover" src="/storage/hotel.png" alt="">
                                <div class="font-medium dark:text-white">
                                    <p class="">${name}</p>
                                    <div class="flex items-center mt-2 space-x-1 rtl:space-x-reverse">
                                        <svg class="w-4 h-4 text-yellow-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20"><path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z"/></svg>
                                        <svg class="w-4 h-4 text-yellow-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20"><path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z"/></svg>
                                        <svg class="w-4 h-4 text-yellow-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20"><path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z"/></svg>
                                        <svg class="w-4 h-4 text-yellow-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20"><path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z"/></svg>
                                        <svg class="w-4 h-4 text-gray-300 dark:text-gray-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20"><path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z"/></svg>
                                        <span class="ms-2 me-2 font-normal dark:text-white mx-4 border-r-2 px-2">4.8</span>
                                        <span class="ms-2 font-normal dark:text-white mx-4 border-r-2 px-2">${place.tags.amenity ?? 'Hotel'}</span>
                                        <span class="ms-4 font-normal dark:text-white mx-4 ">${distance}m</span>
                                    </div>
                                    <p class="font-normal mt-2"> ${address}</p>
                                </div>
                            </div>
                        </article>
                    `);
                        console.log(placeDiv);
                        $('.nearby-section').append(placeDiv);
                    });
                } else {
                    var placeDiv = $(`<article class="cursor-pointer" target="_blank">
                    <h1>Tidak ada data yang bisa ditampilkan</h1>
                </article>`);
                    $('.nearby-section').append(placeDiv);
                }
            },
            error: function(error) {
                console.error("Error from Overpass API:", error);
                $('#results').text('Gagal mendapatkan data dari Overpass API.');
            }
        });
    }

    function calculateDistance(lat1, lon1, lat2, lon2) {
        var R = 6371; // Radius of the earth in km
        var dLat = deg2rad(lat2 - lat1); // deg2rad below
        var dLon = deg2rad(lon2 - lon1);
        var a =
            Math.sin(dLat / 2) * Math.sin(dLat / 2) +
            Math.cos(deg2rad(lat1)) * Math.cos(deg2rad(lat2)) *
            Math.sin(dLon / 2) * Math.sin(dLon / 2);
        var c = 2 * Math.atan2(Math.sqrt(a), Math.sqrt(1 - a));
        var distance = R * c * 1000; // Distance in m
        return Math.round(distance); // Return rounded distance
    }

    function deg2rad(deg) {
        return deg * (Math.PI / 180);
    }


    function loadReview() {
        const urlParams = new URLSearchParams(window.location.search);
        const id = urlParams.get('dest');
        if (id) {
            axios.post("/review/index", {
                    _token: '{{ csrf_token() }}',
                    id: id
                })
                .then(function(response) {
                    // response.data.sort((a, b) => new Date(b.review_created_at) - new Date(a.review_created_at));
                    var ratingWithPhoto = '';
                    var ratingNonPhoto = '';
                    var templatePhoto = '';
                    var ratingStar = '';
                    console.log(response.data)
                    $.each(response.data, function(index, review) {
                        console.log(review)
                        switch (review.review_rating_star) {
                            case '1':
                                ratingStar = `
                                    <svg class="w-4 h-4 text-yellow-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                        fill="currentColor" viewBox="0 0 22 20">
                                        <path
                                            d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                        </svg>`;
                                break;
                            case '2':
                                ratingStar = `
                                        <svg class="w-4 h-4 text-yellow-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                            fill="currentColor" viewBox="0 0 22 20">
                                            <path
                                                d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                        </svg>
                                        <svg class="w-4 h-4 text-yellow-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                            fill="currentColor" viewBox="0 0 22 20">
                                            <path
                                                d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                        </svg>`;
                                break;
                            case '3':
                                ratingStar = `
                                        <svg class="w-4 h-4 text-yellow-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                            fill="currentColor" viewBox="0 0 22 20">
                                            <path
                                                d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                        </svg>
                                        <svg class="w-4 h-4 text-yellow-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                            fill="currentColor" viewBox="0 0 22 20">
                                            <path
                                                d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                        </svg>
                                        <svg class="w-4 h-4 text-yellow-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                            fill="currentColor" viewBox="0 0 22 20">
                                            <path
                                                d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                        </svg>`;
                                break;
                            case '4':
                                ratingStar = `
                                        <svg class="w-4 h-4 text-yellow-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                            fill="currentColor" viewBox="0 0 22 20">
                                            <path
                                                d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                        </svg>
                                        <svg class="w-4 h-4 text-yellow-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                            fill="currentColor" viewBox="0 0 22 20">
                                            <path
                                                d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                        </svg>
                                        <svg class="w-4 h-4 text-yellow-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                            fill="currentColor" viewBox="0 0 22 20">
                                            <path
                                                d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                        </svg>
                                        <svg class="w-4 h-4 text-yellow-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                            fill="currentColor" viewBox="0 0 22 20">
                                            <path
                                                d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                        </svg>`;
                                break;
                            case '5':
                                ratingStar = `
                                        <svg class="w-4 h-4 text-yellow-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                            fill="currentColor" viewBox="0 0 22 20">
                                            <path
                                                d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                        </svg>
                                        <svg class="w-4 h-4 text-yellow-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                            fill="currentColor" viewBox="0 0 22 20">
                                            <path
                                                d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                        </svg>
                                        <svg class="w-4 h-4 text-yellow-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                            fill="currentColor" viewBox="0 0 22 20">
                                            <path
                                                d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                        </svg>
                                        <svg class="w-4 h-4 text-yellow-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                            fill="currentColor" viewBox="0 0 22 20">
                                            <path
                                                d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                        </svg>
                                        <svg class="w-4 h-4 text-yellow-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                            fill="currentColor" viewBox="0 0 22 20">
                                            <path
                                                d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                        </svg>`;
                                break;
                            default:
                                ratingStar = '';
                        }

                        if (review.review_photos !== '') {
                            $.each(review.review_photos, function(index, photo) {
                                if (photo.review_review_id === review.review_id) {
                                    templatePhoto +=
                                        `<img src="storage/uploaded-review/${photo.review_filename}" alt="Photo 1" class="max-w-xs h-32 object-contain rounded-xl">`;
                                }
                            });
                        }

                        if (review.review_photos != '') {

                            ratingWithPhoto += `
                           <article>
                        <div class="flex items-center mb-4">
                            <img class="w-10 h-10 me-4 rounded-full object-cover	" src="/storage/photo-profile/orangilang.jpg"
                                alt="">

                            {{-- <span class="w-10 h-10 me-4 rounded-full bg-figma-btn-blue text-center">S</span> --}}
                            <div class="font-medium dark:text-white">
                                <p>${review.name}
                                <div class="flex items-center mb-1 space-x-1 rtl:space-x-reverse">
                                    ${ratingStar}
                                    <span class="ms-2 text-sm font-normal text-gray-400 dark:text-white">|
                                    ${quick.convertDateEng(review.review_created_at)}</span>
                                </div>
                                </p>
                            </div>
                        </div>
                        <div class="tag-sect mb-5 flex flex-wrap gap-2 justify-start">
                           ${templatePhoto}
                        </div>

                        <p class="mb-2 text-gray-500 dark:text-gray-400">${review.review_message}</p>
                        {{-- <a href="#"
                                class="block mb-5 text-sm font-medium text-blue-600 hover:underline dark:text-blue-500">Read
                                more</a> --}}
                    </article>`;
                        } else {
                            ratingNonPhoto += `
                           <article>
                                            <div class="flex items-center mb-4">
                                                <img class="w-10 h-10 me-4 rounded-full object-cover" src="/storage/photo-profile/orangilang.jpg"
                                                    alt="">

                                                {{-- <span class="w-10 h-10 me-4 rounded-full bg-figma-btn-blue text-center">S</span> --}}
                                                <div class="font-medium dark:text-white">
                                                    <p>${review.name}
                                                    <div class="flex items-center mb-1 space-x-1 rtl:space-x-reverse">
                                                       ${ratingStar}
                                                        <span class="ms-2 text-sm font-normal text-gray-400 dark:text-white">|
                                                            10/12/2025</span>
                                                    </div>
                                                    </p>
                                                </div>
                                            </div>
                                            <p class="mb-2 text-gray-500 dark:text-gray-400">${review.review_message}</p>
                                            {{-- <a href="#"
                                                    class="block mb-5 text-sm font-medium text-blue-600 hover:underline dark:text-blue-500">Read
                                                    more</a> --}}
                                        </article>`;

                        }
                    });
                    $('.rating-container').append(ratingWithPhoto + ratingNonPhoto);
                })
                .catch(function(error) {
                    console.error('Ada masalah dalam mengambil data:', error);
                });
        } else {
            // window.location = '/destination'
        }
    }

    function createReview() {
        const urlParams = new URLSearchParams(window.location.search);
        const id = urlParams.get('dest');
        var form = "form-review";
        var data = new FormData($('[name="' + form + '"]')[0]);
        var button = $('.create-review-button');
        data.append('destination_id', id);
        // button.html(
        //     '<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span> Mengirim...');

        button.prop('disabled', true);
        // quick.blockPage()
        var files = $('#file-input')[0].files;
        for (var i = 0; i < files.length; i++) {
            data.append('files[]', files[i]);
        }

        axios.post("/review/create", data, {
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
                            window.location.reload();
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

                console.error('There has been a problem with your Axios operation:', error.response.data.message);
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
        const urlParams = new URLSearchParams(window.location.search);
        const id = urlParams.get('dest');
        axios.post(APP_URL + 'api/destination/getTagDest', {
                _token: '{{ csrf_token() }}',
                id : id,
            })
            .then(function(response) {
                console.log(response)
              
            })
            .catch(function(error) {
                console.error('Ada masalah dalam mengambil data:', error);
            });

    }
</script>
