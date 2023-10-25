<h2>Basic divider</h2>

<x-card bordered class="not-prose max-w-prose">
    <p>Note that this divider does not contain any semantic information.</p>
    <x-divider />
    <p>Meaning that it is considered mostly presentational.</p>
    <p>There are debates about when a <code>hr</code> tag should be used, but since a <code>hr</code> can't
        contain additional content it wouldn't work for this usage. So this divider is just a <code>div</code>.</p>
</x-card>

<h2>Horizontal divider</h2>

<x-card bordered class="not-prose max-w-prose">
    <div class="flex flex-row justify-evenly">
        <div>Hello</div>
        <x-divider horizontal />
        <div>Hi there</div>
    </div>
</x-card>

<h2>Dividers with text</h2>

<x-card bordered class="not-prose max-w-prose text-center">
    <div class="rounded-box bg-base-200 p-2">Divide</div>
    <x-divider>and</x-divider>
    <div class="flex h-40 flex-row items-center justify-evenly">
        <div class="rounded-box bg-base-200 p-2">conquer is</div>
        <x-divider horizontal>what</x-divider>
        <div class="rounded-box bg-base-200 p-2">it's called</div>
    </div>
</x-card>

<h2>Custom divider</h2>

<x-card bordered class="not-prose max-w-prose bg-neutral text-neutral-content">
    <p>You can restyle the text within or pass additional attributes as you would with any other component.</p>
    <x-divider class="text-2xl text-primary before:bg-primary/50 after:bg-primary/50">Neat</x-divider>
    <p>
        To restyle the lines of the divider you'll need to use pseudo-selector variant classes.
    </p>
    <p><code>class="before:bg-primary/50 after:bg-primary/50"</code></p>
</x-card>
