<x-layouts.app title="{{ $apartment->getMetaTitle() }}" description="{{ $apartment->getMetaDesc() }}">


    <x-nav.navbar-rooms :apartment="$apartment" />




    @include('pages.apartment.partials.header')
    @include('pages.apartment.partials.about')
    @include('pages.home.partials.features')
    @include('pages.apartment.partials.rooms')
    @include('pages.home.partials.cta')
    @include('pages.apartment.partials.testimonials')
    @include('pages.home.partials.local-attractions')



    {!!$apartment->map!!}

    <x-footer-apartment :apartment="$apartment" />


</x-layouts.app>