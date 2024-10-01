<section class="pt-20 pb-8 ">

    <x-container class="max-w-screen-xl mx-auto space-y-20">

        <x-heading-horizontal title="Słowa naszych gości mówią wszystko">
            <x-text>Naszym priorytetem jest zapewnienie komfortu i wyjątkowych wrażeń. Z dumą dzielimy się opiniami
                osób, które odwiedziły nasz hotel i doświadczyły naszej gościnności. Przeczytaj, co o nas mówią, i
                przekonaj się, dlaczego warto nas odwiedzić!</x-text>

            <x-rating source="google" rate="{{$apartment->google_reviews_average}}"
                href="{{$apartment->google_reviews_link}}"
                reviews="{{$apartment->google_reviews}} {{__('home.testimonials.reviews')}}" />


            <x-rating source="tripAdvisor" rate="{{$apartment->tripadvisor_reviews_average}}"
                href="{{$apartment->tripadvisor_reviews_link}}"
                reviews="{{$apartment->tripadvisor_reviews}} {{__('home.testimonials.reviews')}}" />
        </x-heading-horizontal>


        <div class="swiper testimonial-carousel max-w-screen-md">
            <div class="swiper-wrapper ">
                @foreach ($apartment->testimonials as $testimonial)
                <x-testimonial-card :testimonial="$testimonial" />
                @endforeach

            </div>


        </div>
    </x-container>
</section>










{{-- <section class="section px-6 md:px-12">
    <div class="max-w-screen-lg mx-auto relative px-4 sm:px-32 md:px-12 xl:px-0">

    </div>

</section> --}}