@props(['apartment'])

<x-image-text-block img="{{asset('storage/'.$apartment->thumbnail)}}" alt="zdjęcie przedstawiające {{$apartment->title}}">
    <div class="flex flex-col gap-12">
    <div class="space-y-2">

        <x-title>{{$apartment->title}}</x-title>
        <x-text>{!!$apartment->short_desc!!}</x-text>
    </div>
        
    <div class="space-y-4">

  
    <div class="flex justify-start items-center gap-3">
        <x-lucide-map-pin class="size-6 text-accent-400" />
        <a href="{{$apartment->map_link}}" target="_blank" rel="noreferrer nofollow" class="font-light link-hover--accent">
            {{$apartment->address}}
        </a>
    </div>
    <div class="flex justify-start items-center gap-3">
        <x-lucide-mail class="size-6 text-accent-400" />
        <a href="mailto:{{$apartment->mail}}" class="font-light link-hover--dark">
           {{$apartment->mail}}
        </a>
    </div>
    <div class="flex justify-start items-center gap-3">
        <x-lucide-phone class="size-6 text-accent-400" />
        <a href="tel:+48{{$apartment->phone}}" class="font-light link-hover--dark">
            {{$apartment->phone}}
        </a>
    </div>
</div>
    <x-ui.link href="{{route('apartment.show',$apartment->slug)}}"  title="zobacz"/>
</div>
</x-image-text-block>