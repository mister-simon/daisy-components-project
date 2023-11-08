<h2>Basic bottom navigation</h2>

<p>See the navigation fixed at the bottom of the screen:</p>

<div class="not-prose">
    <x-btm-nav class="z-40 shadow">
        <button>
            <x-app.icon-heart class="h-4 w-4" />
            <x-btm-nav-label>Home</x-btm-nav-label>
        </button>
        {{-- Active class adds a small border top --}}
        <a href="#" class="active">
            <x-app.icon-moon class="h-4 w-4" />
            <x-btm-nav-label>Bottom Navigation</x-btm-nav-label>
        </a>

        {{-- Disabled class / attribute dims buttons --}}
        <button class="disabled" role="button" aria-disabled="true">
            <x-app.icon-sun class="h-4 w-4" />
            <x-btm-nav-label>About</x-btm-nav-label>
        </button>
    </x-btm-nav>
</div>

<h2>Bottom nav sizes</h2>

<div class="not-prose flex flex-col gap-4 rounded bg-base-200 p-4">
    <x-btm-nav lg class="static">
        <button><x-btm-nav-label>Large</x-btm-nav-label></button>
        <button class="active"><x-btm-nav-label>Large</x-btm-nav-label></button>
        <button><x-btm-nav-label>Large</x-btm-nav-label></button>
    </x-btm-nav>

    <x-btm-nav md class="static">
        <button><x-btm-nav-label>Medium / Default</x-btm-nav-label></button>
        <button class="active"><x-btm-nav-label>Medium / Default</x-btm-nav-label></button>
        <button><x-btm-nav-label>Medium / Default</x-btm-nav-label></button>
    </x-btm-nav>

    <x-btm-nav sm class="static">
        <button><x-btm-nav-label>Small</x-btm-nav-label></button>
        <button class="active"><x-btm-nav-label>Small</x-btm-nav-label></button>
        <button><x-btm-nav-label>Small</x-btm-nav-label></button>
    </x-btm-nav>

    <x-btm-nav xs class="static">
        <button><x-btm-nav-label>Extra-small</x-btm-nav-label></button>
        <button class="active"><x-btm-nav-label>Extra-small</x-btm-nav-label></button>
        <button><x-btm-nav-label>Extra-small</x-btm-nav-label></button>
    </x-btm-nav>
</div>

<h2>Bottom nav element tag</h2>

<div class="not-prose flex flex-col gap-4 rounded bg-base-200 p-4">
    <x-btm-nav tag="nav" class="static">
        <button><x-btm-nav-label>This is</x-btm-nav-label></button>
        <button class="active"><x-btm-nav-label>within a</x-btm-nav-label></button>
        <button><x-btm-nav-label>nav tag</x-btm-nav-label></button>
    </x-btm-nav>
</div>

<h2>Colours</h2>

<div class="not-prose flex flex-col gap-4 rounded bg-base-200 p-4">
    <x-btm-nav class="static">
        <button><x-btm-nav-label>Add colours</x-btm-nav-label></button>
        <button class="active border-secondary bg-primary text-primary-content"><x-btm-nav-label>as you normally</x-btm-nav-label></button>
        <button><x-btm-nav-label>would do to buttons/links</x-btm-nav-label></button>
    </x-btm-nav>
</div>

{{-- Fix the page footer which is overlapped by the bottom nav --}}
<style>
    body>.footer {
        margin-bottom: 4rem;
        border: 0;
        box-shadow: none;
    }
</style>
