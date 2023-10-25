@php($types = collect(['neutral', 'primary', 'secondary', 'accent', 'info', 'success', 'warning', 'error']))

<h2>Basic toggles</h2>

<div class="not-prose">
    <x-toggle />
    <x-toggle x-init="$el.indeterminate = true" />
    <x-toggle checked />
</div>

<h2>Disabled state</h2>

<div class="not-prose">
    <x-toggle disabled />
    <x-toggle disabled checked />
</div>

<h2>Label + form control</h2>

<div class="not-prose max-w-sm">
    <x-form-control>
        <x-label class="cursor-pointer">
            This is a cool toggle
            <x-toggle />
        </x-label>
    </x-form-control>
</div>

<h2>Sizes</h2>

<div class="not-prose">
    <x-toggle lg />
    <x-toggle md />
    <x-toggle sm />
    <x-toggle xs />
</div>

<h2>Colours</h2>

<div class="not-prose grid max-w-max grid-flow-col grid-rows-4 gap-2 md:grid-rows-2">
    <x-toggle lg />
    <x-toggle lg checked />

    <x-toggle lg primary />
    <x-toggle lg primary checked />

    <x-toggle lg secondary />
    <x-toggle lg secondary checked />

    <x-toggle lg accent />
    <x-toggle lg accent checked />

    <x-toggle lg info />
    <x-toggle lg info checked />

    <x-toggle lg success />
    <x-toggle lg success checked />

    <x-toggle lg warning />
    <x-toggle lg warning checked />

    <x-toggle lg error />
    <x-toggle lg error checked />

    <x-toggle lg :type="$type = $types->random()" />
    <x-toggle lg :type="$type" checked />
</div>
