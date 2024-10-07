<section class="pt-20 pb-8 ">

    <x-container class="max-w-screen-xl mx-auto space-y-20">

        <x-heading-horizontal title="{{__('testimonials.heading')}}">
            <x-text>{{__('testimonials.text')}}</x-text>

            @if($apartment->google_reviews_average && $apartment->google_reviews)
            <x-rating source="google" rate="{{ $apartment->google_reviews_average }}"
                href="{{ $apartment->google_reviews_link }}" reviews="{{ $apartment->google_reviews }} {{__('testimonials.reviews')}}" />
            @endif

            @if($apartment->tripadvisor_reviews_average && $apartment->tripadvisor_reviews)
            <x-rating source="tripAdvisor" rate="{{$apartment->tripadvisor_reviews_average}}"
                href="{{$apartment->tripadvisor_reviews_link}}" reviews="{{$apartment->tripadvisor_reviews}} {{__('testimonials.reviews')}}" />
        </x-heading-horizontal>
        @endif


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