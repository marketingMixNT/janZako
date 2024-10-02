<nav id="navbar"
    class=" fixed left-0 top-0 right-0 z-50 transition duration-500 text-white px-4 md:px-12 bg-transparent ">

    <div class="flex flex-col justify-between items-center max-w-screen-max mx-auto  ">

        <div class="flex justify-between items-center w-full lg:border-b py-4 sm:py-4 ">

            <div class="hidden lg:flex items-center gap-6 ">
                <x-nav.language-switcher />
                <div class="flex items-center gap-4">

                    <a href="tel:+48124217640" aria-label="Telefon">
                        <x-lucide-phone class="w-4 hover:scale-105 duration-300" />
                    </a>
                    <a href="mailto:biuro@jan-krakow.pl" aria-label="Email">
                        <x-lucide-mail class="w-4  hover:scale-105 duration-300" />
                    </a>
                </div>
            </div>

            <a href="{{ route('home.index') }}"
                class="lg:absolute lg:left-1/2 transform lg:-translate-x-1/2 flex flex-col justify-center items-center gap-1 ">
                <img src="{{ asset('assets/logo.svg') }}" alt="logo Hotelu Jan w Krakowie" width="96" height="50"
                    class=" w-24 " />
            </a>
            <x-ui.link-button id="nav-booking--light" type="primary"
                href="{{route('apartment.index')}}"
                aria-label="Rezerwuj" class="hidden lg:block" target="_blank">Zarezerwuj
            </x-ui.link-button>
            <div class="lg:hidden ">
                <x-nav.hamburger />
            </div>

        </div>
        <div id="nav-links" class="max-w-screen-xl mx-auto py-3.5 hidden lg:block ">
            <ul class="flex gap-6 xl:gap-12">

                <x-nav.menu-item href="{{route('home.index')}}/#o-nas">O nas</x-nav.menu-item>
                <x-nav.menu-item href="{{route('apartment.index')}}">Nasze obiekty</x-nav.menu-item>
                <x-nav.menu-item href="{{route('home.location')}}">Lokalizacja</x-nav.menu-item>
                <x-nav.menu-item href="{{route('home.contact')}}">Kontakt</x-nav.menu-item>
                <x-nav.menu-item href="https://jan-krakow.pl" target="_blank" rel="noreferrer nofollow">Hotel w Krakowie</x-nav.menu-item>

                {{-- <x-nav.menu-item href="{{route('about')}}">{{__('navbar.about')}}</x-nav.menu-item>
                <x-nav.menu-item href="{{route('apartment.index')}}">{{__('navbar.rooms')}}</x-nav.menu-item>
                <x-nav.menu-item
                    href="https://booking.profitroom.com/{{ str_replace('_', '-', app()->getLocale()) }}/aparthoteljan/home?currency=PLN">
                    {{__('navbar.offers')}}</x-nav.menu-item>
                <x-nav.menu-item href="{{route('local-attractions')}}">{{__('navbar.local-attractions')}}
                </x-nav.menu-item>
                <x-nav.menu-item href="{{route('transfers')}}">{{__('navbar.transfers')}}
                </x-nav.menu-item>
                <x-nav.menu-item href="{{route('gallery')}}">{{__('navbar.gallery')}}</x-nav.menu-item>
                <x-nav.menu-item href="{{route('safety')}}">{{__('navbar.safety')}}</x-nav.menu-item>
                <x-nav.menu-item href="{{route('contact')}}">{{__('navbar.contact')}}</x-nav.menu-item>
                <x-nav.menu-item href="{{route('other-apartments')}}">{{__('navbar.other-objects')}}</x-nav.menu-item>
                --}}

            </ul>

        </div>

    </div>
</nav>




{{-- MOBILE MENU --}}
<x-nav.menu-home />