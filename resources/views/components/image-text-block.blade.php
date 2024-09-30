@props(['img','order'=>'','alt'=>false])

<div class="flex flex-col lg:flex-row  gap-12 max-w-screen-lg mx-auto justify-center items-center pt-12">
    <div class="lg:w-1/2 {{$order}}">

        <img src="{{$img}}" alt="{{$alt ? $alt :"wnętrze hotelu Jan w Krakowie"}}" class=" aspect-square object-cover shadow-md" loading="lazy" >
    </div>
    <div class="lg:w-1/2">
        {{$slot}}
    </div>

</div>