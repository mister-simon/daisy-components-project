<h1>Artboards</h1>

<h2>Basic artboard</h2>

<x-artboard size="1" class="border-y">
    <div class="flex h-full flex-1 flex-col">
        <div>
            <p>Artboards can be used to define a common device size.</p>
            <p>This example does not make use of the demo attribute.</p>
            <p>As a result, the artboard is simply defining a width and height in px.</p>
            <p>Border classes have been added to the top and bottom, just to make things a little clearer.</p>
        </div>
        <div class="flex grow justify-center border-t">
            <x-divider horizontal class="my-4">Remaining height</x-divider>
        </div>
    </div>
</x-artboard>

<h2>Size 1</h2>
<div class="not-prose flex flex-wrap items-end gap-4">
    <x-artboard demo size="1">(320×568)</x-artboard>
    <x-artboard demo size="1" horizontal>(568×320)</x-artboard>
</div>

<h2>Size 2</h2>
<div class="not-prose flex flex-wrap items-end gap-4">
    <x-artboard demo size="2">(375×667)</x-artboard>
    <x-artboard demo size="2" horizontal>(667×375)</x-artboard>
</div>

<h2>Size 3</h2>
<div class="not-prose flex flex-wrap items-end gap-4">
    <x-artboard demo size="3">(414×736)</x-artboard>
    <x-artboard demo size="3" horizontal>(736×414)</x-artboard>
</div>

<h2>Size 4</h2>
<div class="not-prose flex flex-wrap items-end gap-4">
    <x-artboard demo size="4">(375×812)</x-artboard>
    <x-artboard demo size="4" horizontal>(812×375)</x-artboard>
</div>

<h2>Size 5</h2>
<div class="not-prose flex flex-wrap items-end gap-4">
    <x-artboard demo size="5">(414×896)</x-artboard>
    <x-artboard demo size="5" horizontal>(896×414)</x-artboard>
</div>

<h2>Size 6</h2>
<div class="not-prose flex flex-wrap items-end gap-4">
    <x-artboard demo size="6">(320×1024)</x-artboard>
    <x-artboard demo size="6" horizontal>(1024×320)</x-artboard>
</div>

<h2>Custom size</h2>

{{-- This example uses arbitrary selectors to allow the "horizontal" attribute to work. --}}
{{-- This only makes sense if you create a custom artboard size as a component to be used throughout your app. --}}
{{-- If that's not the case, then just use width and height to define the box. --}}
<div class="not-prose flex flex-wrap items-end gap-4">
    <x-artboard
        class="h-[420px] w-[69px] [&.artboard-horizontal]:h-[69px] [&.artboard-horizontal]:w-[420px]"
        demo>(69×420)</x-artboard>

    <x-artboard
        class="h-[420px] w-[69px] [&.artboard-horizontal]:h-[69px] [&.artboard-horizontal]:w-[420px]"
        demo
        horizontal>(420×69)</x-artboard>
</div>
