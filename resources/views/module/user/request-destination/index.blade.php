<!DOCTYPE html>
<html lang="en">
@include('package.headerpack')
<title>Localdest - Destination</title>
<link rel="icon" type="image/png" href="/storage/vector/logo-localdest.jpg">
<style>
    /* .splide__slide img {
        width: 100%;
        height: auto;
    } */
    .splide__pagination {
        display: none
    }

    .splide__arrow {
        display: none
    }
</style>
<script>
    mode = 'light' // set 'light' untuk perubahan warna dasar navbar
</script>

<body>
    @include('package.penunjang.navbar')

    <div class="container mx-auto py-20">
        <div class="text-black mr-20 text-4xl mt-10">
            <h1 class="font-poppins font-bold leading-relaxed">
                Add a New Destination For Us </h1>
        </div>
        <div class="p-sec mt-5">
            <p>
                Lorem ipsum dolor sit amet consectetur. Arcu arcu eget auctor auctor parturient ac quisque ultrices. In
                molestie arcu turpis luctus tortor et.
            </p>
        </div>
        <div class="flex justify-between gap-5">
            <form class="request-destination-form mt-10 w-3/4" name="form-request" method="POST"
                action="javascript:createDest()" enctype="multipart/form-data">

                @csrf
                <input type="hidden" name="inp-latitude" id="inp-latitude">
                <input type="hidden" name="inp-longitude" id="inp-longitude">

                <div class="grid gap-4 mb-4 grid-cols-2">
                    <div class="col-span-2">
                        <label for="titledestination"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Title
                            Destination</label>
                        <input type="titledestination" name="title-destination" id="title-destination"
                            class="bg-white border border-gray-200 text-gray-900 text-sm focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            placeholder="Enter Name" required="">
                    </div>
                    <div class="col-span-2 mt-2">
                        <label for="description"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Description</label>
                        {{-- <input type="text" name="name" id="name"
                        class="bg-white border border-gray-200 text-gray-900 text-sm focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                        placeholder="Enter your Name" required=""> --}}
                        <textarea name="description" id="description" cols="30" rows="10" placeholder="Enter Description"
                            class="bg-white border border-gray-200 text-gray-900 text-sm focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"></textarea>
                    </div>
                    <div class="col-span-2 mt-2">
                        <label for="address" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Address <span class="text-xs text-red-500">(Max 100 Char)</span></label>
                        <input type="address" name="address" id="address" maxlength="100"
                            class="bg-white border border-gray-200 text-gray-900 text-sm focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            placeholder="Enter Address" required="">
                    </div>
                    
                    {{-- <div class="col-span-2 mt-2">
                        <label for="imgthumb" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                            Image Thumbnail</label>

                        <div class="flex items-center justify-center w-full">
                            <label for="dropzone-file"
                                class="flex flex-col items-center justify-center w-full h-64 border border-gray-200 cursor-pointer bg-white dark:hover:bg-bray-800 dark:bg-gray-700 hover:bg-gray-100 dark:border-gray-600 dark:hover:border-gray-500 dark:hover:bg-gray-600">
                                <div class="flex flex-col items-center justify-center pt-5 pb-6">
                                    <svg class="w-8 h-8 mb-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 16">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2"
                                            d="M13 13h3a3 3 0 0 0 0-6h-.025A5.56 5.56 0 0 0 16 6.5 5.5 5.5 0 0 0 5.207 5.021C5.137 5.017 5.071 5 5 5a4 4 0 0 0 0 8h2.167M10 15V6m0 0L8 8m2-2 2 2" />
                                    </svg>
                                    <p class="mb-2 text-sm text-gray-500 dark:text-gray-400"><span
                                            class="font-semibold">Click to upload</span> or drag and drop</p>
                                    <p class="text-xs text-gray-500 dark:text-gray-400">SVG, PNG, JPG or GIF (MAX.
                                        800x400px)</p>
                                </div>
                                <input id="dropzone-file" type="file" class="hidden" />
                            </label>
                        </div>

                    </div> --}}
                    <div class="col-span-2 mt-2">
                        <label for="imgthumb" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                            Image Thumbnail</label>

                        <div class="flex items-center justify-center w-full">
                            <label for="dropzone-file"
                                class="flex flex-col items-center justify-center w-full h-64 border border-gray-200 cursor-pointer bg-white dark:hover:bg-gray-800 dark:bg-gray-700 hover:bg-gray-100 dark:border-gray-600 dark:hover:border-gray-500 dark:hover:bg-gray-600">
                                <div id="image-preview" class="flex flex-col items-center justify-center pt-5 pb-6">
                                    <svg class="w-8 h-8 mb-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 16">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2"
                                            d="M13 13h3a3 3 0 0 0 0-6h-.025A5.56 5.56 0 0 0 16 6.5 5.5 5.5 0 0 0 5.207 5.021C5.137 5.017 5.071 5 5 5a4 4 0 0 0 0 8h2.167M10 15V6m0 0L8 8m2-2 2 2" />
                                    </svg>
                                    <p id="upload-instructions" class="mb-2 text-sm text-gray-500 dark:text-gray-400">
                                        <span class="font-semibold">Click to upload</span> or drag and drop
                                    </p>
                                    <p class="text-xs text-gray-500 dark:text-gray-400">SVG, PNG, JPG or GIF (MAX.
                                        800x400px)</p>
                                </div>
                                <input id="dropzone-file" name="thumbnail-file" type="file" class="hidden" />
                            </label>
                        </div>

                    </div>

                    {{-- <div class="col-span-2 border-b-2 mt-2">
                        <div class="flex justify-between">
                            <label for="fileattch" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                File Attachment</label>
                            <div class="add-new flex items-center gap-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="1.2em" height="1.2em"
                                    viewBox="0 0 16 16">
                                    <path fill="#0086C9"
                                        d="M8 0a8 8 0 1 1 0 16A8 8 0 0 1 8 0m1.062 4.312a1 1 0 1 0-2 0v2.75h-2.75a1 1 0 0 0 0 2h2.75v2.75a1 1 0 1 0 2 0v-2.75h2.75a1 1 0 1 0 0-2h-2.75Z" />
                                </svg>
                                <label for="fileattch" class="text-sm font-medium text-figma-textblue dark:text-white">
                                    Add new
                                </label>
                            </div>
                        </div>
                        <input type="file" id="fileattch" multiple class="hidden">
                        <span class="text-gray-400 font-semibold">2 Files</span>
                        <div class="file-item flex justify-between items-center bg-white mt-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="2em" height="2em" viewBox="0 0 24 24">
                                <path fill="#98A2B3"
                                    d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8zM9.239 16.446c0 1.152-.551 1.554-1.438 1.554c-.21 0-.486-.036-.665-.097l.101-.737c.127.042.289.072.469.072c.384 0 .623-.174.623-.804v-2.543h.911zm3.294-.365c-.313.293-.773.426-1.313.426c-.12 0-.228-.007-.312-.019v1.445h-.906v-3.988a7.528 7.528 0 0 1 1.236-.083c.563 0 .965.107 1.234.323c.259.204.433.54.433.936s-.133.732-.372.96m4.331 1.667c-.28.096-.815.228-1.349.228c-.737 0-1.271-.186-1.643-.546c-.371-.348-.575-.875-.57-1.469c.007-1.344.983-2.111 2.309-2.111c.521 0 .924.103 1.121.198l-.191.731c-.222-.096-.497-.174-.941-.174c-.761 0-1.338.432-1.338 1.308c0 .833.523 1.325 1.271 1.325c.211 0 .378-.024.451-.061v-.846h-.624v-.713h1.504zM14 9h-1V4l5 5z" />
                                <path fill="#98A2B3"
                                    d="M11.285 14.552c-.186 0-.312.018-.377.036v1.193c.077.018.174.023.307.023c.484 0 .784-.246.784-.659c0-.372-.257-.593-.714-.593" />
                            </svg>
                            <div class="flex-1 ml-5">
                                <span class="text-figma-textblue">Image1.jpg</span>
                                <br>
                                <span class="text-gray-500 text-sm">1.5 MB</span> 
                            </div>
                            <div class="flex-1 ml-4 flex justify-end">

                                <span class="text-gray-400 me-2 text-sm">21 Februari 2024 12.24</span>

                                <button class="ml-4 text-red-500 bg-red-50 p-1 rounded" aria-label="Close">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="1.2em" height="1.2em"
                                        viewBox="0 0 20 20">
                                        <path fill="#F04438"
                                            d="m6 2l2-2h4l2 2h4v2H2V2zM3 6h14l-1 14H4zm5 2v10h1V8zm3 0v10h1V8z" />
                                    </svg>
                                </button>
                            </div>
                        </div>
                        <div class="file-item flex justify-between items-center bg-white mt-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="2em" height="2em"
                                viewBox="0 0 24 24">
                                <path fill="#98A2B3"
                                    d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8zM9.239 16.446c0 1.152-.551 1.554-1.438 1.554c-.21 0-.486-.036-.665-.097l.101-.737c.127.042.289.072.469.072c.384 0 .623-.174.623-.804v-2.543h.911zm3.294-.365c-.313.293-.773.426-1.313.426c-.12 0-.228-.007-.312-.019v1.445h-.906v-3.988a7.528 7.528 0 0 1 1.236-.083c.563 0 .965.107 1.234.323c.259.204.433.54.433.936s-.133.732-.372.96m4.331 1.667c-.28.096-.815.228-1.349.228c-.737 0-1.271-.186-1.643-.546c-.371-.348-.575-.875-.57-1.469c.007-1.344.983-2.111 2.309-2.111c.521 0 .924.103 1.121.198l-.191.731c-.222-.096-.497-.174-.941-.174c-.761 0-1.338.432-1.338 1.308c0 .833.523 1.325 1.271 1.325c.211 0 .378-.024.451-.061v-.846h-.624v-.713h1.504zM14 9h-1V4l5 5z" />
                                <path fill="#98A2B3"
                                    d="M11.285 14.552c-.186 0-.312.018-.377.036v1.193c.077.018.174.023.307.023c.484 0 .784-.246.784-.659c0-.372-.257-.593-.714-.593" />
                            </svg>
                            <div class="flex-1 ml-5">
                                <span class="text-figma-textblue">Image2.jpg</span>
                                <br>
                                <span class="text-gray-500 text-sm">1.5 MB</span> 
                            </div>
                            <div class="flex-1 ml-4 flex items-center">
                                <div class="flex-1">
                                    <div class="flex items-center">
                                        <span class="text-gray-400 text-sm me-2">50%</span>

                                        <div
                                            class="flex progress-container border h-3 p-0.5 rounded-lg w-full items-center">
                                            <div class="progress-bar bg-figma-progress-blue h-2 rounded"
                                                id="progress-${i}" style="width: 50%;"></div>
                                        </div>
                                    </div>
                                </div>
                                <button class="ml-4 text-red-500" aria-label="Close">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="1.2em" height="1.2em"
                                        viewBox="0 0 16 16">
                                        <path fill="#F04438"
                                            d="m8.746 8l3.1-3.1a.527.527 0 1 0-.746-.746L8 7.254l-3.1-3.1a.527.527 0 1 0-.746.746l3.1 3.1l-3.1 3.1a.527.527 0 1 0 .746.746l3.1-3.1l3.1 3.1a.527.527 0 1 0 .746-.746zM8 16A8 8 0 1 1 8 0a8 8 0 0 1 0 16" />
                                    </svg>
                                </button>
                            </div>
                        </div>


                    </div> --}}
                    <div class="col-span-2 border-b-2 mt-2">
                        <div class="flex justify-between">
                            <label for="fileattch"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">File
                                Attachment</label>
                            <div class="add-new flex items-center gap-2 cursor-pointer" onclick="openFolder()">
                                <svg xmlns="http://www.w3.org/2000/svg" width="1.2em" height="1.2em"
                                    viewBox="0 0 16 16">
                                    <path fill="#0086C9"
                                        d="M8 0a8 8 0 1 1 0 16A8 8 0 0 1 8 0m1.062 4.312a1 1 0 1 0-2 0v2.75h-2.75a1 1 0 0 0 0 2h2.75v2.75a1 1 0 1 0 2 0v-2.75h2.75a1 1 0 1 0 0-2h-2.75Z" />
                                </svg>
                                <label for=""
                                    class="text-sm font-medium text-blue-600 dark:text-white cursor-pointer">Add
                                    new</label>
                            </div>
                        </div>
                        <input type="file" id="fileattch" name="fileattch" multiple class="hidden">
                        <span class="text-gray-400 font-semibold" id="file-count">0 Files</span>
                        <div id="file-list"></div>
                    </div>
                </div>
                <button type="submit" id="create-dest-button"
                    class="text-white inline-flex items-center justify-center hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                    style="background-color: #0B76BC;">
                    Apply New Destination
                </button>
            </form>
            <div class="mt-10 w-1/4 h-64 sm:p-6" id="maps-selector">

            </div>
        </div>
    </div>

    {{-- <div class="container h-full">
        <div class="lg:order-first">
            <div class="grid grid-cols-1 gap-8">
                <div class="max-w-md p-8">
                    <div class="relative" style="padding-bottom: 100px">
                        <img src="{{ asset('storage/vec1.png') }}" alt="Foto"
                            class="absolute left-72 top-28 ml-24 -mb-8">
                        <!-- Video -->
                        <img src="{{ asset('storage/vidprev.png') }}" alt="Foto"
                            class="absolute left-0 top-0 rounded-xl">
                        <!-- Foto -->
                        <!-- Foto -->
                        <img src="{{ asset('storage/dot.png') }}" alt="Foto"
                            class="absolute left-0 top-72  -mb-8 ">
                        <img src="{{ asset('storage/caro1.png') }}" alt="Foto"
                            class="absolute left-48 top-52 w-80 h-48   -mb-8 ">
                    </div>
                </div>
            </div>
        </div>
    </div>   --}}

    @include('package.penunjang.footer')
    @include('module.user.request-destination.script')




    @include('package.footerpack')

</body>

</html>
