<h2>Basic drawer</h2>

<div class="rounded-box overflow-hidden border shadow">
    <x-drawer id="example1">
        <div class="p-4">
            <div class="flex flex-row items-center gap-4">
                <label
                    for="example1"
                    class="btn btn-square drawer-button">
                    <x-app.icon-menu />
                </label>
                <x-button tag="label" for="example1">
                    Open
                </x-button>
            </div>

            <p>The main slot here is all available for your content.</p>
            <p>
                It's just important to add a label pointing at your drawer ID. This controls the
                open / closed state of the drawer via a hidden checkbox.
            </p>
        </div>

        {{-- Absolute + h-full makes this drawer stick within the container. --}}
        {{-- The default is fixed position across the page. --}}
        {{-- You may remove the drawer classes for your pages main nav. --}}
        <x-slot:drawer class="absolute h-full">
            <div
                class="h-full max-w-prose bg-base-100 p-4">
                <label
                    for="example1"
                    class="btn btn-square drawer-button !rotate-90">
                    <x-app.icon-menu />
                </label>
                <p>This is the drawer content, fixed to the left side.</p>
            </div>
        </x-slot:drawer>
    </x-drawer>

</div>
