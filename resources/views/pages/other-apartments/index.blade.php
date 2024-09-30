<x-layouts.app title="{{__('other-objects.meta_title')}}"
    description="{{__('other-objects.meta_desc')}}">


    {{-- HEADER --}}
    <x-header title="{{__('other-objects.header-heading')}}" bgi="bg-[url('/public/assets/images/pokoje/mobile/pokoje-23.webp')] sm:bg-[url('/public/assets/images/pokoje/pokoje-23.webp')]" />

    {{-- MAIN --}}
    <section class="py-20">
        <x-container class="max-w-screen-2xl space-y-8">

            <x-image-text-block img="{{asset('assets/images/pozostale/apartamenty-jan.webp')}}" alt="zdjęcie przedstawiające Apartamenty Jan w Zakopanem">
                <div class="flex flex-col gap-12">
                <div class="space-y-2">

                    <x-title>Apartamenty Jan</x-title>
                    <x-text>{{__('other-objects.apartamenty-jan-text')}}</x-text>
                </div>
                    
                <div class="space-y-4">

              
                <div class="flex justify-start items-center gap-3">
                    <x-lucide-map-pin class="size-6 text-accent-400" />
                    <a-href class="font-light link-hover--dark">
                        Ubocz 3b, 34-500 Zakopane 
                    </a-href>
                </div>
                <div class="flex justify-start items-center gap-3">
                    <x-lucide-mail class="size-6 text-accent-400" />
                    <a href="mailto:biuro@apartamenty-jan.com.pl" class="font-light link-hover--dark">
                        biuro@apartamenty-jan.com.pl
                    </a>
                </div>
                <div class="flex justify-start items-center gap-3">
                    <x-lucide-phone class="size-6 text-accent-400" />
                    <a href="tel:+48182014207" class="font-light link-hover--dark">
                        +48 18 201-42-07
                    </a>
                </div>
            </div>
                <x-ui.link href="https://apartamentyjan.com.pl" target="_blank" rel="noreferrer nofollow" title="{{__('other-objects.check')}}"/>
            </div>
            </x-image-text-block>




            <x-image-text-block order="lg:order-1" img="{{asset('assets/images/pozostale/willa-jan.webp')}}" alt="zdjęcie przedstawiające Willa Jan w Zakopanem">
                <div class="flex flex-col gap-12">

              
                    <div class="space-y-2">

                    <x-title>Willa Jan</x-title>
                    <x-text>{{__('other-objects.willa-jan-text')}}</x-text>
                </div>
                    
                <div class="space-y-4">

              
                <div class="flex justify-start items-center gap-3">
                    <x-lucide-map-pin class="size-6 text-accent-400" />
                    <a-href class="font-light link-hover--dark">
                       Ubocz 8a, 34-500 Zakopane
                    </a-href>
                </div>
                <div class="flex justify-start items-center gap-3">
                    <x-lucide-mail class="size-6 text-accent-400" />
                    <a href="mailto:biuro@apartamenty-jan.com.pl" class="font-light link-hover--dark">
                        biuro@apartamenty-jan.com.pl
                    </a>
                </div>
                <div class="flex justify-start items-center gap-3">
                    <x-lucide-phone class="size-6 text-accent-400" />
                    <a href="+48602512008" class="font-light link-hover--dark">
                        +48 602-512-008
                    </a>
                </div>
            </div>
            <x-ui.link href="https://apartamentyjan.com.pl" target="_blank" rel="noreferrer nofollow" title="{{__('other-objects.check')}}"/>
            </div>
            </x-image-text-block>

            <x-image-text-block img="{{asset('assets/images/pozostale/willa-labelle.webp')}}" alt="zdjęcie przedstawiające Willa La Belle w Zakopanem">
                <div class="flex flex-col gap-12">

              
                    <div class="space-y-2">

                    <x-title>Willa LaBelle</x-title>
                    <x-text>{{__('other-objects.willa-labelle-text')}}</x-text>
                </div>
                    
                <div class="space-y-4">

              
                <div class="flex justify-start items-center gap-3">
                    <x-lucide-map-pin class="size-6 text-accent-400" />
                    <a-href class="font-light link-hover--dark">
                       Krupówki 40, 34-500 Zakopane
                    </a-href>
                </div>
                <div class="flex justify-start items-center gap-3">
                    <x-lucide-mail class="size-6 text-accent-400" />
                    <a href="mailto:biuro@apartamenty-jan.com.pl" class="font-light link-hover--dark">
                        biuro@apartamenty-jan.com.pl
                    </a>
                </div>
                <div class="flex justify-start items-center gap-3">
                    <x-lucide-phone class="size-6 text-accent-400" />
                    <a href="tel:+48182013603" class="font-light link-hover--dark">
                        +48 18 201-36-03
                    </a>
                </div>
            </div>
                {{-- <x-ui.link href="/" title="{{__('other-objects.check')}}"/> --}}
            </div>
            </x-image-text-block>



        </x-container>
    </section>

</x-layouts.app>