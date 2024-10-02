<x-layouts.app title="Pokoje w Apartamentach Jan - Komfortowe Noclegi w Zakopanem"
    description="Odkryj komfortowe pokoje w Apartamentach Jan w Zakopanem. Eleganckie wnętrza, pełne wyposażenie i idealne warunki do wypoczynku w sercu Tatr. Sprawdź naszą ofertę!">


<x-layouts.app-wrapper :apartment="$apartment">


    {{-- HEADER --}}
    <x-header subtitle="{{$apartment->title}}" title="Pokoje" bgi="{{asset('storage/' . $apartment->banner_rooms)}}" />

    {{-- MAIN --}}
    <section class="py-10 lg:py-20">
        <x-container class="max-w-screen-2xl">
            <div class="w-full mx-auto flex justify-center items-center lg:pb-20">
                <x-heading-horizontal title="Komfortowe Pokoje dla Twojego Wypoczynku">
                    <x-text>Każdy z naszych apartamentów oferuje starannie zaprojektowane pokoje, które łączą wygodę z nowoczesnym stylem. Przestronne wnętrza, elegancki wystrój oraz pełne wyposażenie zapewnią Ci relaks i spokój podczas pobytu. Niezależnie od tego, czy podróżujesz w pojedynkę, z partnerem, czy z rodziną, nasze pokoje dostosowane są do Twoich potrzeb, tworząc idealne warunki do odpoczynku po dniu pełnym górskich przygód.</x-text>
                </x-heading-horizontal>
            </div>

            @foreach ($rooms as $room)
            <x-room-card-horizontal :room='$room' :apartmentLink="$apartment->booking_link" :apartmentTitle="$apartment->title" :testSlug="$apartment->slug" :roomSlug="$room->slug" />
            @endforeach

        </x-container>
    </section>



</x-layouts.app-wrapper>
</x-layouts.app>