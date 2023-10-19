<h1>Accordions</h1>

<h2>Basic accordion</h2>

<div class="space-y-2">
    @for ($i = 0; $i < 3; $i++)
        <x-accordion
            class="border border-neutral bg-base-200"
            :open="$i === 0">
            <x-slot:title>Click me to open up</x-slot:title>
            This is my accordion contents.
        </x-accordion>
    @endfor
</div>

<h2>Accordion (Plus)</h2>
<div class="space-y-2">
    {{-- Plus attribute adds the "+" and "-" signs --}}
    {{-- Note the name is unique for this accordion group --}}
    @for ($i = 0; $i < 3; $i++)
        <x-accordion
            class="border border-neutral bg-base-200"
            :open="$i === 0"
            name="plus"
            plus>
            <x-slot:title>Click me to open up</x-slot:title>
            This is my accordion contents.
        </x-accordion>
    @endfor
</div>

<h2>Accordion (Arrow)</h2>
<div class="space-y-2">
    {{-- Arrow attribute adds up and down arrow signs --}}
    @for ($i = 0; $i < 3; $i++)
        <x-accordion
            class="border border-neutral bg-base-200"
            :open="$i === 0"
            name="arrow"
            arrow>
            <x-slot:title>Click me to open up</x-slot:title>
            This is my accordion contents.
        </x-accordion>
    @endfor
</div>

<h2>Joined accordion</h2>
{{-- Add a join styled wrapper element --}}
<div class="join join-vertical w-full">
    @for ($i = 0; $i < 3; $i++)
        <x-accordion
            class="join-item border border-neutral bg-base-200"
            :open="$i === 0"
            name="joined"
            arrow>
            <x-slot:title>Click me to open up</x-slot:title>
            This is my accordion contents.
        </x-accordion>
    @endfor
</div>

<h2>Styled accordion</h2>
<div class="space-y-2">
    {{-- You may use scoped slot attributes to add styles --}}
    {{-- You may use tailwind "peer" pseudo-selectors to style based on open state --}}
    @for ($i = 0; $i < 3; $i++)
        <x-accordion
            class="join-item border border-neutral bg-base-200"
            :open="$i === 0"
            name="joined"
            arrow>
            <x-slot:title class="bg-neutral text-neutral-content peer-checked:bg-info peer-checked:text-info-content">
                Apply styles when selected.
            </x-slot:title>
            <x-slot:content class="bg-neutral text-neutral-content peer-checked:bg-info peer-checked:text-info-content">
                This is done using the <code>peer-checked:</code> tailwind selector. You may add classes to title / content slots.
            </x-slot:content>
        </x-accordion>
    @endfor
</div>

<h2>Accordion with Alpine</h2>

{{-- You may also use the "radio" slot to add alpine attributes to the hidden radio button --}}
<div
    class="space-y-2"
    x-data="{
        open: '0',
        isOpen(id) { return this.open === id }
    }">
    @for ($i = 0; $i < 3; $i++)
        <x-accordion
            x-data="{ id: '{{ $i }}' }"
            class="border border-neutral bg-base-200"
            :open="$i === 0"
            name="alpine">
            <x-slot:radio
                x-model="open"
                x-bind:value="id">
            </x-slot:radio>

            <x-slot:title>
                This is <span x-text="isOpen(id) ? 'open' : 'closed'"></span>
            </x-slot:title>

            <div class="prose-sm">
                <p>How you implement this is really up to you... But for this example:</p>
                <ul>
                    <li>A wrapper tracks which item is checked (only one item may be selected at a time).</li>
                    <li>Note that alpine casts input values to strings, so a selected id of 1 is actually "1".</li>
                    <li>We have given the accordion item an id via <code>x-data</code>, for easy access within alpine.</li>
                    <li>Next, the <code>&lt;x-slot:radio&gt;</code> slot is used to set the alpine model connection to the wrappers <code>open</code> state.</li>
                    <li>Finally, the accordion item can check if it is open using the helper method <code>isOpen</code> provided by the wrapper.</li>
                </ul>
                <p>I've left this implementation intentionally sparse, not making assumptions about your use case / forcing patterns that might not work in the long run.</p>
            </div>

        </x-accordion>
    @endfor
</div>
