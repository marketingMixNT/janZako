<x-layouts.home title="
{{$apartmentPage->meta_title ? $apartmentPage->meta_title : __('meta.apartment-index.title')}}" description="
{{$apartmentPage->meta_desc ? $apartmentPage->meta_desc : __('meta.apartment-index.desc')}}">

    <x-layouts.home-wrapper :home="$home" :apartments='$apartments'>
        {{-- HEADER --}}
        <x-header title="{{__('global.headings.apartments')}}" bgi="{{asset('storage/'.$apartmentPage->banner)}}" />



        {{-- MAIN --}}
        <section class="py-10 lg:py-20">
            <x-container class="max-w-screen-2xl">
                <div class="w-full mx-auto flex justify-center items-center lg:pb-20">
                    <x-heading-horizontal title="{{$apartmentPage->heading}}">
                        <x-text>{{$apartmentPage->text}}</x-text>

                    </x-heading-horizontal>
                </div>

                @foreach ($apartments as $apartment)
                <x-apartment-card-horizontal :apartment='$apartment' />
                @endforeach

            </x-container>
        </section>

    </x-layouts.home-wrapper>
</x-layouts.home>