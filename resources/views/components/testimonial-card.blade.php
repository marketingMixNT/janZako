@props(['testimonial'])

<div class="swiper-slide">
   
    <div class="testimonial relative mx-12 mt-12 flex flex-col gap-8 jc-center items-center">
        <img src="{{ asset('assets/icons/quote.svg') }}" alt="" class="absolute -top-7 -left-12 w-12 opacity-50 ">
        <x-text class="text-lg">{{$testimonial->content}}</x-text>
        <span class="font-text text-sm text-accent-400 tracking-widest ">{{ $testimonial->name }}, {{ $testimonial->source }}</span>
    </div>
</div>