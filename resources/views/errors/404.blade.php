<x-layouts.app title="{{__('errors.meta_title')}}"
    description="{{__('errors.meta_desc')}}"
    noFollow>





    <div class="h-screen sm:h-[60vh] lg:h-[80vh]  flex flex-col justify-center items-center bg-cover bg-top bg-fixed bg-gray-500 bg-blend-multiply"
        style="background-image: url({{ asset('assets/images/pokoje/pokoje-11.webp') }})">
        {{-- SLIDES --}}


        <h2 class="text-center text-8xl   tracking-wider font-heading font-extralight text-fontWhite">
            {{__('errors.404.title')}}</h2>
            <p class="text-xl text-fontWhite pt-4">{{__('errors.404.text')}}</p>
      

        <x-ui.link-button href="{{ url()->previous() }}" class="mt-6 2xl:mt-12">{{__('errors.back')}}</x-ui.link-button>

    </div>



</x-layouts.app>