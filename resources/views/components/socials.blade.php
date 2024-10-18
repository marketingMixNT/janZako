@props(['social','dark'=>false])


@if ($social->name == 'facebook')
<a href="{{ $social->link }}" target="_blank" class="group">
    <x-iconpark-facebook-o class="group-hover:scale-105 duration-300 w-6 {{$dark ? 'text-black' : 'text-white'}}"    />
</a>
@endif

@if ($social->name == 'instagram')
<a href="{{ $social->link }}" target="_blank" class="group">
    <x-iconpark-instagram-o class="group-hover:scale-105 duration-300 w-6 {{$dark ? 'text-black' : 'text-white'}}"   />
</a>
@endif

@if ($social->name == 'twitter')
<a href="{{ $social->link }}" target="_blank" class="group">
    <x-iconpark-twitter-o class="group-hover:scale-105 duration-300 w-6 {{$dark ? 'text-black' : 'text-white'}}"    />
</a>
@endif

@if ($social->name == 'tiktok')
<a href="{{ $social->link }}" target="_blank" class="group">
    <x-iconpark-tiktok-o class="group-hover:scale-105 duration-300 w-6 {{$dark ? 'text-black' : 'text-white'}}"    />
</a>
@endif

@if ($social->name == 'youtube')
<a href="{{ $social->link }}" target="_blank" class="group">
    <x-iconpark-youtube-o class="group-hover:scale-105 duration-300 w-6 {{$dark ? 'text-black' : 'text-white'}}"  />
</a>
@endif

@if ($social->name == 'tripadvisor')
<a href="{{ $social->link }}" target="_blank" class="group">
    <x-lineawesome-tripadvisor class="group-hover:scale-105 duration-300 w-6 {{$dark ? 'text-black' : 'text-white'}}" />
</a>
@endif

@if ($social->name == 'linkedin')
<a href="{{ $social->link }}" target="_blank" class="group">
    <x-iconpark-instagramone-o  class="group-hover:scale-105 duration-300 w-6 {{$dark ? 'text-black' : 'text-white'}}" />
</a>
@endif