<script>
    APP_URL = "{{ getenv('APP_URL') }}/";

    $(() => {
        init();
        // $('.menu-link').removeClass('active');
        // $('.dashboard').addClass('active');
    });

    init = async () => {
        await loadPagination();

    }

    function loadPagination() {

        axios.post(APP_URL + 'api/destination/index', {
                _token: '{{ csrf_token() }}',
            })
            .then(function(response) {
                var data = response.data;
                console.log(data)


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
            })
            .catch(function(error) {
                console.error('Ada masalah dalam mengambil data:', error);
            });
    }

    function paginationTemplate(data) {
        var listingPagination = '';
        $.each(data, function(index, item) {
            console.log(item)
            listingPagination += `<div class="relative" onclick="window.location.href='/detail-destination?dest=${item.destination_id}'">
                                        <div class="photo-container h-80 w-full relative cursor-pointer">
                                            <div class="absolute inset-0 bg-black bg-opacity-50 rounded-xl"></div>
                                            <img src="${item.destination_thumbnail ? '/storage/uploaded-thumbnail/' + item.destination_thumbnail : '/storage/no-img.webp'}" alt="Photo 1" class="w-full h-full object-cover rounded-xl">
                                            <div class="absolute bottom-0 left-0 right-0 text-white p-4">
                                                <p class="text-sm font-bold">${item.destination_name}</p>
                                                <p class="address">${item.destination_address}</p>
                                                <p class="rating">4.2 ⭐⭐⭐</p>
                                            </div>
                                        </div>
                                    </div>`;
        });
        return listingPagination;
    }

    //searchbar 
    const searchInput = $('#search-bar');
    const tagsContainer = $(
            `<div class="bg-white border w-100 absolute container mx-auto p-4 pt-2 mt-2 z-10" style="display: none;"></div>`
            )
        .insertAfter(searchInput);

    // Load last search query from local storage
    const lastSearch = localStorage.getItem('lastSearch');
    if (lastSearch) {
        searchInput.val(lastSearch);
    }

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

            // Create the tag container HTML with the list of tags
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
    searchInput.on('input', function() {
        const query = $(this).val().toLowerCase();
        localStorage.setItem('lastSearch', query); // Save search query to local storage
        $('.tag').each(function() {
            const tagText = $(this).text().toLowerCase();
            if (tagText.includes(query)) {
                $(this).show();
            } else {
                $(this).hide();
            }
        });

        // Show tagsContainer when there is input
        if (query) {
            tagsContainer.show();
        } else {
            tagsContainer.hide();
        }
    });

    // Handle tag selection
    tagsContainer.on('click', '.tag', function() {
        console.log(this);
        const selectedTag = $(this).find('.tag-value').text();
        console.log(selectedTag);
        searchInput.val(selectedTag);
        localStorage.setItem('lastSearch', selectedTag);
        tagsContainer.hide();
    });

    // Hide tags when clicking outside
    $(document).on('click', function(e) {
        if (!$(e.target).closest('.tags-container, #search-bar').length) {
            tagsContainer.hide();
        }
    });

    // Show tags when clicking on the input
    searchInput.on('focus', function() {
        if (searchInput.val()) {
            tagsContainer.show();
        }
    });
</script>
