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
</script>
