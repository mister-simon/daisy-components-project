<p>
    <strong>Note:</strong> I'm not sure how much value this component adds, but it's here for completeness...<br>
    It might make more sense for your use-case to just use the mask classes directly.<br>
    See <a href="https://daisyui.com/components/mask/" target="_blank" rel="noopener noreferrer"> DaisyUI Mask documentation</a>.
</p>

<h2>Masks</h2>

<div class="grid max-w-full grid-cols-[repeat(auto-fit,minmax(8rem,1fr))] gap-4">
    @foreach (['squircle', 'heart', 'hexagon', 'hexagon-2', 'decagon', 'pentagon', 'diamond', 'square', 'circle', 'parallelogram', 'parallelogram-2', 'parallelogram-3', 'parallelogram-4', 'star', 'star-2', 'triangle', 'triangle-2', 'triangle-3', 'triangle-4', 'half-1', 'half-2'] as $type)
        <x-mask
            :type="$type"
            @class([
                'grid aspect-square p-4 place-content-center text-center text-xs',
                'bg-primary text-primary-content' => $loop->odd,
                'bg-secondary text-secondary-content' => $loop->even,
            ])>
            {{ $type }}
        </x-mask>
    @endforeach
</div>

<h2>Mask element tag</h2>

<p>In most cases you should probably just use the given mask classes directly. Compare the following examples:</p>

<div class="flex flex-row gap-4">
    <x-mask
        tag="img"
        src="https://placehold.co/100?text=Bestagon"
        type="hexagon"
        alt="Bestagon" />

    <img
        src="https://placehold.co/100?text=Bestagon"
        alt="Bestagon"
        class="mask mask-hexagon">
</div>
