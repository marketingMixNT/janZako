<x-layouts.home title="{{$home->meta_title ? $home->meta_title : __('meta.home.title')}}"
    description="{{$home->meta_desc ? $home->meta_desc  : __('meta.home.desc')}}">



    <x-layouts.home-wrapper :home="$home" :apartments="$apartments">

        @include('pages.home.partials.header')




        @include('pages.home.partials.apartments')

        <x-features />

        @include('pages.home.partials.about')

        @props(['link','cta'])

        <section {{-- class="py-24 bg-cover bg-center bg-gray-500 bg-blend-multiply bg-no-repeat bg-fixed "
            style="background-image: url({{asset('assets/images/apartamenty-jan/apartamenty-jan-10.webp')}})"> --}}
            class="py-12 sm:py-24 bg-cover bg-center bg-gray-500 bg-blend-multiply bg-no-repeat bg-fixed "
            style="background-image: url({{asset('storage/'.$cta->image)}})">


            <x-container
                class="max-w-screen-xl flex flex-col justify-center items-center gap-8 text-white py-20 mx-auto text-center">


                <h2 class="text-center text-5xl 2xl:text-6xl  tracking-wider font-heading font-extralight ">
                    {{$cta->title}}
                </h2>
                <x-text>{{$cta->subtitle}}</x-text>





                <div class="booking  "></div>
            </x-container>

        </section>

        @include('pages.home.partials.testimonials')
        @include('pages.home.partials.local-attractions')





    </x-layouts.home-wrapper>
</x-layouts.home>