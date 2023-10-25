@php($types = collect(['neutral', 'primary', 'secondary', 'accent', 'info', 'success', 'warning', 'error']))

<h2>Basic input</h2>

<div class="not-prose rounded-box flex flex-col items-start gap-4 bg-base-200/50 p-4">
    <x-file-input placeholder="I am default" />
    <x-file-input placeholder="I have a border" bordered />
    <x-file-input placeholder="I have no background" ghost />
    <x-file-input placeholder="This input is disabled" bordered disabled />
</div>

<h2>Label + form control</h2>

<div class="not-prose rounded-box bg-base-200/50 p-4">
    <x-form-control>
        <x-label
            text="This is the label for the input"
            text-alt="And maybe this is helper text?"
            for="e1" />
        <x-file-input
            bordered
            id="e1" />
    </x-form-control>
</div>

<h2>Restyled label</h2>

<div class="not-prose rounded-box bg-base-200/50 p-4">
    <x-form-control>
        <x-label for="e2">
            <x-slot:text class="badge badge-info badge-lg">You can restyle label text</x-slot:text>
            <x-slot:textAlt class="badge badge-success badge-lg">What a surprise</x-slot:textAlt>
        </x-label>
        <x-file-input
            bordered
            id="e2"

            sm />
    </x-form-control>
</div>

<h2>Sizes</h2>

<div class="not-prose rounded-box flex flex-col items-start gap-4 bg-base-200/50 p-4">
    <x-file-input lg />
    <x-file-input md />
    <x-file-input sm />
    <x-file-input xs />
</div>

<h2>Colours</h2>

<div class="not-prose rounded-box flex flex-wrap gap-4 bg-base-200/50 p-4">
    <x-file-input />
    <x-file-input primary />
    <x-file-input secondary />
    <x-file-input accent />
    <x-file-input info />
    <x-file-input success />
    <x-file-input warning />
    <x-file-input error />
</div>

<h2>Set colour via :type attribute</h2>
<x-file-input :type="$types->random()" />
