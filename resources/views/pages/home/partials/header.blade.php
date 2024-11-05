<div class="swiper hero-carousel relative w-full h-[95vh]  md:h-[80vh]  ">
    <div class="swiper-wrapper">
        {{-- HEADING --}}

        <h1 class="absolute top-1/2 left-0 right-0 -translate-y-1/2 px-6 md:px-12 text-center text-5xl md:text-8xl 2xl:text-9xl    font-heading  text-fontWhite  tracking-wide z-50">
            {{$home->slider_title}} <br> <span class=" text-xl sm:text-2xl font-text ">
                {{$home->slider_subtitle}}</span>
        </h1>



        @foreach ($home->slider_images as $image)
        {
        <div class="swiper-slide relative w-full h-full ">


            <img src="{{asset('storage/' .  $image)}}" alt="apartamenty Jan w Zakopanem"
                class="absolute inset-0 w-full h-full object-cover " />

            <div class="absolute inset-0 bg-black opacity-50"></div>
        </div>
        }
        @endforeach

        {{-- ANCHOR --}}
        <a href="#{{__('sections.about')}}" class="absolute bottom-6 2xl:bottom-12 left-1/2 transform -translate-x-1/2 z-50"
            aria-label="Przejdź do sekcji o nas">

            <x-lucide-arrow-down-circle class="animate-pulse w-8 md:w-12 text-white" />


        </a>
    </div>
</div>

<div class="booking pt-6 max-w-screen-xl mx-auto px-6"></div>
