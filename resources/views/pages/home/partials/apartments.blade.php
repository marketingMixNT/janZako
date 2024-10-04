<section class="pt-16 pb-24">
    <x-container class="max-w-screen-2xl 2xl:px-12">

        <x-heading-horizontal title="{{$home->rooms_heading}}">

            <x-text>{{$home->rooms_text}}</x-text>

        </x-heading-horizontal>


        <div class="flex flex-col pt-12 ">

            @foreach ($apartments as $apartment)

            <x-apartment-card-horizontal :apartment="$apartment" />

            @endforeach

        </div>

    </x-container>
</section>