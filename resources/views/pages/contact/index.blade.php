<x-layouts.app title="{{__('meta.contact-index.title')}}" description="{{__('meta.contact-index.desc')}}">

    <x-layouts.app-wrapper :apartment="$apartment" :apartments="$apartments" :home="$home">

    {{-- HEADER --}}
    <x-header subtitle="{{$apartment->title}}" title="{{__('global.headings.contact')}}" bgi="{{asset('storage/' . $apartment->banner_contact)}}" />


    {{-- MAIN --}}
    <section class="py-20">
        <x-container class="max-w-screen-xl">

            <x-heading heading="{{__('global.headings.contact')}}" />
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
                                href="{{$apartment->map_link}}">{{$apartment->address}},<br/> {{$apartment->city}}</a>
                        </x-contact-box>

                        <x-contact-box title="Social Media">


                            <div class="flex justify-start  items-center gap-3">

                           
                                @foreach ($apartment->socials as $social)

                                
                                <x-socials dark :social="$social" />
                                @endforeach

                              

                            </div>
                        </x-contact-box>

                    </div>
                  

                </div>



                <livewire:contact-form />

    </section>

    </x-container>


    </x-layouts.app-wrapper>
</x-layouts.app>