@php($types = collect(['neutral', 'primary', 'secondary', 'accent', 'ghost', 'info', 'success', 'warning', 'error', 'link']))

<h2>Button tags</h2>

{{-- Use the tag attribute to change the button element --}}
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
    <x-button :color="$types->random()">Set via :color</x-button>
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

<div class="not-prose rounded-box relative inline-block bg-slate-500 bg-[url(https://placekitten.com/400)] bg-cover p-20 text-neutral-content bg-blend-color-dodge">
    <x-button glass>This button has a glass effect</x-button>
</div>

<h2>Square</h2>

<div class="not-prose flex flex-wrap items-center gap-2">
    <x-button square>
        <x-app.icon-cross />
    </x-button>
    <x-button square outline>
        <x-app.icon-cross />
    </x-button>
</div>

<h2>Circle</h2>

<div class="not-prose flex flex-wrap items-center gap-2">
    <x-button circle>
        <x-app.icon-cross />
    </x-button>
    <x-button circle outline>
        <x-app.icon-cross />
    </x-button>
</div>

<h2>Icon at start / end</h2>

<div class="not-prose flex flex-wrap items-center gap-2">
    <x-button>
        <x-app.icon-heart />
        Button
    </x-button>

    <x-button>
        Button
        <x-app.icon-heart />
    </x-button>
</div>

<h2>Block</h2>

<div class="not-prose">
    <x-button block>Block</x-button>
</div>

<h2>Loading spinner</h2>

<div class="not-prose flex flex-wrap items-center gap-2">
    <x-button square>
        <x-loading />
    </x-button>

    <x-button>
        Button <x-loading />
    </x-button>

    <x-button x-data="{
        loading: false,
        load() {
            this.loading = true;
            setTimeout(() => this.loading = false, 1000)
        }
    }" x-on:click="load" x-bind:disabled="loading" x-cloak>
        <span x-text="loading ? 'loading' : 'Click me'">Click me</span> <x-loading x-show="loading" />
    </x-button>
</div>

<h2>No click animation</h2>

<div class="not-prose">
    <x-button no-animation>No animation when clicked</x-button>
</div>
