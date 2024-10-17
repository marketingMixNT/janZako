<div class="swiper hero-carousel relative w-full h-[95vh]  md:h-screen  ">
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



      



<!-- Booking -->

<div class="bottom-panel booking-panel hidden sm:block absolute bottom-32 lg:bottom-44 left-0 right-0 mx-6  lg:mx-32 2xl:mx-0 2xl:left-1/2 2xl:transform 2xl:-translate-x-1/2 bg-white">

    <form class="bottom-panel__wrap d-flex justify-content-end p-4">

        <!-- <img src="https://apartamentyjan.com.pl//layout/images/ui/bon-turystyczny@2x.png" style="max-width: 200px; margin: auto;"> -->

        <!-- <div class="be-panel"></div> -->

        <div id="zarezerwuj"></div>

        <div id="s-booking">

            <div class="container">

                <div style="border:0px solid #fff;width:100%;" id="box-booking">

                    <div id="wis2-panel" class="js-wis2-panel">

                        

                    </div>

                </div>

            </div>

        </div>

    </form>

</div>    

<!-- /Booking -->




        <x-ui.link-button type='primary' class="md:hidden absolute mt-12 bottom-32 left-1/2 transform -translate-x-1/2"
            href="{{$home->booking_link}}" target="_blank" aria-label="Rezerwuj">Rezerwuj</x-ui.link-button>

        {{-- ANCHOR --}}
        <a href="#{{__('sections.about')}}" class="absolute bottom-6 2xl:bottom-12 left-1/2 transform -translate-x-1/2 z-50"
            aria-label="Przejdź do sekcji o nas">

            <x-lucide-arrow-down-circle class="animate-pulse w-8 md:w-12 text-white" />


        </a>
    </div>
</div>


