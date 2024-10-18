<x-layouts.app title="{{ $apartment->getMetaTitle() }}" description="{{ $apartment->getMetaDesc() }}">

    <x-layouts.app-wrapper :apartment="$apartment" :apartments="$apartments" :home='$home'>


        @include('pages.apartment.partials.header')
        @include('pages.apartment.partials.rooms')
        
        <x-features />
        
        @include('pages.apartment.partials.about')

        <x-cta :link="$apartment->booking_link" :cta="$cta"/>


        @include('pages.apartment.partials.testimonials')
        @include('pages.apartment.partials.local-attractions')




    </x-layouts.app-wrapper>

</x-layouts.app>