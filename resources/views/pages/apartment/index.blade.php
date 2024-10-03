<x-layouts.home title="
{{$apartmentPage->meta_title ? $apartmentPage->meta_title : 'Odkryj Apartamenty Jan - Komfort w Serce Tatr'}}" description="
{{$apartmentPage->meta_desc ? $apartmentPage->meta_desc : 'Odkryj pełną ofertę apartamentów Jan w Zakopanem! Wybierz idealne miejsce na wypoczynen w sercu Tatr. Zarezerwuj już dziś i ciesz się niezapomnianym pobytem!'}}">

<x-layouts.home-wrapper :home="$home">
    {{-- HEADER --}}
    <x-header title="Nasze obiekty"
        {{-- bgi="{{asset('assets/images/apartamenty-jan/apartamenty-jan-5.webp')}}" /> --}}
        bgi="{{asset($apartmentPage->banner)}}" />



    {{-- MAIN --}}
    <section class="py-10 lg:py-20">
        <x-container class="max-w-screen-2xl">
            <div class="w-full mx-auto flex justify-center items-center lg:pb-20">
                <x-heading-horizontal title="{{$apartmentPage->heading}}">
                    <x-text>{{$apartmentPage->text}}</x-text>
                {{-- <x-heading-horizontal title="Odkryj Nasze Apartamenty">
                    <x-text>Zapraszamy do odkrywania naszej oferty apartamentów Jan, które zapewnią Ci niezapomniany pobyt w Zakopanem. Każdy z naszych apartamentów łączy w sobie nowoczesny design i przytulność, tworząc idealne miejsce do relaksu po dniu pełnym przygód. Niezależnie od tego, czy podróżujesz z rodziną, czy planujesz romantyczny wypad, w naszej ofercie znajdziesz coś dla siebie. Przeglądaj nasze apartamenty i wybierz idealne miejsce na swój wypoczynek!</x-text> --}}
                </x-heading-horizontal>
            </div>

            @foreach ($apartments as $apartment)
            <x-apartment-card-horizontal :apartment='$apartment' />
            @endforeach

        </x-container>
    </section>

</x-layouts.home-wrapper>
</x-layouts.home>