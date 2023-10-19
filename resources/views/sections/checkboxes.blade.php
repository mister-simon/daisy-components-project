<h1>Checkboxes</h1>

<h2>Basic checkboxes</h2>

{{-- Indeterminate state is only accessed via JS --}}
<div class="not-prose">
    <x-checkbox />
    <x-checkbox x-init="$el.indeterminate = true" />
    <x-checkbox checked />
</div>

<h2>Disabled state</h2>

<div class="not-prose">
    <x-checkbox disabled />
    <x-checkbox disabled checked />
</div>

<h2>Label + form control</h2>

{{-- See inputs examples for full demo of form control / label --}}
<div class="not-prose max-w-sm">
    <x-form-control>
        <x-label class="cursor-pointer">
            This is a cool checkbox
            <x-checkbox />
        </x-label>
    </x-form-control>
</div>

<h2>Sizes</h2>

<div class="not-prose">
    <x-checkbox lg />
    <x-checkbox md />
    <x-checkbox sm />
    <x-checkbox xs />
</div>

<h2>Colours</h2>

<div class="not-prose grid max-w-max grid-flow-col grid-rows-2 gap-2">
    <x-checkbox lg />
    <x-checkbox lg checked />

    <x-checkbox lg primary />
    <x-checkbox lg primary checked />

    <x-checkbox lg secondary />
    <x-checkbox lg secondary checked />

    <x-checkbox lg accent />
    <x-checkbox lg accent checked />

    <x-checkbox lg info />
    <x-checkbox lg info checked />

    <x-checkbox lg success />
    <x-checkbox lg success checked />

    <x-checkbox lg warning />
    <x-checkbox lg warning checked />

    <x-checkbox lg error />
    <x-checkbox lg error checked />
</div>
