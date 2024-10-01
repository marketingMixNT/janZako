<x-layouts.app title="{{ $apartment->getMetaTitle() }}" description="{{ $apartment->getMetaDesc() }}">

    
    @include('pages.apartment.partials.header')
    @include('pages.apartment.partials.about')
    @include('pages.home.partials.features')
    @include('pages.apartment.partials.rooms')
    @include('pages.home.partials.cta')
    @include('pages.apartment.partials.testimonials')
    @include('pages.home.partials.local-attractions')
</x-layouts.app>