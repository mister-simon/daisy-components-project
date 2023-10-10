<h1>Cards</h1>

<h2>Most Basic Cards</h2>

<div class="not-prose flex flex-wrap gap-4">
    <x-card class="max-w-sm">
        <div>
            <p>This card just has some text inside.</p>
            <p>Note that it can be a little bit hard to understand the layout of the card without any borders and such.</p>
        </div>
    </x-card>

    <x-card bordered class="max-w-sm shadow-xl">
        <p>This card has slightly clearer bounds.</p>
        <p>It has a large tailwind shadow.</p>
        <p>On a light background, this makes the card's inner look lighter than that of the first card... But it's not!</p>
        <p>That's a nice optical illusion for you.</p>
    </x-card>
</div>

<h2>More examples</h2>

<div class="not-prose flex flex-wrap gap-x-4 gap-y-14">
    <x-card bordered class="shadow-xl">
        <x-slot:img src="https://placehold.co/400x50" alt="400px by 50px placeholder" class="h-12 w-full object-cover"></x-slot:img>
        <x-slot:img-end src="https://placehold.co/400x50" alt="400px by 50px placeholder" class="h-12 w-full object-cover"></x-slot:img-end>

        <x-slot:title>Complete card</x-slot:title>

        <div class="mb-auto space-y-1">
            <p>Start image, title, content, actions, and end image.</p>
            <p>The border and shadow are also applied here.</p>
            <p>Actions can be repositioned by styling the actions slot.</p>
            <p>The title element is a h2 by default.</p>
        </div>

        <x-slot:actions class="justify-end">
            <x-button>style the actions slot</x-button>
        </x-slot:actions>
    </x-card>

    <x-card compact bordered class="shadow-xl">
        <x-slot:img src="https://placehold.co/400x50" alt="400px by 50px placeholder" class="h-12 w-full object-cover"></x-slot:img>
        <x-slot:img-end src="https://placehold.co/400x50" alt="400px by 50px placeholder" class="h-12 w-full object-cover"></x-slot:img-end>

        <x-slot:title>Compact card</x-slot:title>

        <div class="mb-auto space-y-1">
            <p>This card is similar to the previous one.</p>
            <p>Use the compact component attribute for smaller body text, padding, etc.</p>
        </div>

        <x-slot:actions class="justify-end">
            <x-button sm>Smol Action</x-button>
        </x-slot:actions>
    </x-card>

    <x-card bordered class="shadow-xl" body-classes="items-center justify-center">
        <x-slot:title>Center everything!</x-slot:title>
        <p>You may pass body classes, which will be applied to the card body.</p>
        <x-slot:actions>
            <x-button neutral>Central Action</x-button>
        </x-slot:actions>
    </x-card>

    <x-card compact bordered class="shadow-xl">
        <x-slot:title tag="span">This element is a span</x-slot:title>

        <div class="mb-auto space-y-1">
            <p>But it could just as easily have been a <code>{{ '<h1>' }}</code>.</p>
            <p>Use custom title tags to properly structure your pages headings.</p>
        </div>
    </x-card>
</div>
