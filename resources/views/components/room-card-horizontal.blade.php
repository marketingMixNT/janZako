@props(['room','testSlug', 'roomSlug','apartmentTitle','apartmentLink'])

<div
    class="  border-gray-400 flex flex-col lg:flex-row justify-between  border-b py-16 gap-4 lg:gap-12  last-of-type:border-none">
    <div class="w-full lg:w-[30%]">
        <div class="overflow-hidden">

            <img src=" {{ asset('/storage/' . $room->thumbnail) }}"
                alt="Zdjęcie apartamentu {{ $room->title }} w hotelu Jan w Krakowie" loading="lazy"
                class="w-full h-[350px] object-cover">
        </div>
    </div>
    <div class="w-full lg:w-[45%] flex flex-col justify-between items-start py-8 gap-8 lg:gap-0">

        <h2 class=" text-4xl uppercase  font-heading font-light ">{{ $room->title }}</h2>
        <div class="text 2xl:mr-12 leading-loose font-light text-[14px] 2xl:text-base">{!! $room->short_desc !!}</div>


        <ul class="flex flex-wrap gap-12">

            <li class="flex justify-center items-center gap-3">
                <x-lucide-bed-single class="size-6 text-accent-400" />
                <span class="font-light">
                    {{ $room->beds }} </span>
            </li>
            <li class="flex justify-center items-center gap-3">
                <x-lucide-shower-head class="size-6 text-accent-400" />
                <span class="font-light"> {{ $room->bathroom }} </span>
            </li>
        </ul>

    </div>
    <div class="w-full lg:w-[15%] flex justify-center items-start gap-6 flex-col">


        <x-ui.link href="{{$apartmentLink}}" target="_blank" title="Zarezerwuj" color="text-fontBlack " />

        <x-ui.link href="{{route('apartment.show',$room->slug)}}" title="Zobacz" />



    </div>
</div>