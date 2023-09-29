<h2>Accordions</h2>

<div class="space-y-2">
    <h3>Basic accordion</h3>

    @for ($i = 0; $i < 3; $i++)
        <x-accordion
            class="border border-accent"
            :open="$i === 0">
            <x-slot:title>Click me to open up</x-slot:title>
            <x-slot:content>This is my accordion contents.</x-slot:content>
        </x-accordion>
    @endfor

    <h3>Accordion (Plus)</h3>

    @for ($i = 0; $i < 3; $i++)
        <x-accordion
            class="border border-accent"
            :open="$i === 0"
            group="plus"
            plus>
            <x-slot:title>Click me to open up</x-slot:title>
            <x-slot:content>This is my accordion contents.</x-slot:content>
        </x-accordion>
    @endfor
    <h3>Accordion (Arrow)</h3>

    @for ($i = 0; $i < 3; $i++)
        <x-accordion
            class="border border-accent"
            :open="$i === 0"
            group="arrow"
            arrow>
            <x-slot:title>Click me to open up</x-slot:title>
            <x-slot:content>This is my accordion contents.</x-slot:content>
        </x-accordion>
    @endfor

    <h3>Joined accordion</h3>

    <div class="join join-vertical w-full">
        @for ($i = 0; $i < 3; $i++)
            <x-accordion
                class="join-item border border-accent"
                :open="$i === 0"
                group="joined"
                arrow>
                <x-slot:title>Click me to open up</x-slot:title>
                <x-slot:content>This is my accordion contents.</x-slot:content>
            </x-accordion>
        @endfor
    </div>

</div>
