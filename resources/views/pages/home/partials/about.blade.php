<!--CONTAINER-->
<section id="o-nas" class="pt-16 pb-8 ">
    <x-container class="max-w-screen-xl  ">





        <div class="grid lg:grid-cols-2 gap-24 pt-12 lg:py-20">

            {{-- item --}}
            <div
                class="flex flex-col justify-center md:w-[75%] lg:w-full mx-auto items-center lg:items-start gap-12 order-1 lg:order-none">
                {{-- <img src="{{asset('assets/images/apartamenty-jan-o-nas-2.webp')}}" --}}
                <img src="{{asset($home->about_images[1])}}"
                    alt="Krupówki w Zakopanem"
                    class="aspect-[4/3]  object-cover w-full  shadow-md order-1 lg:order-none" loading="lazy"/>
                <x-text class="lg:mr-20">{{$home->about_text_first}}</x-text>
                {{-- <x-text class="lg:mr-20">Otoczeni malowniczymi krajobrazami, nasi goście mogą cieszyć się bliskością
                    natury oraz dostępem do licznych atrakcji turystycznych. Zakopane to raj dla miłośników aktywnego
                    wypoczynku — latem można wybierać spośród licznych szlaków pieszych i rowerowych, a zimą zjeżdżać na
                    nartach lub snowboardzie. Dodatkowo, w okolicy znajdują się termalne baseny, które zapewnią relaks
                    po dniu pełnym przygód. Apartamenty Jan to idealne miejsce dla każdego, kto pragnie odkryć piękno
                    Tatr, delektować się lokalną kuchnią i spędzać czas w komfortowych warunkach, gdzie każdy dzień
                    przynosi nowe możliwości odkrywania tego wyjątkowego regionu.</x-text> --}}

                <div class="self-start">

                    {{--
                    <x-ui.link href="{{route('about')}}" title="{{__('home.about.link')}}" /> --}}
                </div>

            </div>


            {{-- item --}}
            <div class="flex flex-col justify-center md:w-[75%] lg:w-full mx-auto items-center lg:items-start gap-12 ">
                <div class="space-y-4">
                    <x-title>Twoje wyjątkowe <br /> miejsce w Tatrach</x-title>

                    <x-text class="lg:mr-20">
                       {{$home->about_text_first}}
                    </x-text>
                    {{-- <x-text class="lg:mr-20">
                        Zakopane to miejsce, gdzie magia gór łączy się z niezrównanym komfortem. Oferujemy trzy
                        wyjątkowe obiekty, które stanowią idealną bazę wypadową do odkrywania uroków Tatr. Nasze
                        apartamenty zostały zaprojektowane z myślą o komforcie i relaksie naszych gości, oferując
                        przestronne wnętrza, nowoczesne udogodnienia oraz przytulną atmosferę. Każdy z naszych obiektów
                        jest starannie urządzony, aby spełnić oczekiwania zarówno par szukających romantycznych chwil,
                        jak i rodzin pragnących spędzić niezapomniane wakacje w górach.
                    </x-text> --}}
                </div>
                {{-- <img src="{{asset('assets/images/apartamenty-jan-o-nas-1.webp')}}" --}}
                <img src="{{asset($home->about_images[0])}}"
                    alt="stok w okolicach Zakopanego" class="aspect-[4/3]  object-cover w-full shadow-md"
                    loading="lazy"  />
            </div>
        </div>
    </x-container>
</section>