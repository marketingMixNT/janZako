@props(['apartment','size'=>''])

<a href={{route('apartment.show',$apartment->slug)}} class="group {{$size}}">

    <img src="{{ asset('storage/' . $apartment->thumbnail) }}" alt="zdjęcie przedstawiające {{ $apartment->title }} w Hotelu Jan w Krakowie"
        loading="lazy" 
        class="aspect-square object-cover w-full group-hover:scale-110 duration-300">

    <div
        class="bg-white group-hover:-translate-y-12 duration-300 ease border border-transparent group-hover:border group-hover:border-gray-200  py-8 flex flex-col justify-center items-center gap-4">

        <h2 class="uppercase  text-sm text-accent-400 tracking-widest font-light">Hotel Jan</h2>
        <h3 class="text-2xl text-center px-2 font-light">{{ $apartment->title }}</h3>

        <div
            class="opacity-0 group-hover:opacity-100 duration-300 text-sm   px-4 md:px-32 lg:px-4 text-center flex justify-center gap-3 flex-wrap">
            <div class="flex justify-center items-center gap-2">

                <x-lucide-bed-single class="size-6 text-accent-400" />

                <span class="font-light">{{$apartment->beds}}</span>

            </div>
            <div class="flex justify-center items-center gap-2">

                <x-lucide-shower-head class="size-6 text-accent-400" />

                <span class="font-light">{{$apartment->bathroom}}</span>

            </div>


        </div>
    </div>

</a>