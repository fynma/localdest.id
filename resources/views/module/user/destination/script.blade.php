<script>
    APP_URL = "{{ getenv('APP_URL') }}/";

    $(() => {

        init();
        // $('.menu-link').removeClass('active');
        // $('.dashboard').addClass('active');
    });

    init = async () => {
        await loadFilter()
        await loadPagination();
        await loadNewestDestination();
    }

    function loadFilter() {
        quick.getProvince('province-filter')

        $('#category-filter').select2({
            placeholder: '--Choose Category-- ',
            allowClear: true
        });

        $('#category-filter').val('').trigger('change');

        $('#star-filter').select2({
            placeholder: '--Choose Star-- ',
            allowClear: true
        });

        $('#star-filter').val('').trigger('change');
     
        $('#category-filter').attr('onchange', 'filterCategory(this.value)');
        $('#star-filter').attr('onchange', 'filterStar(this.value)');
        $('#province-filter').attr('onchange', 'filterProvince(this.value)');



    }

    function loadNewestDestination() {
        axios.post(APP_URL + 'api/destination/getDestNewest', {
                _token: '{{ csrf_token() }}',
            })
            .then(function(response) {
                var data = response.data;
                console.log(data)
                let newestDestination = '';

                $.each(data, function(index, item) {
                    newestDestination = `<div class="splide__slide relative" onclick="window.location.href='/detail-destination?dest=${item.destination_id}'">
                            <div class="photo-container h-80 w-full relative cursor-pointer">
                                <div class="absolute inset-0 bg-black bg-opacity-50"></div>
                                <img src="${item.destination_thumbnail ? '/storage/uploaded-thumbnail/' + item.destination_thumbnail : '/storage/no-img.webp'}" alt="Photo 1" class="w-full h-full object-cover">
                                <div class="absolute bottom-0 left-0 right-0 text-white p-4">
                                     <p class="text-sm font-bold">${item.destination_name}</p>
                                    <p class="address">${item.destination_city_name + ' | ' + item.destination_province_name}</p>
                                    <p class="rating">4.2 ⭐⭐⭐</p>
                                </div>
                            </div>
                        </div>`
                    $('.splide__list').append(newestDestination);

                });
                $('.splide__arrows').hide()
                var splide = new Splide('#fslider', {
                    type: 'slide',
                    perPage: 5,
                    gap: '1rem',
                    pagination: false,
                    breakpoints: {
                        768: {
                            perPage: 1
                        }
                    }
                }).mount();

                function updateProgressBar() {
                    var currentSlide = splide.index;
                    var totalSlides = Math.max(splide.length - splide.options.perPage + 1,
                        1); // Ensure totalSlides is never less than 1
                    var progressPercentage = (currentSlide + 1) / totalSlides * 100;
                    $('.progress-bar-fill').css('width', progressPercentage + '%');
                }

                updateProgressBar();

                splide.on('move', function() {
                    updateProgressBar();
                });

                $('.splide-prev').on('click', function() {
                    splide.go('<');
                });

                $('.splide-next').on('click', function() {
                    splide.go('>');
                });
            })
            .catch(function(error) {
                console.error('Ada masalah dalam mengambil data:', error);
            });
    }

    function loadPagination(query = null, province = null,  category = null, rate = null) {
        $('.not-found').empty();
        $('.impl-pagin').empty();
        $('.listing-wisata-pagination').empty();
        $('.loading-spinner-pagin').show()
        const urlParams = new URLSearchParams(window.location.search);
        query = urlParams.get('query');
        if (query != null && query != '') {
            $('#search-bar').val(query);
            $('#search-navbar').val(query);
        }
        province = urlParams.get('province');
        category = urlParams.get('category');
        rate = urlParams.get('rate');
        axios.post(APP_URL + 'api/destination/index', {
                _token: '{{ csrf_token() }}',
                query: query,
                province: province,
                category: category,
                rate: rate
            })
            .then(function(response) {
                var data = response.data;
                console.log(data);
                $('.loading-spinner-pagin').hide()
                if (data.length > 0) {
                    console.log(true)
                    $('.impl-pagin').pagination({
                        dataSource: data,
                        pageSize: 8,
                        showGoInput: false,
                        showGoButton: false,
                        prevText: '<i class="fas fa-chevron-left"></i>',
                        nextText: '<i class="fas fa-chevron-right"></i>',
                        callback: function(data, pagination) {
                            var listingPagination = paginationTemplate(data);
                            $('.listing-wisata-pagination').html(listingPagination);
                        }
                    });

                } else {
                    $('.not-found').html(`<section class="">
                            <div class="py-8 px-4 mx-auto max-w-screen-xl lg:py-16 lg:px-6">
                                <div class="mx-auto max-w-screen-sm text-center">
                                    <h1 class="mb-4 text-7xl tracking-tight font-extrabold lg:text-9xl">404</h1>
                                    <p class="mb-4 text-3xl tracking-tight font-bold md:text-4xl ">Something's missing.</p>
                                    <p class="mb-4 text-lg font-light text-gray-500 dark:text-gray-400">Sorry, we can't find that page. You'll find lots to explore on the home page. </p>
                                </div>   
                            </div>
                        </section>`);
                }

            })
            .catch(function(error) {
                console.error('Ada masalah dalam mengambil data:', error);
            });
    }

    function paginationTemplate(data) {
        var listingPagination = '';
        $.each(data, function(index, item) {
            var tagItem = '';

            console.log(item)
            $.each(item.tags, function(index, tag) {
                tagItem += `<span class="tag-listing me-1">#${tag}</span>`;
            });
            listingPagination += `<div class="relative" onclick="window.location.href='/detail-destination?dest=${item.destination_id}'">
                                        <div class="photo-container h-80 w-full relative cursor-pointer">
                                            <div class="absolute inset-0 bg-black bg-opacity-50"></div>
                                            <img src="${item.destination_thumbnail ? '/storage/uploaded-thumbnail/' + item.destination_thumbnail : '/storage/no-img.webp'}" alt="Photo 1" class="w-full h-full object-cover">
                                            <div class="absolute bottom-0 left-0 right-0 text-white p-4">
                                                <p class="text-sm font-bold">${item.destination_name}</p>
                                                <p class="address">${item.destination_city_name + ' | ' + item.destination_province_name}</p>
                                                <p class="tag-pagin">${tagItem}</p>
                                                <p class="rating">4.2 ⭐⭐⭐</p>
                                            </div>
                                        </div>
                                    </div>`;
        });
        return listingPagination;
    }
    $('#form-search-destination').on('submit', function(event) {
        // event.preventDefault();
        doSearch();
    });

    function doSearch() {
        var query = $('#search-bar').val();
        console.log(query);

        var baseUrl = window.location.href.split('#')[0];
        var hash = window.location.hash;
        var searchParams = new URLSearchParams(window.location.search);

        searchParams.set('query', query);

        var newUrl = baseUrl.split('?')[0] + '?' + searchParams.toString() + hash;
        history.pushState({}, '', newUrl);

        saveHistory(query);
        loadPagination();
    }
    function saveHistory(query) {
        axios.post(APP_URL + 'dest/saveHistorySearch', {
                _token: '{{ csrf_token() }}',
                query: query
            })
            .then(function(response) {
                console.log(response.data);
            })
            .catch(function(error) {
                console.error('Ada masalah dalam mengambil data:', error);
            });
    }
    function filterProvince(a) {
        var baseUrl = window.location.href.split('#')[0];
        var hash = window.location.hash;
        var searchParams = new URLSearchParams(window.location.search);

        // Tambahkan atau perbarui parameter province
        searchParams.set('province', a);

        // Buat URL baru dengan parameter yang diperbarui
        var newUrl = baseUrl.split('?')[0] + '?' + searchParams.toString() + hash;
        history.pushState({}, '', newUrl);

        console.log(a);
    }
    function filterCategory(a) {
        var baseUrl = window.location.href.split('#')[0];
        var hash = window.location.hash;
        var searchParams = new URLSearchParams(window.location.search);

        // Tambahkan atau perbarui parameter province
        searchParams.set('category', a);

        // Buat URL baru dengan parameter yang diperbarui
        var newUrl = baseUrl.split('?')[0] + '?' + searchParams.toString() + hash;
        history.pushState({}, '', newUrl);

        console.log(a);
    }
    function filterStar(a) {
        var baseUrl = window.location.href.split('#')[0];
        var hash = window.location.hash;
        var searchParams = new URLSearchParams(window.location.search);

        // Tambahkan atau perbarui parameter province
        searchParams.set('rate', a);

        // Buat URL baru dengan parameter yang diperbarui
        var newUrl = baseUrl.split('?')[0] + '?' + searchParams.toString() + hash;
        history.pushState({}, '', newUrl);

        console.log(a);
    }
    //searchbar 
    const searchInput = $('#search-bar');
    const tagsContainer = $(
            `<div class="search-background border w-100 absolute container mx-auto p-4 pt-2 mt-2 z-10" style="display: none;"></div>`
        )
        .insertAfter(searchInput);

    // Load last search query from local storage
    // const lastSearch = localStorage.getItem('lastSearch');
    // if (lastSearch) {
    //     searchInput.val(lastSearch);
    // }

    axios.post(APP_URL + 'dest/getHistory', {
            _token: '{{ csrf_token() }}',
        })
        .then(response => {
            const historyData = response.data.history;
            let listHistory  = '';
            // Loop through the tags and create HTML for each

            $.each(historyData, function(index, a) {
                listHistory += `<div class="p-1 tag mt-2 hover:bg-gray-50 cursor-pointer flex justify-between">
                        <span class="history_value">${a.value}</span>
                        <span class="text-gray-400"><svg xmlns="http://www.w3.org/2000/svg" width="1.2rem" height="1.2rem" viewBox="0 0 40 40">
                        <path fill="#000000" d="M21.499 19.994L32.755 8.727a1.064 1.064 0 0 0-.001-1.502c-.398-.396-1.099-.398-1.501.002L20 18.494L8.743 7.224c-.4-.395-1.101-.393-1.499.002a1.05 1.05 0 0 0-.309.751c0 .284.11.55.309.747L18.5 19.993L7.245 31.263a1.064 1.064 0 0 0 .003 1.503c.193.191.466.301.748.301h.006c.283-.001.556-.112.745-.305L20 21.495l11.257 11.27c.199.198.465.308.747.308a1.058 1.058 0 0 0 1.061-1.061c0-.283-.11-.55-.31-.747z" />
                    </svg></span>
                    </div>`;
            });
            // Create the tag container HTML with the list of tags
            const history = `<div class="search-by-history ">
                        <span>History</span>
                        <div class="list-history">
                            ${listHistory}
                        </div>
                     </div>`;
            $(history).appendTo(tagsContainer);
        })
        .catch(error => {
            console.error('Error fetching tags:', error);
        });
        axios.post(APP_URL + 'api/destination/getTag', {
            _token: '{{ csrf_token() }}',
        })
        .then(response => {
            const tags = response.data.count_tag;
            console.log(response.data.count_tag);
            let listTag = ''; // Gunakan 'let' bukan 'var' untuk deklarasi yang lebih modern
                                // Loop through the tags and create HTML for each
            $.each(tags, function(index, tag) {
                listTag += `<div class="p-1 tag mt-2 flex justify-between hover:bg-gray-50 cursor-pointer">
                        <span class="tag-value">#${tag.tag}</span>
                        <span class="text-gray-400">${tag.tag_count} Post</span>
                    </div>`;
            });
          
            const tagHtml = `<div class="search-by-tag">
                        <span>Search By Popular Tags</span>
                        <div class="list-tag">
                            ${listTag}
                        </div>
                     </div>`;

            // Append the constructed HTML to the tagsContainer
            $(tagHtml).appendTo(tagsContainer);
        })
        .catch(error => {
            console.error('Error fetching tags:', error);
        });
    // Filter tags based on user input
    // Event listener untuk search input
    searchInput.on('input', function() {
        const query = $(this).val().toLowerCase();


        // Menampilkan tag yang sesuai dengan input
        $('.tag').each(function() {
            const tagText = $(this).text().toLowerCase();
            if (tagText.includes(query)) {
                $(this).show();
            } else {
                $(this).hide();
            }
        });

        // Menampilkan tagsContainer ketika ada input
        if (query) {
            tagsContainer.show();
        } else {
            tagsContainer.hide();
        }
    });

    // Event listener untuk memilih tag
    tagsContainer.on('click', '.tag', function() {
        const selectedTag = $(this).find('.tag-value').text();
        const selectedHistory = $(this).find('.history_value').text();

        searchInput.val(selectedTag);
        // searchInput.val(selectedHistory);

        // localStorage.setItem('lastSearch', selectedTag);
        tagsContainer.hide();
        doSearch();
    });

    // Menyembunyikan tags ketika klik di luar area
    $(document).on('click', function(e) {
        if (!$(e.target).closest('.tags-container, #search-bar').length) {
            tagsContainer.hide();
        }
    });

    // Menampilkan tags ketika input mendapatkan fokus
    searchInput.on('focus', function() {
        tagsContainer.show();

        // if (searchInput.val()) {
        // }
    });
</script>
