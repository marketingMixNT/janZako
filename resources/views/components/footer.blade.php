<footer class="bg-secondary-200 py-12 text-fontWhite pb-24 lg:pb-12">
    <!--CONTAINER-->
    <div class="max-w-screen-xl mx-auto space-y-10">
        <!--GRID-->
        <div
            class="flex flex-col gap-10 sm:gap-0  s justify-center items-center sm:items-start sm:grid sm:grid-rows-2 lg:grid-rows-1 sm:grid-cols-3 lg:grid-cols-4 mx-4">
            <!--ONE-->
            <div class="flex items-center justify-center col-span-4 lg:col-span-1">
                <a href="{{route('home')}}" aria-label="Logo Hotelu Jan w Krakowie">
                    <img src="{{ asset('/assets/logo.svg') }}" alt="logo Hotel Jan" class="w-32 lg:ml-16"  width="128" height="73"/></a>
            </div>
            <!--TWO-->
            <div
                class=" mx-4 md:mx-12 flex flex-col gap-6 justify-center items-center text-center sm:justify-start sm:items-start sm:text-start">
                <div>
                    <h2 class="font-heading text-lg uppercase mb-2 font-light">
                       {{__('footer.call-to-us')}}
                    </h2>
                    <a href="tel:+48124217640" class="font-thin font-heading link-hover text-sm">+48 12 421 76 40</a>
                </div>
                <div>
                    <h2 class="font-heading text-lg uppercase mb-2 font-light">
                        {{__('footer.write-to-us')}}
                    </h2>
                    <a href="mailto:biuro@jan-krakow.pl"
                        class="font-thin font-heading link-hover text-sm">biuro@jan-krakow.pl</a>
                </div>
            </div>
            <!--THREE-->
            <div
                class="mx-4 md:mx-12 flex flex-col justify-center items-center text-center sm:justify-start sm:items-start sm:text-start">
                <h2 class="font-heading text-lg uppercase mb-2 font-light">   {{__('footer.address')}}</h2>
                <a href="https://maps.app.goo.gl/Zi7FXxCtHkR9TkG66" target="_blank"
                    class="font-thin font-heading link-hover text-sm">Grodzka 11, <br />31-006 Kraków</a>
            </div>
            <!--FOUR-->
            <div class="mx-4  md:mx-12">
                <h2 class="font-heading text-lg uppercase mb-2 font-light ">
                    Social Media
                </h2>
                <div class="flex justify-center sm:justify-start items-center gap-3">
                    <a href="https://www.facebook.com/people/Hotel-Jan/100057063776456/" target="_blank" rel="norefferer nofollow" aria-label="facebook">
                        <x-lucide-facebook class="w-6 hover:scale-110 duration-300" />
                    </a>
                   
                    <a href="https://www.instagram.com/hoteljan.official/" target="_blank" rel="norefferer nofollow" aria-label="instagram">
                        <x-lucide-instagram class="w-6 hover:scale-110 duration-300" />
                    </a>
                    <a href="https://www.tripadvisor.com/Hotel_Review-g274772-d519743-Reviews-Hotel_Jan-Krakow_Lesser_Poland_Province_Southern_Poland.html"
                        target="_blank" rel="norefferer nofollow" aria-label="tripadvisor">
                        <x-lineawesome-tripadvisor class="w-6 hover:scale-110 duration-300" />
                    </a>

                </div>
            </div>

        </div>
        <!--END GRID-->
        <!--LINKS-->
        <div class="max-w-screen-lg mx-4 sm:mx-24 xl:mx-auto">

            <hr class="opacity-40" />
            <ul class="flex justify-center items-center gap-8 text-xs py-4">
                <li>
                    {{-- <a href="{{route('privacy-policy')}}" class="link-hover font-light">   {{__('footer.privacy-policy')}}</a> --}}
                </li>
                {{-- <li><a href="{{route('regulations')}}" class="link-hover font-light">    {{__('footer.regulations')}}</a></li> --}}
            </ul>
            <hr class="opacity-40" />
        </div>

        <!--BOTTOM-->
        <div class="max-w-screen-lg mx-4 sm:mx-24 xl:mx-auto text-sm  flex justify-between items-center">
            <a href="{{route('home')}}" class="flex gap-2 justify-start items-center link-hover font-light">
                <span>© <span id="footerYear"></span></span>
                <span>Hotel Jan</span>
            </a>

            <div>
                <a href="https://marketingmix.pl" target="_blank" class="flex justify-center items-center" aria-label="Agencja MarketingMix"><img
                        src="{{ asset('/assets/marketingmix-logo.svg') }}" class="w-32 hover:scale-105 duration-300"
                        alt="logo wykonawcy - agencja MarketingMix" width="128" height="20"/></a>
            </div>
        </div>
    </div>
    <!--END CONTAINER-->
</footer>