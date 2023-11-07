@php($types = collect(['neutral', 'primary', 'secondary', 'accent', 'info', 'success', 'warning', 'error']))

<h2>Basic range</h2>

<div class="not-prose">
    <x-range />
</div>

<h2>Stepped range with measure</h2>

<div class="not-prose space-y-8" x-data="{ range: 50 }">
    {{-- Ranges default to max=100 and step=1 --}}
    <div>
        <x-range
            measure
            x-model="range" />
    </div>

    {{-- When using measure, it will snap to the step amount --}}
    <div>
        <x-range
            step="25"
            measure
            x-model="range" />
    </div>

    {{-- You may use the min/max attributes. The measure will take these into account. --}}
    <div>
        <x-range
            min="50"
            max="100"
            step="10"
            measure
            x-model="range" />
    </div>

    {{-- You may use the measure component directly to decouple it from the related range --}}
    {{-- Here we have a measure with 10 steps against a range with 100 steps. --}}
    {{-- Note, 10 steps = 11 lines marked, with the first mark at 0. --}}
    {{-- Also note, padding is different for ranges of differing sizes. It should be applied as 1/2 the range's height. --}}
    <div>
        <x-range x-model="range" />
        <x-range-measure steps="10" class="px-3" />
    </div>

    {{-- Of course, everything can be hooked into with alpine, as you would with any other input type. --}}
    <div class="text-center text-xl">
        <span x-text="`${range}%`"></span>
    </div>
</div>

<h2>Label + form control</h2>

<div class="not-prose max-w-sm">
    <x-form-control>
        <x-label
            class="cursor-pointer"
            for="niceRange">
            Nice Range Bro
        </x-label>
        <x-range id="niceRange" />
    </x-form-control>
</div>

<h2>Sizes</h2>

<div class="not-prose">
    <x-range lg measure value="100" step="10" />
    <x-range md measure value="100" step="10" />
    <x-range sm measure value="100" step="10" />
    <x-range xs measure value="100" step="10" />
</div>

<h2>Colours</h2>

<div class="not-prose grid grid-flow-col grid-rows-2 gap-2">
    <x-range />
    <x-range primary />
    <x-range secondary />
    <x-range accent />
    <x-range info />
    <x-range success />
    <x-range warning />
    <x-range error />
</div>

<h2>Set colour via :color attribute</h2>
<x-range :color="$types->random()" />

<h2>Colours + extra custom measure styling</h2>

{{-- The range measure slot can be used to customise the marker for each position. --}}
<div class="not-prose relative my-10 flex items-center">
    <x-range value="40" step="20" primary class="relative z-10" />
    <x-range-measure step="20" max="100" class="absolute inset-0 px-3 text-4xl text-secondary" />
</div>

<div class="not-prose relative my-10 flex items-center">
    <x-range value="40" step="20" primary class="relative z-10" />
    <x-range-measure step="20" max="100" class="absolute inset-0 px-3 text-primary">
        <x-app.icon-heart class="scale-[300%] overflow-visible fill-primary stroke-primary" />
    </x-range-measure>
</div>
