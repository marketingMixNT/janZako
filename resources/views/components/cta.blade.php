@props(['link','cta'])

<section
    {{-- class="py-24 bg-cover bg-center bg-gray-500 bg-blend-multiply bg-no-repeat bg-fixed " style="background-image: url({{asset('assets/images/apartamenty-jan/apartamenty-jan-10.webp')}})"> --}}
    class="py-24 bg-cover bg-center bg-gray-500 bg-blend-multiply bg-no-repeat bg-fixed " style="background-image: url({{asset($cta->image)}})">


    <x-container class="max-w-screen-xl flex flex-col justify-center items-center gap-8 text-white py-20 mx-auto">


        <h2 class="text-center text-5xl 2xl:text-6xl  tracking-wider font-heading font-extralight ">
            {{$cta->title}}
        </h2>
        <x-text>{{$cta->subtitle}}</x-text>

        {{-- <x-ui.link-button aria_label="Zarezerwuj" href="{{ $link ?? url('https://booking.profitroom.com/' . str_replace('_', '-', app()->getLocale()) . '/willajan/home?currency=PLN') }}" --}}
        <x-ui.link-button aria_label="Zarezerwuj" href="{{$link ? $link : $cta->link}}"


            target="_blank" rel="noreferrer nofollow">
            Zarezerwuj</x-ui.link-button>

    </x-container>

</section>