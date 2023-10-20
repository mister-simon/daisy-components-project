<h1>File Inputs</h1>

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
        <x-file-input
            bordered
            id="e2"
            value="You might prefer to keep things consistent though."
            sm />
    </x-form-control>
</div>

<h2>Sizes</h2>

<div class="not-prose rounded-box flex flex-col items-start gap-4 bg-base-200/50 p-4">
    <x-file-input lg value="Large" />
    <x-file-input md value="Medium / Default" />
    <x-file-input sm value="Small" />
    <x-file-input xs value="Extra-Small" />
</div>

<h2>Colours</h2>

<div class="not-prose rounded-box flex flex-wrap gap-4 bg-base-200/50 p-4">
    <x-file-input value="default" />
    <x-file-input primary value="primary" />
    <x-file-input secondary value="secondary" />
    <x-file-input accent value="accent" />
    <x-file-input info value="info" />
    <x-file-input success value="success" />
    <x-file-input warning value="warning" />
    <x-file-input error value="error" />
</div>
