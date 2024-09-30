<div class="flex flex-col justify-start items-center gap-4 text-center">
    <div class="flex flex-col justify-center items-center gap-4">
    {{$slot}}
        <h2 class="text-lg ">{{$title}}</h2>
    </div>
    <x-text>{{$text}}</x-text>
</div>