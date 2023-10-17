<h1>Ranges</h1>

<h2>Basic range</h2>

<div class="not-prose">
    <x-range />
</div>

<h2>Stepped range with measure</h2>

<div class="not-prose space-y-4 text-center text-xl" x-data="{ range: 50 }">
    <div>
        <x-range max="100" measure x-model="range" />
    </div>
    <div>
        <x-range max="100" step="25" measure x-model="range" />
    </div>
    <div>
        <x-range min="50" max="100" step="10" measure x-model="range" />
    </div>
    <div>
        <x-range x-model="range" />
        <x-range-measure steps="10" />
    </div>
    <span x-text="`${range}%`"></span>
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
    <x-range lg />
    <x-range md />
    <x-range sm />
    <x-range xs />
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
