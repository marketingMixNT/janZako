@props(['apartment'])

<div id="menu" class=" menu-close  fixed  top-[10px] sm:top-[58px] bottom-0 right-0 left-0 xs
        :overflow-hidden z-40 ">
    {{-- <div class="modal gap-24"> --}}
        <div
            class="fixed top-[77px] sm:top-[29px] left-0 bottom-0 right-0 flex flex-col justify-center items-center  gap-24 bg-primary-400 text-fontBlack">
            <!--NAV ITEMS-->
            <ul
                class="text-heading text-fontLight-400 flex justify-center items-center flex-col gap-3 xs:gap-4 md:gap-12 ">


                <x-nav.menu-item href="{{route('apartment.show',$apartment->slug)}}/#{{__('sections.about')}}">
                    {{__('navbar.about')}}</x-nav.menu-item>
                <x-nav.menu-item href="{{route('room.index',$apartment->slug)}}">{{__('navbar.rooms')}}
                </x-nav.menu-item>
                <x-nav.menu-item href="{{$apartment->booking_link}}">{{__('navbar.offers')}}</x-nav.menu-item>
                <x-nav.menu-item href="{{route('attractions',$apartment->slug)}}">{{__('navbar.local-attractions')}}
                </x-nav.menu-item>
                <x-nav.menu-item href="{{ route('gallery',$apartment->slug) }}">{{__('navbar.gallery')}}
                </x-nav.menu-item>
                <x-nav.menu-item href="{{route('safety',$apartment->slug)}}">{{__('navbar.safety')}}</x-nav.menu-item>
                <x-nav.menu-item href="  {{ route('contact',$apartment->slug) }}">{{__('navbar.contact')}}
                </x-nav.menu-item>
                <x-nav.menu-item href="  {{ route('home.index') }}">{{__('navbar.apartments')}}</x-nav.menu-item>
                <x-nav.menu-item href="" target="_blank" role="noreferrer nofollow">{{__('navbar.hotel-in-cracow')}}
                </x-nav.menu-item>

            </ul>


            <!--MOBILE LANGUAGE SWITCHER-->
            <div class=" mt-6 absolute right-5 bottom-5 opacity-100">
                <x-nav.language-switcher />
            </div>
            <!--SOCIAL-->
            <div class="flex justify-center items-center gap-6 absolute left-5 bottom-5 lg:static">

                @foreach ($apartment->socials as $social)

                <x-socials dark :social="$social" />
                @endforeach










            </div>
        </div>
    </div>