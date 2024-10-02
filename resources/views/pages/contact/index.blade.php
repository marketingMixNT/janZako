<x-layouts.app title="Kontakt z Apartamentami Jan - Skontaktuj się z Nami" description="Masz pytania dotyczące naszych apartamentów w Zakopanem? Skontaktuj się z nami! Sprawdź nasze dane kontaktowe i uzyskaj wszystkie potrzebne informacje. Jesteśmy tutaj, aby Ci pomóc!">

    <x-layouts.app-wrapper :apartment="$apartment">

    {{-- HEADER --}}
    <x-header subtitle="{{$apartment->title}}" title="Kontakt" bgi="{{asset('storage/' . $apartment->banner_contact)}}" />


    {{-- MAIN --}}
    <section class="py-20">
        <x-container class="max-w-screen-xl">

            <x-heading heading="Kontakt" />
            <!--CONTENT-->
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-20 py-12 lg:py-24 ">

                <div class="order-1 lg:order-none">
                    <x-title>{{$apartment->title}}</x-title>
                    <div class="grid sm:grid-cols-2 sm:grid-rows-2 gap-x-24 h-[80%]">

                        <x-contact-box title="E-mail">
                            <a class="link-hover--dark text-xl font-light"
                                href="mailto:{{$apartment->mail}}">{{$apartment->mail}}</a>
                        </x-contact-box>

                        <x-contact-box title="{{__('contact.phone')}}">
                            <a class="link-hover--dark text-xl font-light mb-2"
                                href="tel:+48{{$apartment->phone}}">{{$apartment->phone}}</a>

                        </x-contact-box>

                        <x-contact-box title="{{__('contact.address')}}">
                            <a class="link-hover--dark text-xl font-light"
                                href="{{$apartment->map_link}}">{{$apartment->address}}</a>
                        </x-contact-box>

                        <x-contact-box title="Social Media">


                            <div class="flex justify-start  items-center gap-3">

                           
                                @foreach ($apartment->socials as $social)

                                
                                <x-socials dark :social="$social" />
                                @endforeach

                              

                            </div>
                        </x-contact-box>

                    </div>
                    {{-- <div class="flex flex-col gap-2">

                        <h3 class="text-lg font-light uppercase">{{__('contact.reception')}}</h3>
                        <h3 class="text-lg font-light uppercase">{{__('contact.bank-account')}}</h3>
                        <span class="font-light">bank: mBank</span>
                        <span class="font-light">{{__('contact.bank-account-number')}}: 59 1140 2004 0000 3302 7685
                            1219</span>
                        <span class="font-light">SWIFT: BREX PL PW MBK</span>
                    </div> --}}

                </div>



                <livewire:contact-form />

    </section>

    </x-container>


    </x-layouts.app-wrapper>
</x-layouts.app>