<x-layouts.app title="{{__('meta.room-index.title')}}" description="{{__('meta.room-index.desc')}}">


    <x-layouts.app-wrapper :apartment="$apartment" :apartments="$apartments" :home="$home">


        {{-- HEADER --}}
        <x-header subtitle="{{$apartment->title}}" title="{{__('global.headings.rooms')}}"
            bgi="{{asset('storage/' . $apartment->banner_rooms)}}" />

        {{-- MAIN --}}
        <section class="py-10 lg:py-20">
            <x-container class="max-w-screen-2xl">
                <div class="w-full mx-auto flex justify-center items-center lg:pb-20">
                    <x-heading-horizontal title="{{__('rooms.heading')}}">
                        <x-text>{{__('rooms.text')}}</x-text>
                    </x-heading-horizontal>
                </div>

                @foreach ($rooms as $room)
                <x-room-card-horizontal :room='$room' :apartmentLink="$apartment->booking_link"
                    :apartmentTitle="$apartment->title" :testSlug="$apartment->slug" :roomSlug="$room->slug" />
                @endforeach

            </x-container>
        </section>



    </x-layouts.app-wrapper>
</x-layouts.app>