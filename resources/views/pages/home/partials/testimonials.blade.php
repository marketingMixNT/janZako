<section class="pt-20 pb-8 ">

    <x-container class="max-w-screen-xl mx-auto space-y-20">

        <x-heading-horizontal title="{{__('home.testimonials.heading')}}">
            <x-text>{{__('home.testimonials.text')}}</x-text>
           
            <x-rating source="google" rate="4.60" href="https://www.google.com/maps/place/Hotel+Jan/@50.0596807,19.9350756,17z/data=!3m1!4b1!4m9!3m8!1s0x47165b1270181b39:0x464594929c77cd02!5m2!4m1!1i2!8m2!3d50.0596807!4d19.9376505!16s%2Fg%2F1tt1rfhd?entry=ttu&g_ep=EgoyMDI0MDkxOC4xIKXMDSoASAFQAw%3D%3D" reviews="580 {{__('home.testimonials.reviews')}}" />
            <x-rating source="tripAdvisor" rate="4.50" href="https://www.tripadvisor.com/Hotel_Review-g274772-d519743-Reviews-Hotel_Jan-Krakow_Lesser_Poland_Province_Southern_Poland.html" reviews="660 {{__('home.testimonials.reviews')}}" />
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










{{-- <section class="section px-6 md:px-12">
    <div class="max-w-screen-lg mx-auto relative px-4 sm:px-32 md:px-12 xl:px-0">

    </div>

</section> --}}