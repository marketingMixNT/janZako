<x-layouts.app title="{{__('meta.safety-index.title')}}" description="{{__('meta.safety-index.desc')}}">

    <x-layouts.app-wrapper :apartment="$apartment">

        <x-header subtitle="{{$apartment->title}}" title="{{__('global.headings.safety')}}" bgi="{{asset('assets/images/apartamenty-jan/apartament-dwuosobowy-z-widokiem-na-gory-i-tarasem/apartamenty-jan-apartament-dwuosobowy-z-widokiem-na-gory-i-tarasem-6.webp')}}" />




        <section class="py-20">
            <x-container class="max-w-screen-2xl">

                <div class="flex flex-col justify-center items-center gap-6  text-center">
                    <x-title>{{__('safety.heading')}}</x-title>
                    <x-text>{{__('safety.text')}}</x-text>

                    <div class="grid xs:grid-cols-2 lg:grid-cols-3 gap-12 xs:gap-20 pt-12">
                        <x-security-box icon="{{asset('assets/icons/security-1.svg')}}" text="{{__('safety.item-1')}}" />
                        <x-security-box icon="{{asset('assets/icons/security-2.svg')}}"
                            text="{{__('safety.item-2')}}" />
                        <x-security-box icon="{{asset('assets/icons/security-3.svg')}}" text="{{__('safety.item-3')}}" />
                        <x-security-box icon="{{asset('assets/icons/security-4.svg')}}"
                            text="{{__('safety.item-4')}}" />
                        <x-security-box icon="{{asset('assets/icons/security-5.svg')}}"
                            text="{{__('safety.item-5')}}" />
                        <x-security-box icon="{{asset('assets/icons/security-6.svg')}}"
                            text="{{__('safety.item-6')}}" />

                    </div>
                </div>



            </x-container>
        </section>



    </x-layouts.app-wrapper>

</x-layouts.app>