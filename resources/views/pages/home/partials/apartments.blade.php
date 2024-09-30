<section class="pt-16 pb-24">
    <x-container class="max-w-screen-2xl 2xl:px-12">



        <x-heading-horizontal title="{{__('home.rooms.heading')}}">


            <x-text>{{__('home.rooms.text')}}</x-text>


        </x-heading-horizontal>


        {{-- <div class="flex flex-col pt-12 "> --}}
            <div class="grid md:grid-cols-2 xl:grid-cols-3 gap-x-16 pt-20 px-2 sm:w-[90%] md:w-full mx-auto">

                @foreach ($apartments as $apartment)

                <x-apartment-card :apartment="$apartment" />

                @endforeach

            </div>

    </x-container>
</section>