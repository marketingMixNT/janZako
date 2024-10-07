<section class="py-16 bg-bgSecondary">
    <x-container class="max-w-screen-xl">
        <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-16 md:w-[75%] lg:w-full mx-auto">

            <x-feature-card title="{{__('features.title-1')}}" text="{{__('features.text-1')}}">
                <x-lucide-wifi class="w-12 text-accent-400" />
            </x-feature-card>

            <x-feature-card title="{{__('features.title-2')}}" text="{{__('features.text-2')}}">
                <x-lucide-utensils class="w-12 text-accent-400" />
            </x-feature-card>

            <x-feature-card title="{{__('features.title-3')}}" text="{{__('features.text-3')}}">
                <x-lucide-map-pin class="w-12 text-accent-400" />
            </x-feature-card>

            <x-feature-card title="{{__('features.title-4')}}" text="{{__('features.text-4')}}">
                <x-lucide-parking-square class="w-12 text-accent-400" />
            </x-feature-card>

        </div>
    </x-container>
</section>