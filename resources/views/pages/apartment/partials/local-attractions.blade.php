<!--CONTAINER-->
<section class="pt-12 pb-20">
    <x-container class=" max-w-screen-2xl">

        <div class="grid lg:grid-cols-3 gap-12 lg:gap-20 2xl:gap-32 pt-12 lg:py-20 ">



            <div class="flex flex-col justify-between items-start md:w-3/4 lg:w-full  mx-auto order-1 lg:order-none">
                <div class="w-full lg:h-[60%] overflow-hidden ">
                    <div class="w-full h-full object-cover  ">
                        <img src="https://images.unsplash.com/photo-1726231160459-308206afb13c?q=80&w=4470&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                            alt="widok krakowskiej ulicy"
                            class="w-full h-full object-cover shadow-md aspect-[3/2]" loading="lazy" width="420"
                            height="480">
                    </div>
                </div>

                <div
                    class="pt-12 sm:mt-0 self-center sm:self-end flex flex-col justify-center sm:justify-end items-center sm:items-end gap-3 mb-12 sm:mb-24 lg:mb-12 ">


                    {{-- <x-ui.link href="{{route('local-attractions')}}" title="{{__('home.local-attractions.link')}}" /> --}}
                </div>
            </div>



            <div class="flex flex-col justify-between items-start gap-12 md:w-3/4 lg:w-full mx-auto ">

                <div class="flex flex-col justify-between items-center gap-12 ">
                    <x-title>
                        Odkryj piękno Zakopanego i okolic</x-title>
                    <x-text>Zakopane to prawdziwy raj dla miłośników natury i aktywnego wypoczynku. Wybierz się na piesze wędrówki po malowniczych szlakach Tatr, zwiedź urokliwe górskie stawy lub skorzystaj z licznych atrakcji, takich jak narciarstwo, snowboard czy termalne baseny. Odkryj lokalną kulturę, spróbuj tradycyjnych potraw i delektuj się niesamowitymi widokami. W Zakopanem każdy dzień przynosi nowe przygody!
                    </x-text>

          
                </div>
                <img src="https://images.unsplash.com/photo-1726231160459-308206afb13c?q=80&w=4470&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="dwidok na krakowski diabelski młyn"
                    class=" w-full object-cover shadow-md  aspect-[3/2] " loading="lazy" width="430" height="320">
            </div>
            <div class="flex flex-col justify-start md:w-3/4 lg:w-full mx-auto ">
                <div class="lg:h-[80%] w-full overflow-hidden lg:mt-6 shadow-md">
                    <div class="h-full w-full object-cover ">
                        <img src="https://images.unsplash.com/photo-1726231160459-308206afb13c?q=80&w=4470&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                            alt="Kosciół Mariacki w Krakowie"
                            class="w-full object-cover shadow-md  aspect-[3/2] lg:aspect-auto" loading="lazy">
                    </div>
                </div>
            </div>


        </div>
    </x-container>
</section>