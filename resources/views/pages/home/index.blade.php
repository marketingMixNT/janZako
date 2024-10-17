<x-layouts.home title="{{$home->meta_title ? $home->meta_title : __('meta.home.title')}}"
    description="{{$home->meta_desc ? $home->meta_desc  : __('meta.home.desc')}}">



    <x-layouts.home-wrapper :home="$home" :apartments="$apartments">

        @include('pages.home.partials.header')
        @include('pages.home.partials.about')

        <x-features />

        @include('pages.home.partials.apartments')

        <x-cta :link="$home->booking_link" :cta="$cta" />

        @include('pages.home.partials.testimonials')
        @include('pages.home.partials.local-attractions')


      
        

    </x-layouts.home-wrapper>
</x-layouts.home>