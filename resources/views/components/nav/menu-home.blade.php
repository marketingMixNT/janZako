<div id="menu" class=" menu-close  fixed  top-[10px] sm:top-[58px] bottom-0 right-0 left-0 xs
        :overflow-hidden z-40 ">
    {{-- <div class="modal gap-24"> --}}
        <div
            class="fixed top-[77px] sm:top-[29px] left-0 bottom-0 right-0 flex flex-col justify-center items-center  gap-24 bg-primary-400 text-fontBlack">
            <!--NAV ITEMS-->
            <ul class="text-heading text-fontLight-400 flex justify-center items-center flex-col gap-3 xs:gap-4 md:gap-12 ">

               

                <x-nav.menu-item href="{{route('home.index')}}/#o-nas">O nas</x-nav.menu-item>
                <x-nav.menu-item href="{{route('apartment.index')}}">Nasze obiekty</x-nav.menu-item>
                <x-nav.menu-item href="{{route('home.location')}}">Lokalizacja</x-nav.menu-item>
                <x-nav.menu-item href="{{route('home.contact')}}">Kontakt</x-nav.menu-item>
                <x-nav.menu-item href="https://jan-krakow.pl" target="_blank" rel="noreferrer nofollow">Hotel w Krakowie</x-nav.menu-item>

            </ul>

            {{-- <img src="/assets/decor--light.png" alt="" class="w-16 md:w-18 2xl:w-20 2xl:my-6" /> --}}
            <!--MOBILE LANGUAGE SWITCHER-->
            <div class=" mt-6 absolute right-5 bottom-5 opacity-100">
                <x-nav.language-switcher />
            </div>
            <!--SOCIAL-->
          
        </div>
    </div>