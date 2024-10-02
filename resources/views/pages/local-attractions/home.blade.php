<x-layouts.home title="Lokalne Atrakcje w Zakopanem - Odkryj Okolicę z Apartamentami Jan"
    description="Poznaj najciekawsze atrakcje Zakopanego i okolic! Odkryj górskie szlaki, termy i lokalne zabytki, korzystając z komfortowego pobytu w Apartamentach Jan.">

    


    {{-- HEADER --}}
    <x-header  title="{{__('local-attractions.header-heading')}}" bgi="bg-[url('/public/assets/images/krakow/mobile/krakow-1.webp')] sm:bg-[url('/public/assets/images/krakow/krakow-1.webp')]" />

    <x-container class="max-w-screen-xl pt-20 pb-28">
        <x-heading-horizontal title="Odkryj Zakopane i Okoliczne Atrakcje">
            <x-text>Zakopane to wyjątkowe miejsce pełne atrakcji dla każdego. Od malowniczych szlaków górskich, przez popularne termy, po unikalne zabytki i lokalną kulturę – każdy znajdzie tu coś dla siebie. Niezależnie od tego, czy szukasz aktywnego wypoczynku, czy spokojnego relaksu, nasze apartamenty Jan są idealną bazą do odkrywania uroków Tatr i okolicy.
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

  
</x-layouts.home>