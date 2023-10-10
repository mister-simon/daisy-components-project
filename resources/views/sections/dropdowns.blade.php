<h1>Dropdowns</h1>

<h2>Basic Dropdown</h2>

<div class="not-prose">
    <x-dropdown>
        <x-slot:summary class="btn-primary">Default dropdown</x-slot:summary>
        <x-slot:content>
            <ul class="menu rounded-box w-52 bg-base-100 p-2 shadow">
                <li><a href="#">Oh my gosh!</a></li>
                <li><a href="#">You can fit so many</a></li>
                <li><a href="#">Dropdown items</a></li>
                <li><a href="#">In this bad boy.</a></li>
            </ul>
        </x-slot:content>
    </x-dropdown>
</div>

<h2>Dropdown - Content alignment</h2>
<div class="not-prose">
    <x-dropdown top>
        <x-slot:summary class="btn-primary">Top</x-slot:summary>
        <x-slot:content>
            <ul class="menu rounded-box w-52 bg-base-100 p-2 shadow">
                <li><a href="#">Oh my gosh!</a></li>
                <li><a href="#">Aligned to the Top</a></li>
            </ul>
        </x-slot:content>
    </x-dropdown>
    <x-dropdown bottom>
        <x-slot:summary class="btn-primary">Bottom</x-slot:summary>
        <x-slot:content>
            <ul class="menu rounded-box w-52 bg-base-100 p-2 shadow">
                <li><a href="#">Oh my gosh!</a></li>
                <li><a href="#">Aligned to the Bottom</a></li>
            </ul>
        </x-slot:content>
    </x-dropdown>
    <x-dropdown left>
        <x-slot:summary class="btn-primary">Left</x-slot:summary>
        <x-slot:content>
            <ul class="menu rounded-box w-52 bg-base-100 p-2 shadow">
                <li><a href="#">Oh my gosh!</a></li>
                <li><a href="#">Aligned to the Left</a></li>
            </ul>
        </x-slot:content>
    </x-dropdown>
    <x-dropdown right>
        <x-slot:summary class="btn-primary">Right</x-slot:summary>
        <x-slot:content>
            <ul class="menu rounded-box w-52 bg-base-100 p-2 shadow">
                <li><a href="#">Oh my gosh!</a></li>
                <li><a href="#">Aligned to the Right</a></li>
            </ul>
        </x-slot:content>
    </x-dropdown>
    <x-dropdown end>
        <x-slot:summary class="btn-primary">End</x-slot:summary>
        <x-slot:content>
            <ul class="menu rounded-box w-52 bg-base-100 p-2 shadow">
                <li><a href="#">Oh my gosh!</a></li>
                <li><a href="#">My contents are aligned to the end of the box</a></li>
            </ul>
        </x-slot:content>
    </x-dropdown>
</div>

<h2>Dropdown - Forced Open</h2>
<div class="not-prose">
    <x-dropdown force-open>
        <x-slot:summary class="btn-primary">Always open</x-slot:summary>
        <x-slot:content>
            <ul class="menu rounded-box w-52 bg-base-100 p-2 shadow">
                <li><a href="#">Oh my gosh!</a></li>
                <li><a href="#">I cannot be closed</a></li>
            </ul>
        </x-slot:content>
    </x-dropdown>
</div>
