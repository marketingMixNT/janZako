<x-layouts.app title="{{__('meta.regulations.title')}}" description="{{__('meta.regulations.title')}}">

    <x-layouts.home-wrapper :home="$home">

        {{-- HEADER --}}
        <x-header title="{{__('global.headings.regulations')}}"
            bgi="{{asset('assets/images/apartamenty-jan/apartamenty-jan-9.webp')}}" />

        {{-- MAIN --}}
        <section class="py-20">
            <x-container class="max-w-screen-lg prose">
                {!! $regulations->content !!}





            </x-container>
        </section>

    </x-layouts.home-wrapper>

</x-layouts.app>