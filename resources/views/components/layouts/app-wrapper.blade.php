@props(['apartment'])

<x-preloader />
<x-nav.navbar-rooms :apartment="$apartment" />

{{$slot}}

{!!$apartment->map!!}

<x-footer-apartment :apartment="$apartment" />

<script src="{{$apartment->booking_script}}{{ str_replace('_', '-', app()->getLocale()) }}" async=""></script>