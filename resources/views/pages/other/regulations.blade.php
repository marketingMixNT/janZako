<x-layouts.app title="{{__('regulations.meta_title')}}"
    description="{{__('regulations.meta_desc')}}">

    {{-- HEADER --}}
    <x-header title="{{__('regulations.header-heading')}}"  bgi="bg-[url('/public/assets/images/pokoje/mobile/pokoje-11.webp')] sm:bg-[url('/public/assets/images/pokoje/pokoje-11.webp')]" />

    {{-- MAIN --}}
    <section class="py-20">
        <x-container class="max-w-screen-lg prose">
             {!! $regulations->content !!}





        </x-container>
    </section>



</x-layouts.app>