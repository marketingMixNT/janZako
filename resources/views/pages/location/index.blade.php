<x-layouts.app
    title="{{$apartment->location_meta_title}}"
    description="{{$apartment->location_meta_desc}}">
    <x-layouts.app-wrapper :apartment="$apartment" :apartments="$apartments" :home="$home">


        {{-- HEADER --}}
 

            <x-header subtitle="{{$apartment->title}}" title="{{__('global.headings.localization')}}" bgi="{{asset('storage/' . $apartment->banner_location)}}" />

        {{-- MAIN --}}
        <section class="py-20">
            <x-container class="max-w-screen-2xl space-y-8 flex flex-col justify-center items-center">

                <div class="w-full mx-auto flex justify-center items-center lg:pb-20">
                    <x-heading-horizontal title="{{$apartment->location_heading}}">
                        <x-text>{{$apartment->location_text}}</x-text>
                    </x-heading-horizontal>
                   

                   

                </div>

                <div class="flex flex-col prose">

                    {!!$apartment->location_info!!}
                </div>


            </x-container>
        </section>

        {!!$apartment->location_map!!}

    </x-layouts.app-wrapper>
</x-layouts.app>