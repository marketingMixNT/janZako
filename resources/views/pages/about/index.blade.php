<x-layouts.app title="{{__('about.meta-title')}}"
    description="{{__('about.meta-desc')}}">


    {{-- HEADER --}}
    <x-header title="{{__('about.header-heading')}}" bgi="bg-[url('/public/assets/images/pokoje/mobile/pokoje-6.webp')] sm:bg-[url('/public/assets/images/pokoje/pokoje-6.webp')]" />

    {{-- MAIN --}}
    <section class="py-20">
        <x-container class="max-w-screen-2xl">

            <x-heading heading="{{__('about.heading')}}" />

            <div class="space-y-6 pt-12">

                <x-image-text-block img="{{asset('assets/images/wspolne/wspolne-2.webp')}}">
                    <x-text>{{__('about.text-1')}}</x-text>
                </x-image-text-block>
                <x-image-text-block order="lg:order-1" img="{{asset('assets/images/wspolne/wspolne-1.webp')}}">
                    <x-text>{{__('about.text-2')}}</x-text>
                </x-image-text-block>
                <x-image-text-block img="{{asset('assets/images/wspolne/wspolne-3.webp')}}">
                    <x-text>{{__('about.text-3')}}</x-text>
                </x-image-text-block>



            </div>
        </x-container>
    </section>

</x-layouts.app>