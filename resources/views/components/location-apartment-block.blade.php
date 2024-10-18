@props(['apartment'])

<x-image-text-block img="{{asset('storage/'.$apartment->thumbnail)}}" alt="zdjęcie przedstawiające {{$apartment->title}}">
    <div class="flex flex-col gap-12">
    <div class="space-y-2">

        <x-title>{{$apartment->title}}</x-title>
        
    </div>
        
    <div class="space-y-4">

  
    <div class="flex justify-start items-center gap-3">
        <x-lucide-map-pin class="size-6 text-accent-400" />
        <a href="{{$apartment->map_link}}" target="_blank" rel="noreferrer nofollow" class="font-light link-hover--accent">
            {{$apartment->address}}, {{$apartment->city}}
        </a>
    </div>
   
</div>
    <x-ui.link href="{{route('apartment.show',$apartment->slug)}}"  title="{{__('global.check')}}"/>
</div>
</x-image-text-block>