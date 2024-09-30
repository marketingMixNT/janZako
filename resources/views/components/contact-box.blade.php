@props(['title' => ''])


<div class=" py-8 md:py-12 xs:px-4 text-left">
    <h3 class="mb-4 md:mb-10 uppercase font-medium text-accent-400">{{$title}}</h3>
 {{$slot}}
</div>