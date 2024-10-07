<x-layouts.home title="{{__('meta.home.title')}}" description="{{__('meta.home.desc')}}" noFollow>






    <div class="h-screen   flex flex-col justify-center items-center bg-cover bg-top bg-fixed bg-gray-500 bg-blend-multiply"
    style="background-image: url({{ asset('assets/images/apartamenty-jan/apartamenty-jan-10.webp') }})">
        {{-- SLIDES --}}


        <h2 class="text-center text-8xl   tracking-wider font-heading font-extralight text-fontWhite">
            {{__('global.errors.403.title')}}</h2>
        <p class="text-xl text-fontWhite pt-4"> {{__('global.errors.403.text')}}</p>


        <x-ui.link-button href="{{ route('home.index') }}" class="mt-6 2xl:mt-12"> {{__('global.errors.back')}}
        </x-ui.link-button>

    </div>



</x-layouts.app>