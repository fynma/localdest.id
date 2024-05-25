<!DOCTYPE html>
<html lang="en">
@include('package.headerpack')
<title>gils</title>
<style>
    /* .splide__slide img {
        width: 100%;
        height: auto;
    } */
</style>
<script>
           mode = 'light' // set 'light' untuk perubahan warna dasar navbar
</script>
<body class="bg-gray-100">
    @include('package.penunjang.navbar')

    <div class="container mx-auto mt-20 ">
        <div class="contact-form-section ">
            <div class=" flex justify-start mt-5">
                <div class="flex items-center">
                    <hr class="border-t-2 border-figma-textblue w-8 mr-2">
                    <span class="text-figma-textblue font-bold text-xl">About</span>
                </div>
            </div>
            <h1 class="font-bold text-4xl mt-5">
                Translucent Travel Exploring the World's Best Destinations at Your Fingertips
            </h1>
            <p class="mt-5">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley
                of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also
                the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s
                with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop
                publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
            <p class="mt-5">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley
                of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also
                the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s
                with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop
                publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>

        </div>

        {{-- <div class="explore-section flex justify-start mt-5">
            <h1 class="font-bold text-4xl">Explore new destinations arround ! </h1>
            <hr class="h-px my-8 bg-dark border-0 dark:bg-gray-700">

        </div> --}}
    </div>
   
    @include('package.penunjang.footer')

  


    @include('package.footerpack')
   
</body>

</html>
