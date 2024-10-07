<x-layouts.app title="{{__('meta.gallery-index.title')}}" description="{{__('meta.gallery-index.desc')}}">

    <x-layouts.app-wrapper :apartment="$apartment">

    {{-- HEADER --}}
    <x-header subtitle="{{$apartment->title}}" title="{{__('global.headings.gallery')}}" bgi="{{asset('storage/' . $apartment->banner_gallery)}}" />

    {{-- MAIN --}}
    <section class="py-20">
        <x-container class="max-w-[1600px]">

            <div class="flex justify-center items-center gap-4 flex-wrap mb-12">

                {{-- "All" Button --}}
                <button
                    class="border   px-8 py-3 uppercase text-xs duration-300   gallery-btn filter-btn"
                    data-title="">
                    {{__('global.all')}}
                </button>

             

                {{-- Buttons to filter by title --}}
                @foreach ($apartment->galleries as $image)

                <button
                    class="filter-btn border   px-8 py-3 uppercase text-xs duration-300  bg-primary-400   text-fontBlack"
                    data-title="{{ $image->category }}">
                    {{ $image->category }}
                </button>
                @endforeach
            </div>

            {{-- Container for filtered images --}}
            <div class="grid  sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-8" id="image-gallery">
                @foreach ($apartment->galleries as $image)
                @foreach ($image->images as $img)
                <div class="w-full h-full object-cover image-item" data-title="{{ $image->category }}">
                    <a href="{{asset('storage/' .  $img)}}" class="glightbox">

                        <img src="{{asset('storage/' .  $img)}}" alt="zdjęcie przedstawiające {{ $image->category }} w hotelu Jan w Krakowie"
                            loading="lazy" class="w-full object-cover aspect-square">
                    </a>

                </div>
                @endforeach
                @endforeach
            </div>
        </x-container>
    </section>

    </x-layouts.app-wrapper>

</x-layouts.app>