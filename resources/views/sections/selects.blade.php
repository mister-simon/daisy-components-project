@php($types = collect(['neutral', 'primary', 'secondary', 'accent', 'info', 'success', 'warning', 'error']))
@php($sizes = collect(['lg' => 'Large', 'md' => 'Medium / Default', 'sm' => 'Small', 'xs' => 'Extra-small']))
@php($options = ['hi', 'yo', 'hello', 'whats up'])

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
        <x-select
            :options="$options"
            bordered
            id="e2"
            sm />
    </x-form-control>
</div>

<h2>Sizes</h2>

<div class="not-prose rounded-box flex flex-col items-start gap-4 bg-base-200/50 p-4">
    <x-select :options="$sizes" lg value="lg" />
    <x-select :options="$sizes" md value="md" />
    <x-select :options="$sizes" sm value="sm" />
    <x-select :options="$sizes" xs value="xs" />
</div>

<h2>Colours</h2>

<div class="not-prose rounded-box flex flex-wrap gap-4 bg-base-200/50 p-4">
    <x-select :options="$types" lg :value="$types->search('default')" />
    <x-select :options="$types" lg primary :value="$types->search('primary')" />
    <x-select :options="$types" lg secondary :value="$types->search('secondary')" />
    <x-select :options="$types" lg accent :value="$types->search('accent')" />
    <x-select :options="$types" lg info :value="$types->search('info')" />
    <x-select :options="$types" lg success :value="$types->search('success')" />
    <x-select :options="$types" lg warning :value="$types->search('warning')" />
    <x-select :options="$types" lg error :value="$types->search('error')" />
    <x-select :options="$types" lg :color="$type = $types->random()" :value="$types->search($type)" />
</div>

<h2>Select with slot</h2>

{{-- If you want more control over your options you may use the default slot --}}
{{-- However, you will need to provide your own selected option logic. --}}
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

<h2>Select with alpine</h2>

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
        get value() { return $store.options[this.selected]; }
    }">
    <x-select
        :options="$options"
        x-model="selected" />
    <span x-text="`${selected} => ${value}`" class="text-xl"></span>
</div>
