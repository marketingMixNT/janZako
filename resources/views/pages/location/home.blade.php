<x-layouts.home title="Lokalizacja Apartamentów Jan - Znajdź Swoje Miejsce w Zakopanem"
    description="Odkryj lokalizację apartamentów Jan w Zakopanem! Sprawdź, gdzie znajdują się nasze komfortowe noclegi i jak blisko do atrakcji Tatr. Zarezerwuj idealne miejsce na swój wypoczynek!">


    {{-- HEADER --}}
    <x-header title="Lokalizacja" bgi="bg-[url('/public/assets/images/pokoje/mobile/pokoje-23.webp')] sm:bg-[url('/public/assets/images/pokoje/pokoje-23.webp')]" />

    {{-- MAIN --}}
    <section class="py-20">
        <x-container class="max-w-screen-2xl space-y-8">

            <div class="w-full mx-auto flex justify-center items-center lg:pb-20">
                <x-heading-horizontal title="Odkryj Nasze Miejsca w Zakopanem">
                    <x-text>Apartamenty Jan znajdują się w malowniczym Zakopanem, w sercu Tatr. Każdy z naszych apartamentów oferuje dogodną lokalizację blisko atrakcji turystycznych, szlaków górskich oraz lokalnych restauracji. Niezależnie od tego, czy planujesz wędrówki, czy chcesz cieszyć się urokami Zakopanego, nasze miejsca zapewniają łatwy dostęp do wszystkiego, co region ma do zaoferowania.</x-text>
                </x-heading-horizontal>
            </div>

            @foreach ($apartments as $apartment)
                <x-location-apartment-block :apartment="$apartment" />
            @endforeach

          

        </x-container>
    </section>

</x-layouts.home>