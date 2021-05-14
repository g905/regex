<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Regex test app') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="">
            <div class="grid lg:mx-5">
                @foreach($images as $img)
                <div class="grid-item mb-4">
                    <img src="{{ url('images/thumbnails/' . $img->thumb) }}" alt="" class="mb-2">
                    <div class="title font-bold mb-2">
                        {{ $img->title }}
                    </div>
                    <div class="description mb-2">
                        {{ $img->description }}
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>

</x-app-layout>
