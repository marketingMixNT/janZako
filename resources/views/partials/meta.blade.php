{{-- <script async src="https://app.cookieasy.pl/plugin/gtumi243j6qrr0j.js"></script> --}}

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>{{ $title }}</title>
<meta name="description" content="{{ $description }}">

<meta name="author" content="Hotel Jan">

@if ($noFollow)
<meta name="robots" content="noindex, nofollow">
@else
<meta name="robots" content="index, follow">
@endif

<link rel="canonical" href="{{ url()->current() }}" />

<meta property="og:title" content="{{ $title }}">
<meta property="og:description" content="{{ $description }}">
<meta property="og:url" content="https://www.jan-krakow.pl">
<meta property="og:type" content="website">
<meta property="og:image" content="{{asset('assets/images/superior/superior-6.webp')}}">