<div class="swiper hero-carousel relative w-full h-[90vh]  md:h-screen  ">
    <div class="swiper-wrapper">
        {{-- HEADING --}}
        <h1 class="absolute top-1/2 left-0 right-0 -translate-y-1/2 px-6 md:px-12 text-center text-5xl md:text-8xl 2xl:text-9xl font-heading text-fontWhite tracking-wide z-50"
            style="line-height: .6">
            {{$apartment->title}} <br> <span
                class="text-xl sm:text-2xl font-text ">{{$apartment->slider_heading}}</span>
        </h1>

        {{-- SLIDES --}}
        @foreach ($apartment->slider_images as $image)
        <div class="swiper-slide relative w-full h-full">
            <img src="{{asset('storage/' .  $image)}}" alt="{{$apartment->title}}"
                class="absolute inset-0 w-full h-full object-cover hidden sm:block" />
            <div class="absolute inset-0 bg-black opacity-50"></div>
        </div>
        @endforeach

        {{-- RESERVATION PANEL --}}
        <div
            class="be-panel hidden md:block absolute bottom-44 left-0 right-0 md:mx-6 lg:mx-32 2xl:mx-0 2xl:left-1/2 2xl:transform 2xl:-translate-x-1/2 bg-white">
        </div>
        <x-ui.link-button type='primary' class="md:hidden absolute mt-12 bottom-32 left-1/2 transform -translate-x-1/2"
            href="{{$apartment->booking_link}}" target="_blank"
            aria-label="Rezerwuj">Zarezeruj</x-ui.link-button>

        {{-- ANCHOR --}}
        <a href="{{route('apartment.show',$apartment->slug)}}#o-nas" class="absolute bottom-6 2xl:bottom-12 left-1/2 transform -translate-x-1/2 z-50"
            aria-label="Przejdź do sekcji o nas">
            <x-lucide-arrow-down-circle class="animate-pulse w-8 md:w-12 text-white" />
        </a>
    </div>
</div>
