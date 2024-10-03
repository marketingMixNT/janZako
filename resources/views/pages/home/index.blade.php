<x-layouts.home title="{{$home->meta_title ? $home->meta_title : 'Apartamenty Jan - Wygodne noclegi w Zakopanem'}}"
    description="{{$home->meta_desc ? $home->meta_desc  : 'Zarezerwuj komfortowy apartament w Zakopanem! Apartamenty Jan to idealne miejsce na wypoczynek w sercu Tatr. Odkryj magię gór już dziś!'}}">



    <x-layouts.home-wrapper :home="$home">

        @include('pages.home.partials.header')
        @include('pages.home.partials.about')

        <x-features />

        @include('pages.home.partials.apartments')

        <x-cta />

        @include('pages.home.partials.testimonials')
        @include('pages.home.partials.local-attractions')

    </x-layouts.home-wrapper>
</x-layouts.home>