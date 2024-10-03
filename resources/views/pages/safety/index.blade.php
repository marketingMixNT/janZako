<x-layouts.app title="Bezpieczeństwo w Apartamentach Jan - Twój Spokojny Pobyt w Zakopanem"
    description="Dbamy o Twoje bezpieczeństwo w Apartamentach Jan. Poznaj nasze standardy higieny i ochrony, aby cieszyć się spokojnym i bezpiecznym wypoczynkiem w Zakopanem.">

    <x-layouts.app-wrapper :apartment="$apartment">

        <x-header subtitle="{{$apartment->title}}" title="Bezpieczeństwo" bgi="{{asset('assets/images/apartamenty-jan/apartament-dwuosobowy-z-widokiem-na-gory-i-tarasem/apartamenty-jan-apartament-dwuosobowy-z-widokiem-na-gory-i-tarasem-6.webp')}}" />




        <section class="py-20">
            <x-container class="max-w-screen-2xl">

                <div class="flex flex-col justify-center items-center gap-6  text-center">
                    <x-title>W apartamencie każdy powinien czuć się bezpiecznie.</x-title>
                    <x-text>W Apartamentach Jan zawsze dokładaliśmy wszelkich starań, aby tak właśnie było, czego
                        dowodem są oceny 9,5/10 i 4,8/5 za czystość na serwisach Booking i Expedia.</x-text>

                    <div class="grid xs:grid-cols-2 lg:grid-cols-3 gap-12 xs:gap-20 pt-12">
                        <x-security-box icon="{{asset('assets/icons/security-1.svg')}}" text="Dezynfekcja" />
                        <x-security-box icon="{{asset('assets/icons/security-2.svg')}}"
                            text="Wysokie oceny i standardy" />
                        <x-security-box icon="{{asset('assets/icons/security-3.svg')}}" text="Ozonowanie obiektu" />
                        <x-security-box icon="{{asset('assets/icons/security-4.svg')}}"
                            text="Współpraca z opieką lekarską" />
                        <x-security-box icon="{{asset('assets/icons/security-5.svg')}}"
                            text="Środki higieniczne w pokoju i na recepcji" />
                        <x-security-box icon="{{asset('assets/icons/security-6.svg')}}"
                            text="Brak centralnej klimatyzacji" />

                    </div>
                </div>



            </x-container>
        </section>



    </x-layouts.app-wrapper>

</x-layouts.app>