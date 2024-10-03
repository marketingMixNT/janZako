@props(['title', 'description', 'noFollow' => false])

<!DOCTYPE html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth ">

<head>
    @include('partials.meta')
    @include('partials.fonts')
    @include('partials.favicon')

    @vite(['resources/scss/app.scss', 'resources/js/app.js'])


</head>



<body class="overflow-x-hidden font-text bg-bgPrimary  ">
    @include('partials.gtm')

   



    {{ $slot }}

 





   

</body>

{{-- <body class="overflow-x-hidden font-text bg-bgPrimary  ">
    @include('partials.gtm')

    <x-preloader />
    <x-nav.navbar-home />



    {{ $slot }}

    {{-- <x-map /> --}}
    {{-- <x-footer-home />





    <script src="https://wis.upperbooking.com/willajan/be-panel?locale={{ str_replace('_', '-', app()->getLocale()) }}"
        async=""></script>

</body>  --}}

</html>