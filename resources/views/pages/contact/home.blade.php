<x-layouts.home title="Kontakt z Apartamentami Jan - Skontaktuj się z Nami"
    description="Masz pytania dotyczące naszych apartamentów w Zakopanem? Skontaktuj się z nami! Sprawdź nasze dane kontaktowe i uzyskaj wszystkie potrzebne informacje. Jesteśmy tutaj, aby Ci pomóc!">


    {{-- HEADER --}}
    <x-header title="Kontakt"
        bgi="{{asset('assets/images/apartamenty-jan/apartament-dwuosobowy/apartamenty-jan-apartament-dwuosobowy7.webp')}}" />

    {{-- MAIN --}}
    <section class="py-20">
        <x-container class="max-w-screen-xl">

            <x-heading heading="Kontakt" />
            <!--CONTENT-->
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-20 py-12 lg:py-24 ">

                <div class="order-1 lg:order-none">
                    <x-title>Hotel Jan</x-title>
                    <div class="grid sm:grid-cols-2 sm:grid-rows-2 gap-x-24 h-[80%]">

                        <x-contact-box title="E-mail">
                            <a class="link-hover--dark text-xl font-light"
                                href="mailto:biuro@apartamenty-jan.com.pl">biuro@apartamenty-jan.com.pl</a>
                        </x-contact-box>

                        <x-contact-box title="Telefon">

                            <a href="tel:+48602512008" class="link-hover--dark text-xl font-light mb-2">+48
                                602-512-008</a>
                            <a href="tel:+48182014207" class="link-hover--dark text-xl font-light mb-2">+48 18
                                201-42-07</a>
                        </x-contact-box>





                    </div>

                    <div class="flex flex-col gap-2 col-span-2">


                        <span class="font-light">Numer konta Mbank: 85 1140 2004 0000 3902 7685 1621</span>

                    </div>
                </div>



                <livewire:contact-form />

    </section>

    </x-container>


    </x-layouts.app>