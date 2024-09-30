<x-layouts.app title="{{__('transfers.meta_title')}}" description="{{__('transfers.meta_desc')}}">


    {{-- HEADER --}}
    <x-header title="{{__('transfers.header-heading')}}"
        bgi="bg-[url('/public/assets/images/krakow/mobile/krakow-6.webp')] sm:bg-[url('/public/assets/images/krakow/krakow-6.webp')]" />

    {{-- MAIN --}}
    <section class="py-20">
        <x-container class="max-w-screen-2xl">

            <x-heading-horizontal title="{{__('transfers.heading')}}">
                <x-text>{{__('transfers.text')}}
                </x-text>
            </x-heading-horizontal>

            <div class="space-y-6 pt-10 sm:pt-20">


                <div class="flex justify-center items-center gap-4 md:gap-12 flex-wrap sm:mb-12">

                    <a href="https://fareharbor.com/embeds/book/gr8way/items/?flow=1022562&asn=janhotel-euro&sheet-uuid=9aefc760-2c62-4be2-b4e5-2c505305b4d3&full-items=yes&ref=Jan" target="_blank" rel="noreferrer nofollow" class="border   px-8 py-2.5 uppercase text-xs duration-300   bg-accent-400  close text-fontWhite hover:text-fontBlack" >
                       {{__('transfers.link-travel')}}
                    </a>
                    <a href="https://fareharbor.com/embeds/book/gr8way/?sheet=157846&asn=janhotel-euro&asn-ref=Jan%20Hotel&full-items=yes&flow=94186" target="_blank" rel="noreferrer nofollow" class="border   px-8 py-2.5 uppercase text-xs duration-300   bg-accent-400  close text-fontWhite hover:text-fontBlack" >
                        {{__('transfers.link-transfers')}}
                    </a>
    
                   
                </div>


                <x-image-text-block img="{{asset('assets/images/tatry.webp')}}">
                    <div class="space-y-4">

                        <x-text>{{__('transfers.text-2')}}</x-text>
                        <x-text>
                            {{__('transfers.text-3')}}
                        </x-text>

                        <x-ui.link href="#" target="_blank" title="{{__('transfers.link-travel')}}"  />
                        <x-ui.link href="#" target="_blank" title="{{__('transfers.link-transfers')}}"  />
                    </div>
                    </x-image-text-block>

            
               



            </div>

        </x-container>
    </section>
</x-layouts.app>