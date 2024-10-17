<x-layouts.home
    title="
{{$locationPage->meta_title ? $locationPage->meta_title : __('meta.location-index.title')}}"
    description="
{{$locationPage->meta_desc ? $locationPage->meta_desc : __('meta.location-index.desc')}}">
    <x-layouts.home-wrapper :home="$home" :apartments='$apartments'>


        {{-- HEADER --}}
        <x-header title="{{__('global.headings.localization')}}" bgi="{{asset('storage/'.$locationPage->banner)}}" />

        {{-- MAIN --}}
        <section class="py-20">
            <x-container class="max-w-screen-2xl space-y-8">

                <div class="w-full mx-auto flex justify-center items-center lg:pb-20">
                    <x-heading-horizontal title="{{$locationPage->heading}}">
                        <x-text>{{$locationPage->text}}</x-text>
                    </x-heading-horizontal>
                   
                </div>

                @foreach ($apartments as $apartment)
                <x-location-apartment-block :apartment="$apartment" />
                @endforeach



            </x-container>
        </section>
    </x-layouts.home-wrapper>
</x-layouts.home>