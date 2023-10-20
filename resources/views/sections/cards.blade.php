<h1>Cards</h1>

<h2>Most basic cards</h2>

<div class="not-prose flex flex-wrap gap-4">
    {{-- Use the default slot for the main content of the card. --}}
    {{-- Central content is wrapped in a div to take it out of flex layout. --}}
    <x-card class="max-w-sm">
        <div>
            <p>This card just has some text inside.</p>
            <p>Note that it can be a little bit hard to understand the layout of the card without any borders and such.</p>
        </div>
    </x-card>

    {{-- Add a border and shadow for more of a floating effect --}}
    <x-card bordered class="max-w-sm shadow-xl">
        <p>This card has slightly clearer bounds.</p>
        <p>It has a large tailwind shadow.</p>
        <p>On a light background, this makes the card's inner look lighter than that of the first card... But it's not!</p>
        <p>That's a nice optical illusion for you.</p>
    </x-card>
</div>

<h2>More examples</h2>

{{-- Img and img-end slots are applied to img elements --}}
<div class="not-prose flex flex-wrap items-start gap-x-4 gap-y-14">
    <x-card bordered class="shadow-xl">
        <x-slot:img
            src="https://placehold.co/400x50"
            alt="400px by 50px placeholder"
            class="h-12 w-full object-cover"></x-slot:img>
        <x-slot:img-end
            src="https://placehold.co/400x50"
            alt="400px by 50px placeholder"
            class="h-12 w-full object-cover"></x-slot:img-end>

        <x-slot:title>Complete card</x-slot:title>

        <div class="mb-auto max-w-sm space-y-1">
            <p>Start image, title, content, actions, and end image.</p>
            <p>The border and shadow are also applied here.</p>
            <p>Actions can be repositioned by styling the actions slot.</p>
            <p>The title element is a h2 by default. But that can be changed.</p>
        </div>

        <x-slot:actions class="justify-end">
            <x-button>style the actions slot</x-button>
        </x-slot:actions>
    </x-card>

    <x-card compact bordered class="shadow-xl">
        <x-slot:img
            src="https://placehold.co/400x50"
            alt="400px by 50px placeholder"
            class="h-12 w-full object-cover"></x-slot:img>

        <x-slot:title>Compact card</x-slot:title>

        <div class="mb-auto max-w-sm space-y-1">
            <p>This card is similar to the previous one.</p>
            <p>Use the compact component attribute for smaller body text, padding, etc.</p>
        </div>

        <x-slot:actions class="justify-end">
            <x-button sm>Smol Action</x-button>
        </x-slot:actions>
    </x-card>

    <x-card compact bordered class="shadow-xl">
        <x-slot:title tag="span">This heading is actually a span</x-slot:title>

        <div class="mb-auto max-w-sm space-y-1">
            <p>But it could just as easily have been a <code>{{ '<h1>' }}</code>.</p>
            <p>Use custom title tags to properly structure your pages headings.</p>
        </div>
    </x-card>

    <x-card bordered class="shadow-xl" body-classes="items-center justify-center">
        <x-slot:title>Center everything!</x-slot:title>
        <div class="mb-auto max-w-sm space-y-1">
            <p>You may pass <code>body-classes</code>, which will be applied to the card body.</p>
        </div>
        <x-slot:actions>
            <x-button neutral>Central Action</x-button>
        </x-slot:actions>
    </x-card>

    <x-card bordered class="shadow-xl" img-classes="p-10 pb-0" img-end-classes="p-10 pt-0">
        <x-slot:img
            src="https://placehold.co/400x50"
            alt="400px by 50px placeholder"
            class="h-12 w-full rounded-xl object-cover"></x-slot:img>
        <x-slot:img-end
            src="https://placehold.co/400x50"
            alt="400px by 50px placeholder"
            class="h-12 w-full rounded-xl object-cover"></x-slot:img-end>

        <x-slot:title>Custom image styling</x-slot:title>

        <div class="mb-auto max-w-sm space-y-1">
            <p>You can use the <code>image-classes</code> and <code>image-end-classes</code> attributes to style the <code>figure</code> elements wrapping your img slots.</p>
        </div>

        <x-slot:actions class="justify-end">
            <x-button sm>Smol Action</x-button>
        </x-slot:actions>
    </x-card>

    <x-card bordered img-side class="shadow-xl">
        <x-slot:img
            src="https://placehold.co/100x400"
            alt="100px by 400px placeholder"
            class="h-full object-cover"></x-slot:img>

        <x-slot:title>Side images</x-slot:title>

        <div class="mb-auto max-w-sm space-y-1">
            <p>You can use the <code>img-side</code> attribute to restyle your image to the side of the body content.</p>
            <p>Though, you might be better off applying this using a reponsive class:
                <pre><code>{{ "<x-card class=\"lg:card-side\">" }}</code></pre>
            </p>
        </div>

        <x-slot:actions class="justify-end">
            <x-button sm>Smol Action</x-button>
        </x-slot:actions>
    </x-card>

    <x-card img-full class="shadow-xl">
        <x-slot:img
            src="https://placehold.co/400x150"
            alt="400px by 150px placeholder"></x-slot:img>

        <x-slot:title>Image as card background</x-slot:title>

        <div class="mb-auto max-w-sm space-y-1">
            <p>You can use the <code>img-full</code> attribute to make your image slot cover the card.</p>
        </div>

        <x-slot:actions class="justify-end">
            <x-button sm>Smol Action</x-button>
        </x-slot:actions>
    </x-card>

    <x-card class="bg-primary text-primary-content shadow-xl">
        <x-slot:title>Easily recoloured</x-slot:title>

        <div class="mb-auto max-w-sm space-y-1">
            <p>You can easily restyle the card colours.</p>
        </div>

        <x-slot:actions class="justify-end">
            <x-button neutral>Hi There</x-button>
        </x-slot:actions>
    </x-card>

    <x-card bordered class="shadow-xl">
        <x-slot:title>Action reordering</x-slot:title>

        <div class="mb-auto max-w-sm space-y-1">
            <p>In this example I have reordered the actions to the start of the card-body using the class <code>-order-1</code>.</p>
            <p>Alternately, you can just add your own actions section at the top of the card body with class <code>card-actions</code>.</p>
        </div>

        <x-slot:actions class="-order-1 justify-end">
            <x-button square neutral sm>✕</x-button>
        </x-slot:actions>
    </x-card>

    <div class="rounded-box relative overflow-hidden bg-slate-500 bg-[url(https://placekitten.com/400)] bg-cover p-20 bg-blend-color-dodge">
        <x-card bordered class="glass shadow-xl">
            <x-slot:title>Glass style card</x-slot:title>

            <div class="mb-auto max-w-sm space-y-1">
                <p>This example has the glassy effect, which is pretty cool.</p>
                <p>Looks pretty good on image backgrounds.</p>
            </div>

            <x-slot:actions class="justify-end">
                <x-button primary>Hello</x-button>
            </x-slot:actions>
        </x-card>
    </div>
</div>
