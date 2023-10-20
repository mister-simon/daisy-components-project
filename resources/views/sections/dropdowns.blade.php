<h1>Dropdowns</h1>

<h2>Basic Dropdown</h2>

<div class="not-prose">
    <x-dropdown>
        <x-slot:summary class="cursor-pointer">Click Me</x-slot:summary>
        <div class="rounded-box w-max bg-base-200 p-2">
            Some basic dropdown content.
        </div>
    </x-dropdown>

    {{-- Dropdowns pair nicely with Menu components. --}}
    {{-- Use the main slot for dropdown content. --}}
    <x-dropdown>
        <x-slot:summary class="btn btn-primary">Dropdown menu</x-slot:summary>

        <ul class="menu rounded-box w-52 bg-base-100 p-2 shadow">
            <li><a href="#">Oh my gosh!</a></li>
            <li><a href="#">You can fit so many</a></li>
            <li><a href="#">Dropdown items</a></li>
            <li><a href="#">In this bad boy.</a></li>
        </ul>
    </x-dropdown>
</div>

<h2>Dropdown - Content alignment</h2>
<div class="not-prose">
    <x-dropdown top>
        <x-slot:summary class="btn btn-primary">Top</x-slot:summary>
        <ul class="menu rounded-box w-52 bg-base-100 p-2 shadow">
            <li><a href="#">Oh my gosh!</a></li>
            <li><a href="#">Aligned to the Top</a></li>
        </ul>
    </x-dropdown>
    <x-dropdown bottom>
        <x-slot:summary class="btn btn-primary">Bottom</x-slot:summary>
        <ul class="menu rounded-box w-52 bg-base-100 p-2 shadow">
            <li><a href="#">Oh my gosh!</a></li>
            <li><a href="#">Aligned to the Bottom</a></li>
        </ul>
    </x-dropdown>
    <x-dropdown left>
        <x-slot:summary class="btn btn-primary">Left</x-slot:summary>
        <ul class="menu rounded-box w-52 bg-base-100 p-2 shadow">
            <li><a href="#">Oh my gosh!</a></li>
            <li><a href="#">Aligned to the Left</a></li>
        </ul>
    </x-dropdown>
    <x-dropdown right>
        <x-slot:summary class="btn btn-primary">Right</x-slot:summary>
        <ul class="menu rounded-box w-52 bg-base-100 p-2 shadow">
            <li><a href="#">Oh my gosh!</a></li>
            <li><a href="#">Aligned to the Right</a></li>
        </ul>
    </x-dropdown>
    <x-dropdown end>
        <x-slot:summary class="btn btn-primary">End</x-slot:summary>
        <ul class="menu rounded-box w-52 bg-base-100 p-2 shadow">
            <li><a href="#">Oh my gosh!</a></li>
            <li><a href="#">My contents are aligned to the end of the box</a></li>
        </ul>
    </x-dropdown>
</div>

<h2>Dropdown - Forced Open</h2>
<div class="not-prose">
    <x-dropdown force-open>
        <x-slot:summary class="btn btn-primary">Always open</x-slot:summary>
        <ul class="menu rounded-box w-52 bg-base-100 p-2 shadow">
            <li><a href="#">Oh my gosh!</a></li>
            <li><a href="#">I cannot be closed</a></li>
        </ul>
    </x-dropdown>
</div>

<h2 class="mt-32">Styled content slot</h2>

{{-- You may also use the content slot for instead of the default slot. --}}
{{-- This will allow you to restyle the content slot and add other attributes. --}}
{{-- Pass a "tag" attribute to the content slot to change it's element. --}}
<div class="not-prose">
    <x-dropdown>
        <x-slot:summary class="btn btn-success">Click for success!</x-slot:summary>
        <x-slot:content tag="ul" class="menu rounded-box w-52 bg-base-100 p-2 shadow">
            <li><a href="#">Oh my gosh!</a></li>
            <li><a href="#">These contents don't</a></li>
            <li><a href="#">have a wrapper element</a></li>
        </x-slot:content>
    </x-dropdown>
</div>
