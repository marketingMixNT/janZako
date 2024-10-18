<x-layouts.home title="
{{$contactPage->meta_title ? $contactPage->meta_title : __('meta.contact-home.title')}}"
    description="{{$contactPage->meta_desc ? $contactPage->meta_desc : __('meta.contact-home.desc')}}">

    <x-layouts.home-wrapper :home="$home" :apartments='$apartments'>


        {{-- HEADER --}}
        <x-header title="{{__('global.headings.contact')}}" bgi="{{asset('storage/'.$contactPage->banner)}}" />

        {{-- MAIN --}}
        <section class="py-20">
            <x-container class="max-w-screen-xl">

                <x-heading heading="{{__('global.headings.contact')}}" />
                <!--CONTENT-->
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-20 py-12 lg:py-24 ">

                    <div class="order-1 lg:order-none">
                        <x-title>Apartamenty Jan</x-title>
                        <div class="grid sm:grid-cols-2 sm:grid-rows-2 gap-x-24 h-[80%]">

                            <x-contact-box title="{{__('contact.email')}}">
                                <a class="link-hover--dark text-xl font-light"
                                    href="mailto:{{$home->mail}}">{{$home->mail}}</a>
                            </x-contact-box>

                            <x-contact-box title="{{__('contact.phone')}}">

                                <a href="tel:+48{{$home->phone}}" class="link-hover--dark text-xl font-light mb-2">+48
                                    {{$home->phone}}</a>
                                    @if ($home->phone_second)
                                    <a href="tel:+48{{$home->phone_second}}" class="link-hover--dark text-xl font-light mb-2">+48 {{$home->phone_second}}</a>
                                    @endif
                                
                            </x-contact-box>





                        </div>

                        <div class="flex flex-col gap-2 col-span-2">


                            <span class="font-light">{{__('contact.bank-account')}} {{$home->bank}}: {{$home->bank_account}}</span>

                        </div>
                    </div>



                    <livewire:contact-form />

        </section>

        </x-container>
    </x-layouts.home-wrapper>

    </x-layouts.app>