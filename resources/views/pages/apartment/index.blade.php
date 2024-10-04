<x-layouts.home title="
{{$apartmentPage->meta_title ? $apartmentPage->meta_title : 'Odkryj Apartamenty Jan - Komfort w Serce Tatr'}}" description="
{{$apartmentPage->meta_desc ? $apartmentPage->meta_desc : 'Odkryj pełną ofertę apartamentów Jan w Zakopanem! Wybierz idealne miejsce na wypoczynen w sercu Tatr. Zarezerwuj już dziś i ciesz się niezapomnianym pobytem!'}}">

<x-layouts.home-wrapper :home="$home">
    {{-- HEADER --}}
    <x-header title="Nasze obiekty"
       
        bgi="{{asset($apartmentPage->banner)}}" />



    {{-- MAIN --}}
    <section class="py-10 lg:py-20">
        <x-container class="max-w-screen-2xl">
            <div class="w-full mx-auto flex justify-center items-center lg:pb-20">
                <x-heading-horizontal title="{{$apartmentPage->heading}}">
                    <x-text>{{$apartmentPage->text}}</x-text>
               
                </x-heading-horizontal>
            </div>

            @foreach ($apartments as $apartment)
            <x-apartment-card-horizontal :apartment='$apartment' />
            @endforeach

        </x-container>
    </section>

</x-layouts.home-wrapper>
</x-layouts.home>