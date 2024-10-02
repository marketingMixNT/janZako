<x-layouts.app title="{{__('contact.meta-title')}}" description="{{__('contact.meta-desc')}}">

    <x-nav.navbar-rooms :apartment="$apartment" />

    {{-- HEADER --}}
    <x-header title="{{__('contact.header-heading')}}"
        bgi="bg-[url('/public/assets/images/pokoje/mobile/pokoje-19.webp')] sm:bg-[url('/public/assets/images/pokoje/pokoje-19.webp')]" />

    {{-- MAIN --}}
    <section class="py-20">
        <x-container class="max-w-screen-xl">

            <x-heading heading="{{__('contact.heading')}}" />
            <!--CONTENT-->
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-20 py-12 lg:py-24 ">

                <div class="order-1 lg:order-none">
                    <x-title>Hotel Jan</x-title>
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
                                href="https://maps.app.goo.gl/jytJpoJNhHMk9gAp9">{{$apartment->address}}</a>
                        </x-contact-box>

                        <x-contact-box title="Social Media">


                            <div class="flex justify-start  items-center gap-3">

                           
                                @foreach ($apartment->socials as $social)

                                <p>{{$social->name}}</p>
                                {{-- <x-socials :social="$social" /> --}}
                                @endforeach

                                {{-- <a href="https://www.facebook.com/hotel.jan.1?fref=ts" target="_blank"
                                    rel="norefferer nofollow">
                                    <x-lucide-facebook class="w-8 hover:scale-110 duration-300" />
                                </a>

                                <a href="https://www.instagram.com/hoteljankrakow/" target="_blank"
                                    rel="norefferer nofollow">
                                    <x-lucide-instagram class="w-8 hover:scale-110 duration-300" />
                                </a>
                                <a href="https://www.tripadvisor.com/Hotel_Review-g274772-d519743-Reviews-Hotel_Jan-Krakow_Lesser_Poland_Province_Southern_Poland.html"
                                    target="_blank" rel="norefferer nofollow">
                                    <x-lineawesome-tripadvisor class="w-8 hover:scale-110 duration-300" />
                                </a> --}}

                            </div>
                        </x-contact-box>

                    </div>
                    <div class="flex flex-col gap-2">

                        <h3 class="text-lg font-light uppercase">{{__('contact.reception')}}</h3>
                        <h3 class="text-lg font-light uppercase">{{__('contact.bank-account')}}</h3>
                        <span class="font-light">bank: mBank</span>
                        <span class="font-light">{{__('contact.bank-account-number')}}: 59 1140 2004 0000 3302 7685
                            1219</span>
                        <span class="font-light">SWIFT: BREX PL PW MBK</span>
                    </div>

                </div>



                <livewire:contact-form />

    </section>

    </x-container>


    {!!$apartment->map!!}

    <x-footer-apartment :apartment="$apartment" />
</x-layouts.app>