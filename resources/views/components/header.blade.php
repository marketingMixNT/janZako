@props(['title'=>"",'bgi'=>""])

<header
    class="relative flex flex-col justify-center items-center h-[calc(80vh-84px)]  lg:h-[calc(90vh-84px)] 2xl:h-[calc(80vh-84px)]  sm:mt-0 w-full bg-cover bg-center bg-fixed bg-gray-500 bg-blend-multiply text-fontLight text-white ] {{$bgi}}" 

    {{-- style="background-image: url({{$bgi}})" --}}
    >
    <!--HEADING-->
    <span class="mb-4 text-sm 2xl:text-base font tracking-widest uppercase ">Apartamenty Jan</span>
    <h1
        class="text-center text-4xl sm:text-5xl md:text-7xl  tracking-wider uppercase font-heading ">
        {{$title}}
    </h1>
   

    <x-booking-bar/>

</header>