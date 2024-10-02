@props(['social'])


@if ($social->name == 'facebook')
    <a href="{{ $social->link }}" target="_blank">
        <x-iconpark-facebook-o style="width:20px;color:white" />
    </a>
@endif

@if ($social->name == 'instagram')
    <a href="{{ $social->link }}" target="_blank">
        <x-iconpark-instagram-o style="width:20px;color:white" />
    </a>
@endif

@if ($social->name == 'twitter')
    <a href="{{ $social->link }}" target="_blank">
        <x-iconpark-twitter-o style="width:20px;color:white" />
    </a>
@endif

@if ($social->name == 'tiktok')
    <a href="{{ $social->link }}" target="_blank">
        <x-iconpark-tiktok-o style="width:20px;color:white" />
    </a>
@endif

@if ($social->name == 'youtube')
    <a href="{{ $social->link }}" target="_blank">
        <x-iconpark-youtube-o style="width:20px;color:white" />
    </a>
@endif

@if ($social->name == 'tripadvisor')
    <a href="{{ $social->link }}" target="_blank">
        <x-lineawesome-tripadvisor style="width:20px;color:white" />
    </a>
@endif

@if ($social->name == 'linkedin')
    <a href="{{ $social->link }}" target="_blank">
        <x-iconpark-instagramone-o style="width:20px;color:white" />
    </a>
@endif

