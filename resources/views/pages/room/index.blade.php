<x-layouts.app title="{{__('rooms.meta_title')}}"
    description="{{__('rooms.meta_desc')}}">


    <x-nav.navbar-rooms :apartment="$apartment" />


    {{-- HEADER --}}
    <x-header title="{{__('rooms.header-heading')}}" bgi="bg-[url('/public/assets/images/pokoje/mobile/pokoje-17.webp')] sm:bg-[url('/public/assets/images/pokoje/pokoje-17.webp')]" />

    {{-- MAIN --}}
    <section class="py-10 lg:py-20">
        <x-container class="max-w-screen-2xl">
            <div class="w-full mx-auto flex justify-center items-center lg:pb-20">
                <x-heading-horizontal title="{{__('rooms.heading')}}">
                    <x-text>{{__('rooms.text')}}</x-text>
                </x-heading-horizontal>
            </div>

            @foreach ($rooms as $room)
            <x-apartment-card-horizontal :apartment='$room' />
            @endforeach

        </x-container>
    </section>



    {!!$apartment->map!!}

    <x-footer-apartment :apartment="$apartment" />
</x-layouts.app>