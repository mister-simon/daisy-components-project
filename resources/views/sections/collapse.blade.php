<h2>Basic collapse</h2>

<x-collapse
    class="border border-neutral bg-base-200">
    <x-slot:title>Click me to open up</x-slot:title>
    This is my collapse contents.
</x-collapse>

<h2>Collapse (plus)</h2>

{{-- Plus attribute adds the "+" and "-" signs --}}
{{-- Note the name is unique for this accordion group --}}
<x-collapse
    class="border border-neutral bg-base-200"
    plus>
    <x-slot:title>Click me to open up</x-slot:title>
    This is my collapse contents.
</x-collapse>

<h2>Collapse (arrow)</h2>

{{-- Arrow attribute adds up and down arrow signs --}}
<x-collapse
    class="border border-neutral bg-base-200"
    arrow>
    <x-slot:title>Click me to open up</x-slot:title>
    This is my collapse contents.
</x-collapse>

<h2>Joined collapse</h2>

{{-- Add a join styled wrapper element --}}
<div class="join join-vertical w-full">
    @for ($i = 0; $i < 3; $i++)
        <x-collapse
            class="join-item border border-neutral bg-base-200"
            arrow>
            <x-slot:title>Click me to open up</x-slot:title>
            This is my collapse contents.
        </x-collapse>
    @endfor
</div>

<h2>Styled collapse</h2>

{{-- You may use scoped slot attributes to add styles --}}
{{-- You may use tailwind "peer" pseudo-selectors to style based on open state --}}
<x-collapse
    class="join-item border border-neutral bg-base-200"
    arrow>
    <x-slot:title class="bg-neutral text-neutral-content peer-checked:bg-info peer-checked:text-info-content">Apply styles when selected.</x-slot:title>
    <x-slot:content class="bg-neutral text-neutral-content peer-checked:bg-info peer-checked:text-info-content">This is done using the <code>peer-checked:</code> selector, passing classes to title / content slots.</x-slot:content>
</x-collapse>

<h2>Collapse with alpine</h2>

{{-- You may also use the "checkbox" slot to add alpine attributes to the hidden checkbox button --}}
<div class="space-y-2">
    @for ($i = 0; $i < 3; $i++)
        <x-collapse
            x-data="{ open: {{ (int) ($i === 0) }} }"
            class="border border-neutral bg-base-200"
            :open="$i === 0">
            <x-slot:checkbox x-model="open"></x-slot:checkbox>

            <x-slot:title>
                This is <span x-text="open ? 'open' : 'closed'"></span>
            </x-slot:title>

            <div class="prose-sm">
                <p>How you implement this is really up to you... But for this example:</p>
                <ul>
                    <li>Collapse tracks it's own open state.</li>
                    <li>Note, to ensure the open state matches that of the <code>:open</code> attribute, that is set separately in the initial <code>x-data</code>.</li>
                    <li>Next, the <code>&lt;x-slot:checkbox&gt;</code> slot is used to connect the checkbox to the alpine <code>open</code> state.</li>
                    <li>We can then freely use the <code>open</code> state within our collapse component.</li>
                </ul>
                <p>I've left this implementation intentionally sparse, not making assumptions about your use case / forcing patterns that might not work in the long run.</p>
            </div>

        </x-collapse>
    @endfor
</div>
