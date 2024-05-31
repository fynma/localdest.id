<!DOCTYPE html>
<html lang="en">

<head>
    @include('package.headerpack')
    <title>Open News</title>
</head>

<body>
    @include('package.penunjang.navbar')

    <div class="container-title mx-auto p-4 mt-48 mb-10">

        <div class="header-section inline-flex leading-normal">
            <div class="title-page w-5/12 object-center text-base text-center text-slate-400">
                News / Detail News
            </div>
            <div class="title-news w-7/12">
                <div class="title-gede text-3xl mb-4 font-bold">
                    Lorem ipsum dolor sit amet consectetur. In sed egestas odio quis augue.
                </div>
                <div class="tanggal text-slate-400">
                    February, 13th 2024 | By Sheila Rahma
                </div>
            </div>
        </div>

    </div>

    <section id="hero-section" class="relative" style="">
        <img src="/storage/bromo.png" alt="" class="w-screen h-screen">
        {{-- <div class="absolute inset-0 bg-black bg-opacity-40 p-4 pb-0 pl-32   lg-bigger:pt-20 flex items-center">
            <div class="container mx-auto flex items-center justify-between" style="margin-top: auto">
            </div>
        </div> --}}
    </section>

    <div class="container mx-auto p4 mt-20">
        <div class="flex justify-between">
            <div id="share" class="ml-5 p-3 dark:bg-gray-700 rounded-lg">
                <p class="font-semibold mb-5">Share with friends</p>
                <div class="flex justify-start gap-2 mb-5">
                    <a href="https://facebook.com"
                        class="bg-blue-600 text-white p-3 rounded-full flex items-center justify-center w-10 h-10">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="https://twitter.com"
                        class="bg-blue-400 text-white p-3 rounded-full flex items-center justify-center w-10 h-10">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a href="https://instagram.com"
                        class="bg-pink-500 text-white p-3 rounded-full flex items-center justify-center w-10 h-10">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a href="https://wa.me"
                        class="bg-green-500 text-white p-3 rounded-full flex items-center justify-center w-10 h-10">
                        <i class="fab fa-whatsapp"></i>
                    </a>
                </div>
            </div>

            <div class="teks-berita w-9/12">
                <p class="mb-5 mt-5">Lorem ipsum dolor sit amet consectetur. Cursus id aliquet odio erat nisl
                    eget cras risus
                    senectus. Suspendisse eu nam eget pellentesque. Faucibus tempor purus facilisi enim egestas
                    porta lectus vulputate. Sed pretium eget tempus tempus risus fringilla dui eget imperdiet.
                    Ut lobortis nec nunc eu dignissim eu orci enim. Amet nibh at ante eget varius leo cursus.
                    Ultrices eu cum diam quis ultrices ullamcorper pharetra iaculis.
                    Blandit quis tincidunt eros velit odio lectus faucibus sed. Arcu fames cursus odio vel donec
                    consectetur faucibus pulvinar fringilla. </p>
                <div class="grid gap-4 mb-4 grid-cols-2">
                    <div class="col-span-2 sm:col-span-1">
                        <img src="/storage/wisata/pantai2.jpg" alt="">
                    </div>
                    <div class="col-span-2 sm:col-span-1">
                        <img src="/storage/wisata/pantai2.jpg" alt="">
                    </div>
                </div>
                <p class="font-semibold mt-5 mb-5">Lorem ipsum dolor sit amet consectetur. Pellentesque mi et
                    praesent sapien vitae sapien eget.</p>
                <p class="mt-5 mb-5">Lorem ipsum dolor sit amet consectetur. Sagittis ac mi ut id diam lacinia
                    integer amet. Quam tempus porttitor massa senectus molestie metus cursus morbi fringilla.
                    Eget pellentesque volutpat id gravida gravida massa. Diam a sit integer bibendum pulvinar
                    viverra facilisi semper. Convallis vitae purus ridiculus ultrices bibendum adipiscing dui.
                    Cursus nec suspendisse risus eget ut eleifend. Id duis sem purus sed amet nisl tempus
                    pretium.</p>
                <p class="mt-5 mb-5">Lorem ipsum dolor sit amet consectetur. Tellus enim turpis ac viverra
                    lectus. Ullamcorper consectetur tellus eget pharetra ornare maecenas ipsum at lacus. Metus
                    aliquam est nulla nisl erat. In turpis viverra purus egestas amet adipiscing. Congue nec
                    massa ante aliquet hac ut non.</p>
                <p class="mt-5 mb-5">Lorem ipsum dolor sit amet consectetur. Nulla libero condimentum risus
                    eros. Semper egestas senectus ornare est faucibus duis senectus ut. Ultrices augue duis
                    gravida et.</p>
                <p class="mt-5 mb-5">Lorem ipsum dolor sit amet consectetur. Sagittis ac mi ut id diam lacinia
                    integer amet. Quam tempus porttitor massa senectus molestie metus cursus morbi fringilla.
                    Eget pellentesque volutpat id gravida gravida massa. Diam a sit integer bibendum pulvinar
                    viverra facilisi semper. Convallis vitae purus ridiculus ultrices bibendum adipiscing dui.
                    Cursus nec suspendisse risus eget ut eleifend. Id duis sem purus sed amet nisl tempus
                    pretium.</p>
                <p class="mt-5 mb-5">Lorem ipsum dolor sit amet consectetur. Cursus id aliquet odio erat nisl
                    eget cras risus senectus. Suspendisse eu nam eget pellentesque. Faucibus tempor purus
                    facilisi enim egestas porta lectus vulputate. Sed pretium eget tempus tempus risus fringilla
                    dui eget imperdiet. Ut lobortis nec nunc eu dignissim eu orci enim. Amet nibh at ante eget
                    varius leo cursus. Ultrices eu cum diam quis ultrices ullamcorper pharetra iaculis.
                    <br>Blandit quis tincidunt eros velit odio lectus faucibus sed. Arcu fames cursus odio vel
                    donec
                    consectetur faucibus pulvinar fringilla.
                </p>
            </div>
        </div>
    </div>

    @include('package.penunjang.footer')
    @include('package.footerpack')

</body>

</html>
