<section class="pt-20 pb-8 ">

    <x-container class="max-w-screen-xl mx-auto space-y-20">

        <x-heading-horizontal title="Słowa naszych gości mówią wszystko">
            <x-text>Naszym priorytetem jest zapewnienie komfortu i wyjątkowych wrażeń. Z dumą dzielimy się opiniami osób, które odwiedziły nasz hotel i doświadczyły naszej gościnności. Przeczytaj, co o nas mówią, i przekonaj się, dlaczego warto nas odwiedzić!</x-text>
           
          
        </x-heading-horizontal>


        <div class="swiper testimonial-carousel max-w-screen-md">
            <div class="swiper-wrapper ">
                @foreach ($testimonials as $testimonial)
                <x-testimonial-card :testimonial="$testimonial" />
                @endforeach

            </div>


        </div>
    </x-container>
</section>
