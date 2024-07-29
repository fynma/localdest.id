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
        await setShareBtn();
        await checkExistingReview();
        await unblockLoading();
    }

    function unblockLoading() {
        $('.loading').fadeOut(300);
        $('.parent').fadeIn();
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
                            <div class="relative">
                                <a href="/storage/uploaded-destphoto/${photo.image_filename}" data-lightbox="photos" data-title="Photo ${index + 1}" class="w-auto">
                                    <img src="/storage/uploaded-destphoto/${photo.image_filename}" alt="nothing" class="w-auto h-64 cursor-pointer object-cover">
                                </a>
                            </div>
                        `;
                        } else {
                            photoTemplate += `
                            <div class="hidden">
                                <a href="/storage/uploaded-destphoto/${photo.image_filename}" class="hidden" data-lightbox="photos" data-title="Photo ${index + 1}">
                                    <img src="/storage/uploaded-destphoto/${photo.image_filename}" alt="nothing" class="hidden">
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
                                <span class="mt-5 mb-8 text-md font-semibold flex gap-2">
                                    <span class="total-rating"></span><span class="star-top flex justify-start "></span> | by ${data.name}
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


    // function loadReview() {
    //     const urlParams = new URLSearchParams(window.location.search);
    //     const id = urlParams.get('dest');
    //     if (id) {
    //         axios.post("/review/index", {
    //                 _token: '{{ csrf_token() }}',
    //                 id: id
    //             })
    //             .then(function(response) {
    //                 // response.data.sort((a, b) => new Date(b.review_created_at) - new Date(a.review_created_at));
    //                 var ratingWithPhoto = '';
    //                 var ratingNonPhoto = '';
    //                 var templatePhoto = '';
    //                 var ratingStar = '';
    //                 console.log(response.data)
    //                 var data = response.data.reviews;
    //                 data.sort((a, b) => new Date(b.review_created_at) - new Date(a.review_created_at));
    //                 console.log(data)
    //                 $('.total-rated').text(data.length + ' Rated')
    //                 $.each(data, function(index, review) {
    //                     var templatePhoto = '';

    //                     console.log(review)
    //                     switch (review.review_rating_star) {
    //                         case '1':
    //                             ratingStar = generateRatingStars(1);
    //                             break;
    //                         case '2':
    //                             ratingStar = generateRatingStars(2);
    //                             break;
    //                         case '3':
    //                             ratingStar = generateRatingStars(3);
    //                             break;
    //                         case '4':
    //                             ratingStar = generateRatingStars(4);
    //                             break;
    //                         case '5':
    //                             ratingStar = generateRatingStars(5);
    //                             break;
    //                         default:
    //                             ratingStar = '';
    //                     }

    //                     if (review.review_photos !== '') {
    //                         $.each(review.review_photos, function(index, photo) {
    //                             if (photo.review_review_id === review.review_id) {
    //                                 templatePhoto +=
    //                                     `<img src="storage/uploaded-review/${photo.review_filename}" alt="Photo 1" class="max-w-xs h-32 object-contain rounded-xl">`;
    //                             }
    //                         });
    //                     }

    //                     if (review.review_photos != '') {

    //                         ratingWithPhoto += `
    //                        <article>
    //                     <div class="flex items-center mb-4">
    //                         <img class="w-10 h-10 me-4 rounded-full object-cover	" src="/storage/photo-profile/orangilang.jpg"
    //                             alt="">

    //                         {{-- <span class="w-10 h-10 me-4 rounded-full bg-figma-btn-blue text-center">S</span> --}}
    //                         <div class="font-medium dark:text-white">
    //                             <p>${review.name}
    //                             <div class="flex items-center mb-1 space-x-1 rtl:space-x-reverse">
    //                                 ${ratingStar}
    //                                 <span class="ms-2 text-sm font-normal text-gray-400 dark:text-white">|
    //                                 ${quick.convertDateEng(review.review_created_at)}</span>
    //                             </div>
    //                             </p>
    //                         </div>
    //                     </div>
    //                     <div class="mb-5 flex flex-wrap gap-2 justify-start">
    //                        ${templatePhoto}
    //                     </div>

    //                     <p class="mb-2 text-gray-500 dark:text-gray-400">${review.review_message}</p>
    //                     {{-- <a href="#"
    //                             class="block mb-5 text-sm font-medium text-blue-600 hover:underline dark:text-blue-500">Read
    //                             more</a> --}}
    //                 </article>`;
    //                     } else {
    //                         ratingNonPhoto += `
    //                        <article>
    //                                         <div class="flex items-center mb-4">
    //                                             <img class="w-10 h-10 me-4 rounded-full object-cover" src="/storage/photo-profile/orangilang.jpg"
    //                                                 alt="">

    //                                             {{-- <span class="w-10 h-10 me-4 rounded-full bg-figma-btn-blue text-center">S</span> --}}
    //                                             <div class="font-medium dark:text-white">
    //                                                 <p>${review.name}
    //                                                 <div class="flex items-center mb-1 space-x-1 rtl:space-x-reverse">
    //                                                    ${ratingStar}
    //                                                     <span class="ms-2 text-sm font-normal text-gray-400 dark:text-white">|
    //                                                         ${quick.convertDateEng(review.review_created_at)}</span>
    //                                                 </div>
    //                                                 </p>
    //                                             </div>
    //                                         </div>
    //                                         <p class="mb-2 text-gray-500 dark:text-gray-400">${review.review_message}</p>
    //                                         {{-- <a href="#"
    //                                                 class="block mb-5 text-sm font-medium text-blue-600 hover:underline dark:text-blue-500">Read
    //                                                 more</a> --}}
    //                                     </article>`;

    //                     }
    //                 });
    //                 $('.rating-container').append(ratingWithPhoto + ratingNonPhoto);
    //                 loadRating(response.data.data)
    //             })
    //             .catch(function(error) {
    //                 console.error('Ada masalah dalam mengambil data:', error);
    //             });
    //     } else {
    //         // window.location = '/destination'
    //     }
    // }
    function loadReview() {
        const urlParams = new URLSearchParams(window.location.search);
        const id = urlParams.get('dest');
        if (id) {
            axios.post("/review/index", {
                    _token: '{{ csrf_token() }}',
                    id: id
                })
                .then(function(response) {
                    var reviews = response.data.reviews;
                    console.log(response.data);

                    // Mengurutkan reviews berdasarkan created_at dari yang terbaru
                    reviews.sort((a, b) => new Date(b.review_created_at) - new Date(a.review_created_at));

                    var reviewHtml = '';
                    $('.total-rated').text(reviews.length + ' Rated');

                    $.each(reviews, function(index, review) {
                        var templatePhoto = '';
                        var ratingStar = generateRatingStars(parseInt(review.review_rating_star));

                        if (review.review_photos !== '') {
                            $.each(review.review_photos, function(index, photo) {
                                if (photo.review_review_id === review.review_id) {
                                    templatePhoto +=
                                        `<img src="storage/uploaded-review/${photo.review_filename}" alt="Photo 1" class="max-w-xs h-32 object-contain rounded-xl">`;
                                }
                            });
                        }

                        reviewHtml += `
                        <article>
                            <div class="flex justify-between items-center mb-2">
                            <div class="flex items-center mb-4">
                                <img class="w-10 h-10 me-4 rounded-full object-cover" src="/storage/photo-profile/orangilang.jpg" alt="">
                                <div class="font-medium dark:text-white">
                                    <p>${review.name}
                                    <div class="flex items-center mb-1 space-x-1 rtl:space-x-reverse">
                                        ${ratingStar}
                                        <span class="ms-2 text-sm font-normal text-gray-400 dark:text-white">| ${quick.convertDateEng(review.review_created_at)}</span>
                                    </div>
                                    </p>
                                </div>
                            </div>
                             <button id="dropdownComment1Button" data-dropdown-toggle="dropdownComment1"
                                    class="inline-flex items-center p-2 text-sm font-medium text-center text-gray-500 dark:text-gray-400 bg-white rounded-lg hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-50 dark:bg-gray-900 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                                    type="button">
                                    <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 3">
                                        <path d="M2 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3Zm6.041 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM14 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3Z"/>
                                    </svg>
                                    <span class="sr-only">Comment settings</span>
                                </button>
                                <!-- Dropdown menu -->
                                <div id="dropdownComment1"
                                    class="hidden z-10 w-36 bg-white rounded divide-y divide-gray-100 shadow dark:bg-gray-700 dark:divide-gray-600">
                                    <ul class="py-1 text-sm text-gray-700 dark:text-gray-200"
                                        aria-labelledby="dropdownMenuIconHorizontalButton">
                                        <li>
                                            <a href="#"
                                                class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Edit</a>
                                        </li>
                                        <li>
                                            <a href="#"
                                                class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Remove</a>
                                        </li>
                                        <li>
                                            <a href="#"
                                                class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Report</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            ${templatePhoto ? `<div class="mb-5 flex flex-wrap gap-2 justify-start">${templatePhoto}</div>` : ''}
                            <p class="mb-2 text-gray-500 dark:text-gray-400">${review.review_message}</p>
                        </article>`;
                    });

                    $('.rating-container').html(reviewHtml);
                    loadRating(response.data.data);
                })
                .catch(function(error) {
                    console.error('Ada masalah dalam mengambil data:', error);
                });
        } else {
            // window.location = '/destination'
        }
    }

    function loadRating(data) {
        // Check if data is not empty
        if (!data || data.length === 0) {
            var starBlank = ``

            for (var i = 0; i < 5; i++) {
                starBlank += `<svg class="w-5 h-5 text-gray-300" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12 .587l3.668 7.568L24 9.423l-6 5.847 1.416 8.271L12 18.896l-7.416 4.645L6 15.27 0 9.423l8.332-1.268L12 .587z"/>
                         </svg>`;
            }
            $('.total-rating').html(`0.0`);
            $('.star-top').html(starBlank);
            return;
        }

        // Variables to hold rating counts
        let totalReviews = data.length;
        let ratingCounts = {
            1: 0,
            2: 0,
            3: 0,
            4: 0,
            5: 0
        };
        let sumRatings = 0;

        // Calculate rating counts and sum of ratings
        data.forEach(review => {
            let rating = parseInt(review.review_rating_star);
            ratingCounts[rating]++;
            sumRatings += rating;
        });

        // Calculate average rating
        let averageRating = sumRatings / totalReviews;
        $('.text-4xl').text(averageRating.toFixed(1));
        $('.total-rated').text(`${totalReviews} reviews`);

        // Update average stars
        let starHtml = '';
        for (let i = 1; i <= 5; i++) {
            if (i <= Math.floor(averageRating)) {
                starHtml += `<svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12 .587l3.668 7.568L24 9.423l-6 5.847 1.416 8.271L12 18.896l-7.416 4.645L6 15.27 0 9.423l8.332-1.268L12 .587z"/>
                         </svg>`;
            } else {
                starHtml += `<svg class="w-5 h-5 text-gray-300" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12 .587l3.668 7.568L24 9.423l-6 5.847 1.416 8.271L12 18.896l-7.416 4.645L6 15.27 0 9.423l8.332-1.268L12 .587z"/>
                         </svg>`;
            }
        }
        console.log(averageRating)
        $('.total-rating').html(averageRating.toFixed(1));
        $('.star-top').html(starHtml);
        $('.flex.justify-start.mt-5.mb-2').html(starHtml);

        // Update progress bars
        $('#progress-bars').html('');
        for (let rating = 5; rating >= 1; rating--) {
            let percentage = (ratingCounts[rating] / totalReviews) * 100;
            $('#progress-bars').append(
                `<div class="flex items-center mb-2">
                <span class="text-sm text-gray-600 text-left">${rating}</span>
                <div class="w-4/5 bg-gray-200 rounded-full h-2.5 ml-5">
                    <div class="bg-yellow-400 h-2.5 rounded-full" style="width: ${percentage}%"></div>
                </div>
             </div>`
            );
        }
    }


    function generateRatingStars(count) {
        var stars = '';
        for (var i = 0; i < count; i++) {
            stars += `
            <svg class="w-4 h-4 text-yellow-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                fill="currentColor" viewBox="0 0 22 20">
                <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
            </svg>
        `;
        }
        return stars;
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
                id: id,
            })
            .then(function(response) {
                console.log(response)
                var tag_template = ``;
                $.each(response.data, function(index, data) {
                    tag_template = ` <a href="" class="bg-gray-200 p-2 rounded">${data.tag}</a>`
                    $('.tag-sect').append(tag_template);

                });
            })
            .catch(function(error) {
                console.error('Ada masalah dalam mengambil data:', error);
            });

    }

    function setShareBtn() {
        const shareUrl = $(location).attr('href');
        var facebookBase = 'https://www.facebook.com/sharer/sharer.php?u=';
        var twitterBase = 'https://twitter.com/intent/tweet?url=';
        var instagramBase = 'https://www.instagram.com/?url=';
        var whatsappBase = 'https://wa.me/?text=';

        $('.facebook').attr('href', facebookBase + shareUrl);
        $('.twitter').attr('href', twitterBase + shareUrl);
        $('.instagram').attr('href', instagramBase + shareUrl);
        $('.whatsapp').attr('href', whatsappBase + shareUrl);
    }

    function checkExistingReview() {
        const urlParams = new URLSearchParams(window.location.search);
        const id = urlParams.get('dest');
        if (id) {
            axios.post(APP_URL + 'review/checkExistingReview', {
                    _token: '{{ csrf_token() }}',
                    id: id
                })
                .then(function(response) {
                    var data = response.data;
                    console.log(data)
                    var templatePhoto = '';
                    if (data.reviewPhotos) {
                        $.each(data.reviewPhotos, function(index, photo) {
                            templatePhoto +=
                                `<img src="storage/uploaded-review/${photo.review_filename}" alt="Photo 1" class="max-w-xs h-32 object-contain rounded-xl">`;
                        });
                    }
                    if (response.data.review) {
                        var ratingStar = generateRatingStars(parseInt(data.review.review_rating_star));
                        $('.form-create-review').remove();
                        $('.form-update-review')
                            .append(`<h3 class="font-semibold mb-5 mt-5">Your Review</h3>
                            <article>
                            <div class="font-medium dark:text-white">

                               
                                ${templatePhoto ? `<div class="mb-5 flex flex-wrap gap-2 justify-start">${templatePhoto}</div>` : ''}                             <div class="flex items-center mb-1 space-x-1 rtl:space-x-reverse">
                             ${ratingStar}
        
                                        <span class="ms-2 text-sm font-normal text-gray-400 dark:text-white">| ${quick.convertDateEng(data.review.review_created_at)}</span>
                                    </div>
                                    <p></p>
                                </div>

                            <p class="mb-2 text-gray-500 dark:text-gray-400">${data.review.review_message}</p>
                        </article>
                        <form action="javascript:updateReview()" class="hidden" method="POST" id="form-review" name="form-review"
                            enctype="multipart/form-data">
                            <input type="hidden" name="star-input" id="star-input">

                            <div class="flex justify-start mt-5 mb-5" id="star-rating">
                            </div>
                            <div class="flex items-center mb-10">
                                <input type="file" id="file-input" multiple style="display: none;">
                                <input type="text" name="inp-review" id="inp-review" placeholder="Add your review"
                                    class="w-3/4 rounded-full p-3 border-gray-200">
                                <button type="button" id="btn-open-file"
                                    class="button-openfile bg-figma-btn-blue rounded-full w-12 h-12 flex items-center justify-center ml-2 hover:bg-blue-500">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 36 36">
                                        <path fill="white"
                                            d="M32 8h-7.3l-1.06-2.72A2 2 0 0 0 21.78 4h-7.56a2 2 0 0 0-1.87 1.28L11.3 8H4a2 2 0 0 0-2 2v20a2 2 0 0 0 2 2h28a2 2 0 0 0 2-2V10a2 2 0 0 0-2-2m0 22H4V10h8.67l1.55-4h7.56l1.55 4H32Z"
                                            class="clr-i-outline clr-i-outline-path-1" />
                                        <path fill="white"
                                            d="M9 19a9 9 0 1 0 9-9a9 9 0 0 0-9 9m16.4 0a7.4 7.4 0 1 1-7.4-7.4a7.41 7.41 0 0 1 7.4 7.4"
                                            class="clr-i-outline clr-i-outline-path-2" />
                                        <path fill="white" d="M9.37 12.83a.8.8 0 0 0-.8-.8h-2.4a.8.8 0 0 0 0 1.6h2.4a.8.8 0 0 0 .8-.8"
                                            class="clr-i-outline clr-i-outline-path-3" />
                                        <path fill="white"
                                            d="M12.34 19a5.57 5.57 0 0 0 3.24 5l.85-1.37a4 4 0 1 1 4.11-6.61l.86-1.38A5.56 5.56 0 0 0 12.34 19"
                                            class="clr-i-outline clr-i-outline-path-4" />
                                        <path fill="none" d="M0 0h36v36H0z" />
                                    </svg>
                                </button>
                                <button type="submit" id="btn-submit"
                                    class="create-review-button hidden text-white bg-figma-btn-blue rounded-full w-12 h-12 flex items-center justify-center ml-2 hover:bg-blue-500"><svg
                                        xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24">
                                        <path fill="white"
                                            d="M11 16V7.85l-2.6 2.6L7 9l5-5l5 5l-1.4 1.45l-2.6-2.6V16zm-7 4v-5h2v3h12v-3h2v5z" />
                                    </svg></button>
                        </form>`);
                    }
                })
                .catch(function(error) {
                    console.error('Ada masalah dalam mengambil data:', error);
                });
        } else {
            // window.location = '/destination'
        }
    }
</script>
