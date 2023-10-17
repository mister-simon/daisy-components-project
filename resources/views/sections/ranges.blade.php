<h1>Ranges</h1>

<h2>Basic range</h2>

<div class="not-prose">
    <x-range />
</div>

<h2>Stepped range with measure</h2>

<div class="not-prose space-y-8" x-data="{ range: 50 }">
    <div>
        <x-range
            max="100"
            measure
            x-model="range" />
    </div>
    <div>
        <x-range
            max="100"
            step="25"
            measure
            x-model="range" />
    </div>
    <div>
        <x-range
            min="50"
            max="100"
            step="10"
            measure
            x-model="range" />
    </div>
    <div>
        <x-range x-model="range" />
        <x-range-measure steps="10" class="px-3" />
    </div>
    <div class="text-center text-xl">
        <span x-text="`${range}%`"></span>
    </div>
</div>

<h2>Label + form control</h2>

<div class="not-prose max-w-sm">
    <x-form-control>
        <x-label class="cursor-pointer" for="niceRange">
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
    <x-range lg />
    <x-range lg primary />
    <x-range lg secondary />
    <x-range lg accent />
    <x-range lg info />
    <x-range lg success />
    <x-range lg warning />
    <x-range lg error />
</div>

<h2>Colours + extra custom measure styling</h2>

<div class="not-prose relative my-10 flex items-center">
    <x-range value="40" step="20" primary class="relative z-10" />
    <x-range-measure steps="5" class="absolute inset-0 px-3 text-primary">
        <x-app.icon-heart class="h-24 w-24 overflow-visible fill-primary stroke-primary" />
    </x-range-measure>
</div>
