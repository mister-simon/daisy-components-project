<h2>Indicators with badge</h2>

<div class="not-prose flex gap-4">
    {{-- Note the use of "block". Without block layout the badge position may be wrong. --}}
    <x-indicator>
        <x-slot:indicator>
            <x-badge class="block" secondary />
        </x-slot:indicator>
        <div class="grid h-32 w-32 place-items-center bg-base-300 text-center">Badge within indicator slot.</div>
    </x-indicator>

    <x-indicator>
        <x-slot:indicator class="badge badge-secondary"></x-slot:indicator>
        <div class="grid h-32 w-32 place-items-center bg-base-300 text-center">Badge applied to indicator slot.</div>
    </x-indicator>
</div>

<h2>Indicator positions</h2>

<div class="mr-auto grid w-max grid-cols-3 grid-rows-3 gap-4">
    <x-indicator top start>
        <x-slot:indicator class="badge badge-secondary"></x-slot:indicator>
        <div class="grid h-10 w-10 place-items-center bg-base-300 text-center"></div>
    </x-indicator>
    <x-indicator top center>
        <x-slot:indicator class="badge badge-secondary"></x-slot:indicator>
        <div class="grid h-10 w-10 place-items-center bg-base-300 text-center"></div>
    </x-indicator>
    <x-indicator top end>
        <x-slot:indicator class="badge badge-secondary"></x-slot:indicator>
        <div class="grid h-10 w-10 place-items-center bg-base-300 text-center"></div>
    </x-indicator>
    <x-indicator middle start>
        <x-slot:indicator class="badge badge-secondary"></x-slot:indicator>
        <div class="grid h-10 w-10 place-items-center bg-base-300 text-center"></div>
    </x-indicator>
    <x-indicator middle center>
        <x-slot:indicator class="badge badge-secondary"></x-slot:indicator>
        <div class="grid h-10 w-10 place-items-center bg-base-300 text-center"></div>
    </x-indicator>
    <x-indicator middle end>
        <x-slot:indicator class="badge badge-secondary"></x-slot:indicator>
        <div class="grid h-10 w-10 place-items-center bg-base-300 text-center"></div>
    </x-indicator>
    <x-indicator bottom start>
        <x-slot:indicator class="badge badge-secondary"></x-slot:indicator>
        <div class="grid h-10 w-10 place-items-center bg-base-300 text-center"></div>
    </x-indicator>
    <x-indicator bottom center>
        <x-slot:indicator class="badge badge-secondary"></x-slot:indicator>
        <div class="grid h-10 w-10 place-items-center bg-base-300 text-center"></div>
    </x-indicator>
    <x-indicator bottom end>
        <x-slot:indicator class="badge badge-secondary"></x-slot:indicator>
        <div class="grid h-10 w-10 place-items-center bg-base-300 text-center"></div>
    </x-indicator>
</div>

<h2>Button as indicator</h2>

<div>
    <x-indicator bottom>
        <div class="rounded-box flex aspect-video flex-col justify-center border bg-secondary p-4 text-center text-secondary-content">
            <h3 class="mt-0">Example</h3>
            <p class="mb-0">Click the button if you like cake.</p>
        </div>

        <x-slot:indicator>
            <x-button primary class="shadow">I like cake</x-button>
        </x-slot:indicator>
    </x-indicator>
</div>

<h2>Multiple indicators</h2>

<p>Refer to the <a href="https://daisyui.com/components/indicator/" target="_blank" rel="noopener noreferrer">DaisyUI docs to place multiple indicator items in one indicator container</a>.</p>
