<section class="py-24 bg-cover bg-center bg-gray-500 bg-blend-multiply bg-no-repeat bg-fixed bg-[url('/public/assets/images/pokoje/mobile/pokoje-10.webp')] sm:bg-[url('/public/assets/images/pokoje/pokoje-10.webp')]">


    <x-container class="max-w-screen-xl flex flex-col justify-center items-center gap-8 text-white py-20 mx-auto">


        <h2 class="text-center text-5xl 2xl:text-6xl  tracking-wider font-heading font-extralight ">
           {{__('home.cta.heading')}}</h2>
        <x-text > {{__('home.cta.text')}}</x-text>

        <x-ui.link-button aria_label="Zarezerwuj" href="https://booking.profitroom.com/{{ str_replace('_', '-', app()->getLocale()) }}/aparthoteljan/home?currency=PLN"
            target="_blank">
            {{__('home.cta.book')}}</x-ui.link-button>

    </x-container>

</section>


