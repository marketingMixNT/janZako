<section class="pt-16 pb-24">
    <x-container class="max-w-screen-2xl 2xl:px-12">



        <x-heading-horizontal title="Wybierz swoje idealne miejsce">


            <x-text>Odkryj naszą starannie wyselekcjonowaną ofertę apartamentów w Zakopanem, gdzie każdy detal został zaprojektowany z myślą o Twoim komforcie. Niezależnie od tego, czy planujesz romantyczny wypad, rodzinne wakacje, czy aktywny weekend w górach, mamy idealne miejsce, które spełni Twoje oczekiwania. Zarezerwuj już dziś i ciesz się niezapomnianym pobytem w sercu Tatr!</x-text>


        </x-heading-horizontal>


        {{-- <div class="flex flex-col pt-12 "> --}}
            <div class="grid md:grid-cols-2 xl:grid-cols-3 gap-x-16 pt-20 px-2 sm:w-[90%] md:w-full mx-auto">
              



                @foreach ($apartment->rooms as $room)
                <x-apartment-card :apartment="$room" :testSlug="$apartment->slug" :roomSlug="$room->slug" />
            @endforeach
            

            </div>

    </x-container>
</section>