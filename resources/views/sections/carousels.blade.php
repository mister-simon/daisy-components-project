<h1>Carousels</h1>

<h2>Basic horizontal carousel - Snap to slide's start</h2>

<div class="not-prose">
    <x-carousel class="max-w-md">
        @for ($i = 0; $i < 5; $i++)
            <x-carousel-item>
                <img
                    src="https://placehold.co/200?text=Slide+{{ $i }}"
                    alt="Placeholder image {{ $i }}"
                    class="border border-neutral">
            </x-carousel-item>
        @endfor
    </x-carousel>
</div>

<h2>Basic horizontal carousel - Snap to slide's center</h2>

<div class="not-prose">
    <x-carousel center class="max-w-md">
        @for ($i = 0; $i < 5; $i++)
            <x-carousel-item>
                <img
                    src="https://placehold.co/200?text=Slide+{{ $i }}"
                    alt="Placeholder image {{ $i }}"
                    class="border border-neutral">
            </x-carousel-item>
        @endfor
    </x-carousel>
</div>

<h2>Basic horizontal carousel - Snap to slide's end</h2>

<div class="not-prose">
    <x-carousel end class="max-w-md">
        @for ($i = 0; $i < 5; $i++)
            <x-carousel-item>
                <img
                    src="https://placehold.co/200?text=Slide+{{ $i }}"
                    alt="Placeholder image {{ $i }}"
                    class="border border-neutral">
            </x-carousel-item>
        @endfor
    </x-carousel>
</div>

<h2>Full width slides</h2>

<div class="not-prose">
    <x-carousel end class="w-48 max-w-full">
        @for ($i = 0; $i < 5; $i++)
            <x-carousel-item class="w-full">
                <img
                    src="https://placehold.co/200?text=Slide+{{ $i }}"
                    alt="Placeholder image {{ $i }}"
                    class="w-full border border-neutral">
            </x-carousel-item>
        @endfor
    </x-carousel>
</div>

<h2>Half width slides</h2>

<div class="not-prose">
    <x-carousel end class="w-96 max-w-full">
        @for ($i = 0; $i < 5; $i++)
            <x-carousel-item class="w-1/2">
                <img
                    src="https://placehold.co/200?text=Slide+{{ $i }}"
                    alt="Placeholder image {{ $i }}"
                    class="w-full border border-neutral">
            </x-carousel-item>
        @endfor
    </x-carousel>
</div>

<h2>Full-bleed carousel</h2>

<div class="not-prose">
    <x-carousel end center class="rounded-box max-w-md space-x-4 bg-neutral p-4">
        @for ($i = 0; $i < 5; $i++)
            <x-carousel-item class="w-2/3">
                <img
                    src="https://placehold.co/200?text=Slide+{{ $i }}"
                    alt="Placeholder image {{ $i }}"
                    class="rounded-box w-full">
            </x-carousel-item>
        @endfor
    </x-carousel>
</div>

<h2>Vertical carousel</h2>

<div class="not-prose">
    <x-carousel vertical class="h-96">
        @for ($i = 0; $i < 5; $i++)
            <x-carousel-item>
                <img
                    src="https://placehold.co/200?text=Slide+{{ $i }}"
                    alt="Placeholder image {{ $i }}"
                    class="w-full border border-neutral">
            </x-carousel-item>
        @endfor
    </x-carousel>
</div>

<h2>Carousel with indicator buttons</h2>

<div class="not-prose">
    @php($items = range(1, 5))

    <div>
        <x-carousel class="max-w-md">
            @foreach ($items as $i)
                @php($itemId = "{$component->id}item{$i}")
                <x-carousel-item :id="$itemId">
                    <img
                        src="https://placehold.co/200?text=Slide+{{ $i }}"
                        alt="Placeholder image {{ $i }}"
                        class="w-full border border-neutral">
                </x-carousel-item>
            @endforeach

            <x-slot:outer-controls>
                <div class="flex max-w-md justify-center gap-2 py-2">
                    @foreach ($items as $i)
                        @php($itemId = "{$component->id}item{$i}")
                        <a href="#{{ $itemId }}" class="btn btn-xs">{{ $i }}</a>
                    @endforeach
                </div>
            </x-slot:outer-controls>
        </x-carousel>
    </div>
</div>

<h2>Carousel with next/prev buttons</h2>

<div class="not-prose">
    @php($items = range(1, 5))

    <div>
        <x-carousel class="w-full">
            @foreach ($items as $i)
                @php($itemId = "{$component->id}item{$i}")
                @php($prevItemId = $loop->first ? null : "{$component->id}item" . $i - 1)
                @php($nextItemId = $loop->last ? null : "{$component->id}item" . $i + 1)
                <x-carousel-item :id="$itemId" class="relative h-80 w-full">
                    <img
                        src="https://placehold.co/200?text=Slide+{{ $i }}"
                        alt="Placeholder image {{ $i }}"
                        class="h-full w-full border border-neutral object-cover">

                    <div class="absolute inset-0 flex items-center p-2">
                        @if ($prevItemId)
                            <x-a circle ghost sm href="#{{ $prevItemId }}" class="mr-auto">❮</x-a>
                        @endif
                        @if ($nextItemId)
                            <x-a circle ghost sm href="#{{ $nextItemId }}" class="ml-auto">❯</x-a>
                        @endif
                    </div>
                </x-carousel-item>
            @endforeach
        </x-carousel>
    </div>
</div>
