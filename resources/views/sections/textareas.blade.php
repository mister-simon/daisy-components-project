@php($types = collect(['neutral', 'primary', 'secondary', 'accent', 'info', 'success', 'warning', 'error']))

<h2>Basic textarea</h2>

<div class="not-prose rounded-box flex flex-col items-start gap-4 bg-base-200/50 p-4">
    <x-textarea placeholder="I am default" />
    <x-textarea placeholder="I have a border" bordered />
    <x-textarea placeholder="I have no background" ghost />
    <x-textarea placeholder="This textarea is disabled" bordered disabled />
</div>

<h2>Label + form control</h2>

<div class="not-prose rounded-box bg-base-200/50 p-4">
    <x-form-control>
        <x-label
            text="This is the label for the textarea"
            text-alt="And maybe this is helper text?"
            for="e1" />
        <x-textarea
            bordered
            id="e1"
            value="Don't forget to link up your labels. Otherwise, what's the point." />
    </x-form-control>
</div>

<h2>Restyled label</h2>

<div class="not-prose rounded-box bg-base-200/50 p-4">
    <x-form-control>
        <x-label for="e2">
            <x-slot:text class="badge badge-info badge-lg">You can restyle label text</x-slot:text>
            <x-slot:textAlt class="badge badge-success badge-lg">What a surprise</x-slot:textAlt>
        </x-label>
        <x-textarea
            bordered
            id="e2"
            value="You might prefer to keep things consistent though."
            sm />
    </x-form-control>
</div>

<h2>Sizes</h2>

<div class="not-prose rounded-box flex flex-col items-start gap-4 bg-base-200/50 p-4">
    <x-textarea lg value="Large" />
    <x-textarea md value="Medium / Default" />
    <x-textarea sm value="Small" />
    <x-textarea xs value="Extra-Small" />
</div>

<h2>Colours</h2>

<div class="not-prose rounded-box flex flex-wrap gap-4 bg-base-200/50 p-4">
    <x-textarea value="default" />
    <x-textarea primary value="primary" />
    <x-textarea secondary value="secondary" />
    <x-textarea accent value="accent" />
    <x-textarea info value="info" />
    <x-textarea success value="success" />
    <x-textarea warning value="warning" />
    <x-textarea error value="error" />
    <x-textarea :color="$types->random()" value="Set via :color" />
</div>
