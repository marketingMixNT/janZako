<footer class="bg-secondary-200 py-12 text-fontWhite pb-24 lg:pb-12">
    <!--CONTAINER-->
    <div class="max-w-screen-xl mx-auto space-y-10">
        <!--GRID-->
        <div
            class="flex flex-col gap-10 sm:gap-0  s justify-center items-center sm:items-start sm:grid sm:grid-rows-2 lg:grid-rows-1 sm:grid-cols-3 lg:grid-cols-4 mx-4">
            <!--ONE-->
            <div class="flex items-center justify-center col-span-4 lg:col-span-1">
                <a href="{{route('home.index')}}" aria-label="Logo Hotelu Jan w Krakowie">
                    <img src="{{ asset('/assets/logo.svg') }}" alt="logo Apartamenty Jan" class="w-32 lg:ml-16"
                        width="128" height="73" /></a>
            </div>
            <!--TWO-->
            <div
                class=" mx-4 md:mx-12 flex flex-col gap-6 justify-center items-center text-center sm:justify-start sm:items-start sm:text-start">
                <div>
                    <h2 class="font-heading text-lg uppercase mb-2 font-light">
                        Zadzwoń do nas
                    </h2>
                    <a href="tel:+48602512008" class="font-thin font-heading link-hover text-sm mb-2">+48 602-512-008</a>
                    <a href="tel:+48182014207" class="font-thin font-heading link-hover text-sm">+48 18 201-42-07</a>
                </div>

            </div>
            <!--THREE-->
            <div>
                <h2 class="font-heading text-lg uppercase mb-2 font-light">
                    Napisz do nas
                </h2>
                <a href="mailto:biuro@apartamenty-jan.com.pl"
                    class="font-thin font-heading link-hover text-sm">biuro@apartamenty-jan.com.pl</a>
            </div>
            <!--FOUR-->
            

        </div>
        <!--END GRID-->
        <!--LINKS-->
        <div class="max-w-screen-lg mx-4 sm:mx-24 xl:mx-auto">

            <hr class="opacity-40" />
            <ul class="flex justify-center items-center gap-8 text-xs py-4">
                <li>
                    <a href="{{route('home.privacy-policy')}}" class="link-hover font-light">
                        Polityka Prywatności</a>
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