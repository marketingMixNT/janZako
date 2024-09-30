@props([

'href' => '',
'class' => '',
'attributes' => '',
])



<a href="{{ $href }}" class="border   px-8 py-2.5 uppercase text-xs duration-300   bg-primary-400  close text-fontBlack
{{ $class }}" {{ $attributes }}>
    {{ $slot }}
</a>