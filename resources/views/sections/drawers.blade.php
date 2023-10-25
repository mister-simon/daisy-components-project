<h2>Basic drawer</h2>

<x-card bordered>
    <x-drawer id="example1">
        <div class="flex flex-row items-center gap-4">
            <label
                for="example1"
                class="btn btn-square drawer-button">
                <x-app.icon-menu />
            </label>
            <x-button tag="label" for="example1">
                Open / Close
            </x-button>
        </div>

        <p>The main slot here is all available for your content.</p>
        <p>
            It's just important to add a label pointing at your drawer ID. This controls the
            open / closed state of the drawer via a hidden checkbox.
        </p>

        <x-slot:drawer>
            <div
                class="min-h-full max-w-prose bg-base-100 p-4">
                <p>This is the drawer content, fixed to the left side.</p>
            </div>
        </x-slot:drawer>
    </x-drawer>

</x-card>
