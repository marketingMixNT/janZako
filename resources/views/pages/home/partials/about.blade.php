<!--CONTAINER-->
<section id="o-nas" class="pt-16 pb-8 ">
    <x-container class="max-w-screen-xl  ">

        <div class="grid lg:grid-cols-2 gap-24 pt-12 lg:py-20">

            {{-- item --}}
            <div
                class="flex flex-col justify-center md:w-[75%] lg:w-full mx-auto items-center lg:items-start gap-12 order-1 lg:order-none">

                <img src="{{asset('storage/'.$home->about_images[1])}}" alt="Krupówki w Zakopanem"
                    class="aspect-[4/3]  object-cover w-full  shadow-md order-1 lg:order-none" loading="lazy" />
                <x-text class="lg:mr-20">{{$home->about_text_first}}</x-text>

            </div>


            {{-- item --}}
            <div class="flex flex-col justify-center md:w-[75%] lg:w-full mx-auto items-center lg:items-start gap-12 ">
                <div class="space-y-4">
                    <x-title>{{$home}}</x-title>

                    <x-text class="lg:mr-20">
                        {{$home->about_text_first}}
                    </x-text>

                </div>
                <img src="{{asset('storage/'.$home->about_images[0])}}" alt="stok w okolicach Zakopanego"
                    class="aspect-[4/3]  object-cover w-full shadow-md" loading="lazy" />
            </div>
        </div>
    </x-container>
</section>