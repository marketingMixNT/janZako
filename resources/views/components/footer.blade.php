@props(['home','apartment','apartments'])

<footer class="bg-secondary-200 py-12 text-fontWhite pb-12">
    <!--CONTAINER-->
    <div class="max-w-screen-lg mx-auto space-y-10">

        <div class="flex items-start justify-center">
            <a href="{{route('apartment.index')}}" aria-label="Logo Hotelu Jan w Krakowie">
                <img src="{{ asset('storage/'.$apartment->logo) }}" alt="logo Apartamenty Jan" class="w-32 " width="128"
                    height="73" /></a>
        </div>

        <!--GRID-->
        <div
            class="flex flex-col gap-10 sm:gap-x-0 sm:gap-y-12 justify-center items-center sm:items-start sm:grid   sm:grid-cols-3  mx-4">

            @foreach ($apartments as $apartment)
            <div class="flex flex-col justify-center items-center sm:items-start mx-auto text-left">
                <h2 class="font-heading text-lg uppercase mb-2 font-light">
                    {{$apartment->title}}
                </h2>
                <div>
                    <p class="font-thin font-heading text-sm"> {{$apartment->address}}</p>
                    <p class="font-thin font-heading text-sm"> {{$apartment->city}}</p>
                </div>
                <a href="phone:+48{{$apartment->phone}}" class="font-heading link-hover font-normal pt-3">+48
                    {{$apartment->phone}}</a>
                @if ($apartment->phone_second)
                <a href="phone:+48{{$apartment->phone_second}}" class="font-heading link-hover font-normal pt-3">+48
                    {{$apartment->phone_second}}</a>
                @endif
            </div>

            @endforeach

        </div>




        <div class="flex flex-col justify-center items-center mx-auto text-left">
            <h2 class="font-heading text-lg uppercase mb-2 font-light">
               {{__('footer.all-objects')}}
            </h2>
           
            <div class="flex flex-col justify-center items-center gap-1">
                <a href="phone:+48{{$home->phone}}" class="font-heading link-hover font-normal ">+48
                    {{$home->phone}}
                </a>
                @if($home->phone_second)
                <a href="phone:+48{{$home->phone_second}}" class="font-heading link-hover font-normal ">+48
                    {{$home->phone_second}}
                </a>
                @endif
                <a href="mailto:{{$home->mail}}" class="font-heading link-hover font-normal ">{{$home->mail}}
                </a>
                <div class="flex flex-col justify-center items-center pt-4">
                    <p class="font-thin font-heading text-sm">{{__('footer.bank-account')}} {{$home->bank}}:</p>
                    <p class="font-thin font-heading text-sm">{{$home->bank_account}}</p>
                </div>
            </div>
            <p class="text-accent-400 font-medium pt-6">  {{__('footer.reception')}}</p>
        </div>


        {{-- <div
            class="max-w-screen-lg mx-4 sm:mx-24 xl:mx-auto text-sm  flex gap-6 flex-col lg:flex-row justify-between items-center">
            <div class="flex items-start justify-start">
                <a href="{{route('home.index')}}" aria-label="Logo Hotelu Jan w Krakowie">
                    <img src="{{ asset('storage/'.$home->logo) }}" alt="logo Apartamenty Jan" class="w-32 lg:ml-16"
                        width="128" height="73" /></a>
            </div>

            <div class="flex flex-col sm:flex-row justify-center items-start sm:items-center gap-12">

                <div>
                    <h2 class="font-heading text-lg uppercase mb-2 font-light">
                        {{__('footer.write-to-us')}}
                    </h2>
                    <a href="mailto:{{$home->mail}}"
                        class="font-thin font-heading link-hover text-sm">{{$home->mail}}</a>
                </div>
                <div>
                    <h2 class="font-heading text-lg uppercase mb-2 font-light">
                        {{__('footer.call-to-us')}}
                    </h2>
                    <a href="tel:+48{{$home->phone}}"
                        class="font-thin font-heading link-hover text-sm ">{{$home->phone}}</a>

                </div>


            </div>
        </div> --}}



        <!--LINKS-->
        <div class="max-w-screen-lg mx-4 sm:mx-24 xl:mx-auto">

            <hr class="opacity-40" />
            <ul class="flex justify-center items-center gap-8 text-xs py-4">
                <li>
                    <a href="{{route('home.privacy-policy')}}" class="link-hover font-light">
                        {{__('footer.privacy-policy')}}</a>
                </li>
                {{-- <li><a href="{{route('regulations')}}" class="link-hover font-light">
                        {{__('footer.regulations')}}</a></li> --}}
            </ul>
            <hr class="opacity-40" />
        </div>

        <!--BOTTOM-->
        <div class="max-w-screen-lg mx-4 sm:mx-24 xl:mx-auto text-sm  flex justify-between items-center">
            <a href="{{route('home.index')}}" class="flex gap-2 justify-start items-center link-hover font-light">
                <span>© <span id="footerYear"></span></span>
                <span>Apartamenty Jan</span>
            </a>

            <div>
                <a href="https://marketingmix.pl" target="_blank" class="flex justify-center items-center"
                    aria-label="Agencja MarketingMix"><img src="{{ asset('/assets/marketingmix-logo.svg') }}"
                        class="w-32 hover:scale-105 duration-300" alt="logo wykonawcy - agencja MarketingMix"
                        width="128" height="20" /></a>
            </div>
        </div>
    </div>
    <!--END CONTAINER-->
</footer>

<div class="flex justify-center items-center max-w-screen-lg mx-auto pb-20 lg:pb-0">
    <img src="{{asset('assets/pfr.png')}}" alt="" class="md:hidden w-[60%] ">
    <img src="{{asset('assets/pfr-horizontal.png')}}" alt="" class="hidden md:block">
</div>