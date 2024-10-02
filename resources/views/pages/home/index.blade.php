<x-layouts.home title="Apartamenty Jan - Wygodne noclegi w Zakopanem"
    description="Zarezerwuj komfortowy apartament w Zakopanem! Apartamenty Jan to idealne miejsce na wypoczynek w sercu Tatr. Odkryj magię gór już dziś!">


    @include('pages.home.partials.header')
    @include('pages.home.partials.about')

    <x-features />

    @include('pages.home.partials.apartments')

    <x-cta />

    @include('pages.home.partials.testimonials')
    @include('pages.home.partials.local-attractions')
</x-layouts.home>