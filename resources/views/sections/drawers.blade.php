<h2>Basic drawer</h2>

<div class="rounded-box border shadow">

    {{-- You must provide a unique ID, as the drawer system relies on a checkbox for no-js functionality. --}}
    <x-drawer id="baseExample">
        <div class="p-4">
            <x-button tag="label" for="baseExample" role="button">Open Drawer</x-button>
            <p>The main slot here is all available for your content.</p>
        </div>

        <x-slot:drawer>
            <div
                class="h-full w-[65ch] max-w-[90vw] bg-base-100 p-4">
                <x-button tag="label" for="baseExample">Close</x-button>
                <p>This is the drawer content, fixed to the left side.</p>
            </div>
        </x-slot:drawer>
    </x-drawer>
</div>

<h2>Drawer end / right</h2>

<div class="rounded-box border shadow">
    <x-drawer id="endExample" end>
        <div class="p-4">
            <x-button tag="label" for="endExample" role="button">Open Drawer</x-button>
            <p>The main slot here is all available for your content.</p>
        </div>

        <x-slot:drawer>
            <div
                class="h-full w-[65ch] max-w-[90vw] bg-base-100 p-4">
                <x-button tag="label" for="endExample">Close</x-button>
                <p>This is the drawer content, fixed to the right side.</p>
            </div>
        </x-slot:drawer>
    </x-drawer>
</div>

<h2>Relative position drawer</h2>

<div class="rounded-box overflow-hidden border shadow">
    <x-drawer id="relativeExample" class="relative">
        <div class="p-4">
            <x-button tag="label" for="relativeExample" role="button">Open Drawer</x-button>
            <p>This example contains the drawer within a relative container, rather than being fixed to the screen.</p>
            <p>Note: This doesn't seem to play well with the end drawer option.</p>
        </div>

        <x-slot:drawer class="absolute z-40 h-full">
            <div
                class="h-full w-[65ch] max-w-[90vw] overflow-auto bg-base-100 p-4">
                <x-button tag="label" for="relativeExample">Close</x-button>
                <p>This is the drawer content, fixed to the right side.</p>
                <p>Relative parent, absolute drawer wrapper will full height.</p>
                <p>Full height drawer inner, with overflow-auto to deal with scrolling.</p>
                <p>By default the side drawer recieves z-50. This drawer has z-40 so that it doesn't render over fixed drawers.</p>
            </div>
        </x-slot:drawer>
    </x-drawer>
</div>

<h2>Improved drawer</h2>

<div class="rounded-box border shadow" x-data="{ open: false }">

    <x-drawer id="improvedExample">
        <x-slot:toggle
            x-model="open"
            x-on:keyup.escape.window="open = false"
            x-bind:aria-expanded="open"
            aria-controls="sidebar-improvedExample">
        </x-slot:toggle>

        <div class="p-4">
            <x-button
                tag="label"
                for="improvedExample"
                role="button">
                Open Drawer
            </x-button>
            <p>This improved version has better accessibility + usability features.</p>
            <p>For example:</p>
            <ul>
                <li>Added dialog role to drawer dialog.</li>
                <li>Checkbox is bound to alpine state.</li>
                <li>Pressing escape closes the sidebar.</li>
                <li>When open, focus will be trapped within the drawer. This is particularly useful for menus.</li>
                <li>When open, the page is set to noscroll to ensure that all scroll events go to your nav / dialog.</li>
                <li>Trap is being set to inert, preventing other parts of the page from being visible to screen-readers when open.</li>
                <li>Hide and show content based on the open state, this prevents users from tabbing into a drawer menu when it isn't yet open.</li>
            </ul>
        </div>

        <x-slot:drawer role="dialog">
            <div
                class="h-full w-[65ch] max-w-[90vw] bg-base-100 p-4"
                x-trap.inert.noscroll="open">
                <div
                    x-show="open"
                    x-transition.opacity>
                    <x-button tag="label" for="improvedExample" role="button">Close Drawer</x-button>
                    <p>This is the drawer content, fixed to the left side.</p>
                </div>
            </div>
        </x-slot:drawer>
    </x-drawer>
</div>
