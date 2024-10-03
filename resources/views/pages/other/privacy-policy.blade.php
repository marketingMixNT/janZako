<x-layouts.home title="{{__('privacy-policy.meta_title')}}" description="{{__('privacy-policy.meta_desc')}}">

    <x-layouts.home-wrapper :home="$home">


        {{-- HEADER --}}
        <x-header title="{{__('privacy-policy.header-heading')}}"
            bgi="bg-[url('/public/assets/images/pokoje/mobile/pokoje-11.webp')] sm:bg-[url('/public/assets/images/pokoje/pokoje-11.webp')]" />

        {{-- MAIN --}}
        <section class="py-20">
            <x-container class="max-w-screen-lg prose">
                {!! $privacyPolicy->content !!}





            </x-container>
        </section>

    </x-layouts.home-wrapper>

</x-layouts.home>