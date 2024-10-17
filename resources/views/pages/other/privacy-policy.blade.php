<x-layouts.home title="{{__('meta.privacy-policy.title')}}" description="{{__('meta.privacy-policy.desc')}}">

    <x-layouts.home-wrapper :home="$home" :apartments="$apartments">


        {{-- HEADER --}}
        <x-header title="{{__('global.headings.privacy-policy')}}"
            bgi="{{asset('assets/images/apartamenty-jan/apartamenty-jan-9.webp')}}" />

        {{-- MAIN --}}
        <section class="py-20">
            <x-container class="max-w-screen-lg prose">
                {!! $privacyPolicy->content !!}





            </x-container>
        </section>

    </x-layouts.home-wrapper>

</x-layouts.home>