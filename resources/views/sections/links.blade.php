@php($types = collect(['neutral', 'primary', 'secondary', 'accent', 'info', 'success', 'warning', 'error']))

<p>If you're not using tailwind typography for your text content you may use this component to readd some sane link styling.</p>

<h2>Basic link</h2>

<div class="not-prose">
    <x-link href="#">Example Link</x-link>
</div>

<h2>Link colours</h2>

<div class="not-prose">
    <x-link>Default</x-link>
    <x-link neutral>Neutral</x-link>
    <x-link primary>Primary</x-link>
    <x-link secondary>Secondary</x-link>
    <x-link accent>Accent</x-link>
    <x-link info>Info</x-link>
    <x-link success>Success</x-link>
    <x-link warning>Warning</x-link>
    <x-link error>Error</x-link>
    <x-link :color="$types->random()">Set via :color</x-link>
</div>

<h2>Underline on hover</h2>

<div class="not-prose">
    <x-link hover>Default</x-link>
    <x-link hover neutral>Neutral</x-link>
    <x-link hover primary>Primary</x-link>
    <x-link hover secondary>Secondary</x-link>
    <x-link hover accent>Accent</x-link>
    <x-link hover info>Info</x-link>
    <x-link hover success>Success</x-link>
    <x-link hover warning>Warning</x-link>
    <x-link hover error>Error</x-link>
    <x-link hover :color="$types->random()">Set via :color</x-link>
</div>

<h2><code>&lt;x-link&gt;</code> vs <code>&lt;x-a link&gt;</code></h2>

<div class="not-prose">
    <p>This is an <x-link href="#">&lt;x-link&gt;</x-link> link. It runs inline with text content and can be recoloured.</p>
    <p>This is an <x-a link href="#">&lt;x-a link&gt;</x-a> styled link. It uses inline-flex to position the inner text with padding / greater clickable area.</p>
</div>
<p class="mt-0">This is an <a href="#">&lt;a&gt;</a> with tailwind typography prose styling.</p>
