<x-layouts.app title="{{__('safety.meta_title')}}" description="{{__('safety.meta_desc')}}">

    <x-header title="{{__('safety.header-heading')}}"
        bgi="bg-[url('/public/assets/images/wspolne/mobile/wspolne-6.webp')] sm:bg-[url('/public/assets/images/wspolne/wspolne-6.webp')]" />


    <section class="py-20">
        <x-container class="max-w-screen-2xl">

            <div class="flex flex-col justify-center items-center gap-6  text-center">
                <x-title>{{__('safety.heading')}}</x-title>
                <x-text>{{__('safety.text')}}</x-text>

                <div class="grid xs:grid-cols-2 lg:grid-cols-3 gap-12 xs:gap-20 pt-12">
                    <x-security-box icon="{{asset('assets/icons/security-1.svg')}}" text="{{__('safety.service-1')}}" />
                    <x-security-box icon="{{asset('assets/icons/security-2.svg')}}" text="{{__('safety.service-2')}}" />
                    <x-security-box icon="{{asset('assets/icons/security-3.svg')}}" text="{{__('safety.service-3')}}" />
                    <x-security-box icon="{{asset('assets/icons/security-4.svg')}}" text="{{__('safety.service-4')}}" />
                    <x-security-box icon="{{asset('assets/icons/security-5.svg')}}" text="{{__('safety.service-5')}}" />
                    <x-security-box icon="{{asset('assets/icons/security-6.svg')}}" text="{{__('safety.service-6')}}" />

                </div>
            </div>



        </x-container>
    </section>

</x-layouts.app>