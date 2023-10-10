<h2>Badges</h2>

<h3>Badges with brand colors</h3>
<div class="not-prose flex flex-wrap items-center gap-2">
    <x-badge>badge</x-badge>
    <x-badge neutral>Neutral</x-badge>
    <x-badge primary>Primary</x-badge>
    <x-badge secondary>Secondary</x-badge>
    <x-badge accent>Accent</x-badge>
    <x-badge ghost>Ghost</x-badge>
    <x-badge info>Info</x-badge>
    <x-badge success>Success</x-badge>
    <x-badge warning>Warning</x-badge>
    <x-badge error>Error</x-badge>
</div>

<h3>Outline badges</h3>

<div class="not-prose flex flex-wrap items-center gap-2">
    <x-badge outline>badge</x-badge>
    <x-badge neutral outline>Neutral</x-badge>
    <x-badge primary outline>Primary</x-badge>
    <x-badge secondary outline>Secondary</x-badge>
    <x-badge accent outline>Accent</x-badge>
    <x-badge ghost outline>Ghost</x-badge>
    <x-badge info outline>Info</x-badge>
    <x-badge success outline>Success</x-badge>
    <x-badge warning outline>Warning</x-badge>
    <x-badge error outline>Error</x-badge>
</div>

<h3>Badge sizes</h3>

<div class="not-prose flex flex-wrap items-center gap-2">
    <x-badge lg>Large</x-badge>
    <x-badge>Normal</x-badge>
    <x-badge sm>Small</x-badge>
    <x-badge xs>Tiny</x-badge>
</div>

<h3>Badges in buttons</h3>

<div class="not-prose">
    <x-button>
        Inbox
        <x-badge neutral>+99</x-badge>
    </x-button>

    <x-button class="relative">
        Notifications
        <x-badge neutral class="absolute right-0 top-0 -translate-y-1/2 translate-x-1/3 animate-pulse">New</x-badge>
    </x-button>
</div>

<h3>Badges in text <x-badge lg outline>Wow</x-badge></h3>
