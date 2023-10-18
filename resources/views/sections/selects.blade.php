@php($options = ['hi', 'yo', 'hello', 'whats up'])

<h1>Select Inputs</h1>

<h2>Basic selects</h2>

<div class="not-prose rounded-box flex flex-col items-start gap-4 bg-base-200/50 p-4">
    <x-select :options="$options" placeholder="I am default" />
    <x-select :options="$options" placeholder="I have a border" bordered />
    <x-select :options="$options" placeholder="I have no background" ghost />
    <x-select :options="$options" placeholder="This input is disabled" bordered disabled />
</div>

<h2>Label + form control</h2>

<div class="not-prose rounded-box bg-base-200/50 p-4">
    <x-form-control>
        <x-label
            text="This is the label for the input"
            text-alt="And maybe this is helper text?"
            for="e1" />
        <x-select :options="$options"
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
        <x-select :options="$options"
            bordered
            id="e2"
            value="You might prefer to keep things consistent though."
            sm />
    </x-form-control>
</div>

<h2>Sizes</h2>

<div class="not-prose rounded-box flex flex-col items-start gap-4 bg-base-200/50 p-4">
    <x-select :options="$options" lg value="Large" />
    <x-select :options="$options" md value="Medium / Default" />
    <x-select :options="$options" sm value="Small" />
    <x-select :options="$options" xs value="Extra-Small" />
</div>

<h2>Colours</h2>

<div class="not-prose rounded-box flex flex-wrap gap-4 bg-base-200/50 p-4">
    <x-select :options="$options" lg value="default" />
    <x-select :options="$options" lg primary value="primary" />
    <x-select :options="$options" lg secondary value="secondary" />
    <x-select :options="$options" lg accent value="accent" />
    <x-select :options="$options" lg info value="info" />
    <x-select :options="$options" lg success value="success" />
    <x-select :options="$options" lg warning value="warning" />
    <x-select :options="$options" lg error value="error" />
</div>

<h2>Select with Slot</h2>

<div class="not-prose rounded-box flex flex-col items-start gap-4 bg-base-200/50 p-4">
    <x-select placeholder="You may use the default slot instead.">
        <optgroup label="You'll have to do your own 'selected' logic though">
            <option>But that's fine.</option>
        </optgroup>
        <optgroup label="This approach may be useful to use <select> features like optgroup">
            <option>Makes sense.</option>
        </optgroup>
    </x-select>
</div>

<h2>Select with Alpine</h2>

<script>
    document.addEventListener(
        'alpine:init',
        () => Alpine.store('options', @json($options))
    )
</script>

<div
    class="not-prose rounded-box flex flex-row items-center gap-4 bg-base-200/50 p-4"
    x-data="{
        selected: '0',
        options: $store.options,
        get value() { return this.options[this.selected]; }
    }">
    <x-select
        :options="$options"
        x-model="selected" />
    <span x-text="`${selected} => ${value}`" class="text-xl"></span>
</div>
