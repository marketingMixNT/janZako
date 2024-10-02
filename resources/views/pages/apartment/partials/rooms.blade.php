<section class="py-16">
    <x-container class="max-w-screen-2xl 2xl:px-12">



        <x-heading-horizontal title="{{$apartment->rooms_heading}}">


            <x-text>{{$apartment->rooms_text}}</x-text>


        </x-heading-horizontal>



        {{-- <div class="grid md:grid-cols-2 xl:grid-cols-3 gap-x-16 pt-20 px-2 sm:w-[90%] md:w-full mx-auto"> --}}
            <div class="flex flex-wrap justify-center items-center gap-x-16 pt-20 px-2 sm:w-[90%] md:w-full mx-auto">




                @foreach ($apartment->rooms as $room)
                <x-room-card :room="$room" :testSlug="$apartment->slug" :roomSlug="$room->slug"
                    :apartmentTitle="$apartment->title" size="w-full md:w-[45%] xl:w-[29%] 2xl:w-[30%]" />
                @endforeach


            </div>

    </x-container>
</section>