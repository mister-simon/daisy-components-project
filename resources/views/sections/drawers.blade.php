<h2>Basic drawer</h2>

{{-- Wrapper for demo purposes... --}}
<div class="rounded-box overflow-hidden border shadow">

    {{-- You must provide a unique ID, as the drawer system relies on a checkbox for no-js functionality. --}}
    <x-drawer id="example1">
        <div class="p-4">
            <x-button tag="label" for="example1" role="button">Open Drawer</x-button>
            <p>The main slot here is all available for your content.</p>
        </div>

        {{-- Absolute + h-full are used for this demo to contain the drawer within the example area. --}}
        {{-- By default the drawer will be position fixed. --}}
        <x-slot:drawer class="absolute h-full">
            <div
                class="h-full max-w-prose bg-base-100 p-4">
                <x-button tag="label" for="example1">Close</x-button>
                <p>This is the drawer content, fixed to the left side.</p>
            </div>
        </x-slot:drawer>
    </x-drawer>
</div>

<h2>Improved drawer</h2>

{{-- Wrapper for demo purposes... --}}
<div class="rounded-box overflow-hidden border shadow" x-data="{ open: false }">

    <x-drawer id="example2">
        <x-slot:toggle
            x-model="open"
            x-on:keyup.escape.window="open = false"
            x-bind:aria-expanded="open"
            aria-controls="sidebar-example2">
        </x-slot:toggle>

        <div class="p-4">
            <x-button
                tag="label"
                for="example2"
                role="button">
                Open Drawer
            </x-button>
            <p>This improved version has better accessibility + usability features.</p>
            <p>For example:</p>
            <ul>
                <li>Checkbox is bound to alpine state.</li>
                <li>Pressing escape closes the sidebar.</li>
                <li>When open, focus will be trapped within the drawer. This is particularly useful for menus.</li>
                <li>Trap is being set to inert, preventing other parts of the page from being visible to screen-readers when open.</li>
                <li>Hide and show content based on the open state, this prevents users from tabbing into a drawer menu when it isn't yet open.</li>
            </ul>
        </div>

        {{-- Absolute + h-full are used for this demo to contain the drawer within the example area. --}}
        {{-- By default the drawer will be position fixed. --}}
        <x-slot:drawer class="absolute h-full">
            <div
                class="h-full max-w-prose bg-base-100 p-4"
                x-trap.inert="open">
                <div
                    x-show="open"
                    x-transition.opacity>
                    <x-button tag="label" for="example2" role="button">Close Drawer</x-button>
                    <p>This is the drawer content, fixed to the left side.</p>
                </div>
            </div>
        </x-slot:drawer>
    </x-drawer>
</div>
