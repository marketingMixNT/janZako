<x-layouts.app title="{{__('meta.local-attractions-index.title')}}"
description="{{__('meta.local-attractions-index.desc')}}">

    <x-layouts.app-wrapper :apartment="$apartment" :apartments="$apartments" :home="$home">


    {{-- HEADER --}}
    <x-header subtitle="{{$apartment->title}}" title="{{__('global.headings.local-attractions')}}" bgi="{{asset('assets/images/apartamenty-jan-lokalne-atrakcje-banner.webp')}}" />

    <x-container class="max-w-screen-xl pt-20 pb-28">
        <x-heading-horizontal title="{{__('local-attractions.page.heading')}}">
            <x-text>{{__('local-attractions.page.text')}}
            </x-text>
        </x-heading-horizontal>

        


        <section class="flex flex-col gap-20 lg:gap-40 pt-32">

            @foreach ($attractions as $attraction)
            <div class="grid lg:grid-cols-2 gap-12">



                <div class=" relative  flex flex-col gap-6 justify-center  lg:text-left">
                    <x-title>{{ $attraction['title'] }}</x-title>
                    <div class="leading-loose font-light">{!! $attraction['description'] !!}</div>

                </div>
                @foreach ($attraction['images'] as $img)
                <div class="   mx-auto overflow-hidden flex justify-center items-center">
                    <a href="{{ asset('/storage/' . $img) }}" class="glightbox">
                        <img src=" {{ asset('/storage/' . $img) }}" alt="{{ $attraction['title'] }}" loading="lazy"
                            class="w-full  object-cover shadow-md  aspect-square max-w-[550px]"></a>
                </div>
                @endforeach
            </div>
            @endforeach
        </section>


    </x-container>

    </x-layouts.app-wrapper>
</x-layouts.app>