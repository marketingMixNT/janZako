@props(['icon', 'text'])

<div class="flex flex-col justify-center items-center gap-4">
    <img src="{{$icon}}" alt="" class="size-24">
    <h3 class="font-medium ">{{$text}}</h3>
</div>