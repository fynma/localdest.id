<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css','resources/js/app.js'])
    <link href="
https://cdn.jsdelivr.net/npm/@splidejs/splide@3.6.12/dist/css/splide.min.css
" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"
        integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin="" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/paginationjs/2.1.5/pagination.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/css/lightbox.min.css" rel="stylesheet">
    {{-- <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" /> --}}
    <link href="{!! asset('/storage/assets/css/select2.min.css') !!}" rel="stylesheet" />
    {{-- <link href="{!! asset('/storage/assets/css/searchbar.css') !!}" rel="stylesheet" /> --}}
    <link href="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.6.2/cropper.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.ckeditor.com/ckeditor5/42.0.0/ckeditor5.css" />

    <meta name="csrf-token" content="{{ csrf_token() }}">
    <style>
        .paginationjs-pages li {
            border: none !important;
            box-shadow: none !important;

        }

        .select2.select2-container {
            width: 100% !important;
            
        }

        .select2.select2-container .select2-selection {
            border: 1px solid #ccc;
            /* -webkit-border-radius: 3px; */
            /* -moz-border-radius: 3px; */
            /* border-radius: 3px; */
            height: 42px;
            outline: none !important;
            transition: all .15s ease-in-out;
        }
        .select2-container--default .select2-selection--single{
            border-radius: 0;
        }
        .select2-container--default .select2-selection--multiple{
            border-radius: 0;
        }
        .select2.select2-container .select2-selection .select2-selection__rendered {
            color: #333;
            line-height: 42px;
            padding-right: 33px;
        }

        .select2.select2-container .select2-selection .select2-selection__arrow {
            /* background: #f8f8f8; */
            /* border-left: 1px solid #ccc; */
            /* -webkit-border-radius: 0 3px 3px 0; */
            /* -moz-border-radius: 0 3px 3px 0; */
            /* border-radius: 0 3px 3px 0; */
            height: 42px;
            margin-top: 
            width: 33px;
        }

        .select2.select2-container.select2-container--open .select2-selection.select2-selection--single {
            background: #f8f8f8;
        }
        .select2.select2-container.select2-container--open .select2-selection.select2-selection--multiple {
            background: #f8f8f8;
        }



        .select2.select2-container.select2-container--open .select2-selection.select2-selection--multiple {
            border: 1px solid #34495e;
        }

        .select2.select2-container .select2-selection--multiple {
            height: auto;
            min-height: 34px;
        }

        .select2.select2-container .select2-selection--multiple .select2-search--inline .select2-search__field {
            margin-top: 0;
            height: 32px;
        }

        .select2.select2-container .select2-selection--multiple .select2-selection__rendered {
            display: block;
            padding: 0 4px;
            line-height: 29px;
        }

        .select2.select2-container .select2-selection--multiple .select2-selection__choice {
            background-color: #f8f8f8;
            /* border: 1px solid #ccc; */
         
            /* margin: 4px 4px 0 0; */
            /* padding: 0 6px 0 22px; */
            /* height: 24px; */
            /* line-height: 24px; */
            font-size: 12px;
            position: relative;
        }

        .select2.select2-container .select2-selection--multiple .select2-selection__choice .select2-selection__choice__remove {
          
            height: 22px;
            width: 22px;
            margin: 0;
            text-align: center;
            color: #e74c3c;
            font-weight: bold;
            font-size: 16px;
        }

        .select2-container .select2-dropdown {
            background: transparent;
            border: none;
            margin-top: -5px;
        }

        .select2-container .select2-dropdown .select2-search {
            padding: 0;
        }

        .select2-container .select2-dropdown .select2-search input {
            outline: none !important;
            border: 1px solid #34495e !important;
            border-bottom: none !important;
            padding: 4px 6px !important;
        }

        .select2-container .select2-dropdown .select2-results {
            padding: 0;
        }

        .select2-container .select2-dropdown .select2-results ul {
            background: #fff;
            border: 1px solid #34495e;
        }

        .select2-container .select2-dropdown .select2-results ul .select2-results__option--highlighted[aria-selected] {
            background-color: #3498db;
        }
        
        .select2.select2-container .select2-selection--multiple {
            border: 1px solid #ccc;
            /* -webkit-border-radius: 3px; */
            /* -moz-border-radius: 3px; */
            /* border-radius: 3px; */
            height: 42px;
            outline: none !important;
            transition: all .15s ease-in-out;
        }
        .select2.select2-container .select2-selection--multiple .select2-search--inline .select2-search__field {
            /* margin-top: 0; */
            height: 0;
        }
    </style>
</head>
