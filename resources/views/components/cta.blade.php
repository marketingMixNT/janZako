@props(['link'=>false])

<section
    class="py-24 bg-cover bg-center bg-gray-500 bg-blend-multiply bg-no-repeat bg-fixed 
    {{-- g-[url('/public/assets/images/pokoje/mobile/pokoje-10.webp')] sm:bg-[url('/public/assets/images/pokoje/pokoje-10.webp')]">
    --}}
    bg-[url('https://images.unsplash.com/photo-1727775805114-a87c6bcaf9db?q=80&w=4470&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D')]">


    <x-container class="max-w-screen-xl flex flex-col justify-center items-center gap-8 text-white py-20 mx-auto">


        <h2 class="text-center text-5xl 2xl:text-6xl  tracking-wider font-heading font-extralight ">
            Zarezerwuj swój wymarzony pobyt
        </h2>
        <x-text>Odkryj wyjątkowy klimat Zakopanego, relaksując się w naszych stylowych apartamentach.</x-text>

        <x-ui.link-button aria_label="Zarezerwuj" href="{{ $link ?? url('https://booking.profitroom.com/' . str_replace('_', '-', app()->getLocale()) . '/willajan/home?currency=PLN') }}"


            target="_blank" rel="noreferrer nofollow">
            Zarezerwuj</x-ui.link-button>

    </x-container>

</section>