@props(['home'])

<x-preloader :logo="$home->logo" />
<x-nav.navbar-home :home="$home" />

{{$slot}}

{!!$home->map!!}

<x-footer-home :home="$home" />


<script src="{{$home->booking_script}}{{ str_replace('_', '-', app()->getLocale()) }}" async=""></script>