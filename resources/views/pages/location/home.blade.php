<x-layouts.home
    title="
{{$locationPage->meta_title ? $locationPage->meta_title : 'Lokalizacja Apartamentów Jan - Znajdź Swoje Miejsce w Zakopanem'}}"
    description="
{{$locationPage->meta_desc ? $locationPage->meta_desc : 'Odkryj lokalizację apartamentów Jan w Zakopanem! Sprawdź, gdzie znajdują się nasze komfortowe noclegi i jak blisko do atrakcji Tatr. Zarezerwuj idealne miejsce na swój wypoczynek!'}}">
    <x-layouts.home-wrapper :home="$home">


        {{-- HEADER --}}
        <x-header title="Lokalizacja" bgi="{{asset('storage/'.$locationPage->banner)}}" />

        {{-- MAIN --}}
        <section class="py-20">
            <x-container class="max-w-screen-2xl space-y-8">

                <div class="w-full mx-auto flex justify-center items-center lg:pb-20">
                    <x-heading-horizontal title="{{$locationPage->heading}}">
                        <x-text>{{$locationPage->text}}</x-text>
                    </x-heading-horizontal>
                   
                </div>

                @foreach ($apartments as $apartment)
                <x-location-apartment-block :apartment="$apartment" />
                @endforeach



            </x-container>
        </section>
    </x-layouts.home-wrapper>
</x-layouts.home>