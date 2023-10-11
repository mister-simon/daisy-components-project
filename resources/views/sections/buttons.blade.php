<h1>Buttons</h1>

<h2>Button tags</h2>
<div class="not-prose flex flex-wrap items-center gap-2">
    <x-button>{{ '<button>' }} by default</x-button>
    <x-button tag="span">This is a {{ '<span>' }}</x-button>
    <x-a>&lt;x-a&gt; works like an alias for &lt;button tag="a"&gt;</x-a>
</div>

<h2>Buttons with brand colors</h2>
<div class="not-prose flex flex-wrap items-center gap-2">
    <x-button>Button</x-button>
    <x-button neutral>Neutral</x-button>
    <x-button primary>Primary</x-button>
    <x-button secondary>Secondary</x-button>
    <x-button accent>Accent</x-button>
    <x-button ghost>Ghost</x-button>
    <x-button link>Link</x-button>
    <x-button info>Info</x-button>
    <x-button success>Success</x-button>
    <x-button warning>Warning</x-button>
    <x-button error>Error</x-button>
</div>

<h2>Active buttons</h2>

<div class="not-prose flex flex-wrap items-center gap-2">
    <x-button active>Button</x-button>
    <x-button neutral active>Neutral</x-button>
    <x-button primary active>Primary</x-button>
    <x-button secondary active>Secondary</x-button>
    <x-button accent active>Accent</x-button>
    <x-button ghost active>Ghost</x-button>
    <x-button link active>Link</x-button>
    <x-button info active>Info</x-button>
    <x-button success active>Success</x-button>
    <x-button warning active>Warning</x-button>
    <x-button error active>Error</x-button>
</div>

<h2>Outline buttons</h2>

<div class="not-prose flex flex-wrap items-center gap-2">
    <x-button outline>Button</x-button>
    <x-button neutral outline>Neutral</x-button>
    <x-button primary outline>Primary</x-button>
    <x-button secondary outline>Secondary</x-button>
    <x-button accent outline>Accent</x-button>
    <x-button ghost outline>Ghost</x-button>
    <x-button link outline>Link</x-button>
    <x-button info outline>Info</x-button>
    <x-button success outline>Success</x-button>
    <x-button warning outline>Warning</x-button>
    <x-button error outline>Error</x-button>
</div>

<h2>Disabled buttons</h2>

<div class="not-prose flex flex-wrap items-center gap-2">
    <x-button disabled>Button</x-button>
</div>

<h2>Button sizes</h2>

<div class="not-prose flex flex-wrap items-center gap-2">
    <x-button lg>Large</x-button>
    <x-button>Normal</x-button>
    <x-button sm>Small</x-button>
    <x-button xs>Tiny</x-button>
</div>

<h2>Wide</h2>

<div class="not-prose">
    <x-button wide>Wide</x-button>
</div>

<h2>Glass</h2>

<div class="not-prose relative inline-block overflow-hidden rounded-2xl bg-accent p-20">
    <img src="https://placekitten.com/400/210" alt="" class="absolute inset-0 h-full w-full object-cover brightness-200">
    <x-button glass>This button has a glass effect</x-button>
</div>

<h2>Square</h2>

<div class="not-prose flex flex-wrap items-center gap-2">
    <x-button square>
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
        </svg>
    </x-button>
    <x-button square outline>
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
        </svg>
    </x-button>
</div>

<h2>Circle</h2>

<div class="not-prose flex flex-wrap items-center gap-2">
    <x-button circle>
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
        </svg>
    </x-button>
    <x-button circle outline>
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
        </svg>
    </x-button>
</div>

<h2>Icon at start / end</h2>

<div class="not-prose flex flex-wrap items-center gap-2">
    <x-button>
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
        </svg>
        Button
    </x-button>

    <x-button>
        Button
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
        </svg>
    </x-button>
</div>

<h2>Block</h2>

<div class="not-prose">
    <x-button block>Block</x-button>
</div>

<h2>Loading spinner</h2>

<div class="not-prose flex flex-wrap items-center gap-2">
    <x-button square>
        <span class="loading loading-spinner"></span>
    </x-button>
    <x-button>
        <span class="loading loading-spinner"></span> Button
    </x-button>
</div>

<h2>No click animation</h2>

<div class="not-prose">
    <x-button no-animation>No animation when clicked</x-button>
</div>
