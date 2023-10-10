<h1>Accordions</h1>

<div class="space-y-2">
    <h2>Basic accordion</h2>

    @for ($i = 0; $i < 3; $i++)
        <x-accordion
            class="border border-accent"
            :open="$i === 0">
            <x-slot:title>Click me to open up</x-slot:title>
            <x-slot:content>This is my accordion contents.</x-slot:content>
        </x-accordion>
    @endfor

    <h2>Accordion (Plus)</h2>

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
    <h2>Accordion (Arrow)</h2>

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

    <h2>Joined accordion</h2>

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
