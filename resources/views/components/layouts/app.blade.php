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



    {{--
    <x-mobile-buttons /> --}}






</body>

</html>