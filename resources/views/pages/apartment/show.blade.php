<x-layouts.app title="{{ $apartment->getMetaTitle() }}" description="{{ $apartment->getMetaDesc() }}">

    <x-layouts.app-wrapper :apartment="$apartment">


        @include('pages.apartment.partials.header')
        @include('pages.apartment.partials.about')

        <x-features />

        @include('pages.apartment.partials.rooms')

        <x-cta />


        @include('pages.apartment.partials.testimonials')
        @include('pages.apartment.partials.local-attractions')




    </x-layouts.app-wrapper>

</x-layouts.app>