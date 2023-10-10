<h1>Badges</h1>

<h2>Badges with brand colors</h2>
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

<h2>Outline badges</h2>

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

<h2>Badge sizes</h2>

<div class="not-prose flex flex-wrap items-center gap-2">
    <x-badge lg>Large</x-badge>
    <x-badge>Normal</x-badge>
    <x-badge sm>Small</x-badge>
    <x-badge xs>Tiny</x-badge>
</div>

<h2>Badges in buttons</h2>

<div class="not-prose">
    <x-button>
        Inbox
        <x-badge neutral>+99</x-badge>
    </x-button>

    <div class="indicator">
        <x-badge neutral class="indicator-item animate-pulse">New</x-badge>
        <x-button>Notifications</x-button>
    </div>
</div>

<h2 class="flex items-center gap-2">Badges in text <x-badge lg outline>Wow</x-badge></h2>

<h2>Badge tags</h2>

<div>
    <x-badge tag="marquee" class="motion-reduce:hidden">Don't use marquee</x-badge>
    <x-badge tag="div" class="motion-safe:hidden">I'm a div</x-badge>
</div>

<h2>Empty badges</h2>

<div class="not-prose grid w-min grid-flow-col-dense grid-rows-4 place-items-center gap-2">
    <x-badge lg />
    <x-badge />
    <x-badge sm />
    <x-badge xs />

    <x-badge lg neutral />
    <x-badge neutral />
    <x-badge sm neutral />
    <x-badge xs neutral />

    <x-badge lg primary />
    <x-badge primary />
    <x-badge sm primary />
    <x-badge xs primary />

    <x-badge lg secondary />
    <x-badge secondary />
    <x-badge sm secondary />
    <x-badge xs secondary />

    <x-badge lg accent />
    <x-badge accent />
    <x-badge sm accent />
    <x-badge xs accent />

    <x-badge lg ghost />
    <x-badge ghost />
    <x-badge sm ghost />
    <x-badge xs ghost />

    <x-badge lg info />
    <x-badge info />
    <x-badge sm info />
    <x-badge xs info />

    <x-badge lg success />
    <x-badge success />
    <x-badge sm success />
    <x-badge xs success />

    <x-badge lg warning />
    <x-badge warning />
    <x-badge sm warning />
    <x-badge xs warning />

    <x-badge lg error />
    <x-badge error />
    <x-badge sm error />
    <x-badge xs error />

</div>
