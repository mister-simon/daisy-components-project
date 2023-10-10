<h2>Modals</h2>

<h3>Basic Modal</h3>

<div class="not-prose">
    <x-modal>
        @aware(['id'])
        <x-button onclick="{{ $id }}.showModal()">Basic modal</x-button>
        <x-slot:modal>Hello, I am the modal contents. Close me by pressing esc.</x-slot:modal>
    </x-modal>
</div>

<h3>Cross Button Modal</h3>
<div class="not-prose">
    <x-modal>
        @aware(['id'])
        <x-button onclick="{{ $id }}.showModal()">Modal with ✕ button</x-button>
        <x-slot:modal>
            <x-app.modal-close />
            Hello, I am the modal contents. Nice.
        </x-slot:modal>
    </x-modal>
</div>

<h3>Modal with Actions</h3>
<div class="not-prose">
    <x-modal>
        @aware(['id'])
        <x-button onclick="{{ $id }}.showModal()">Modal with a close action button</x-button>
        <x-slot:modal>
            Hello, I am the modal contents. Nice.
        </x-slot:modal>
        <x-slot:actions>
            <form method="dialog">
                <x-button>Close</x-button>
            </form>
        </x-slot:actions>
    </x-modal>
</div>

<h3>Modal closing when backdrop is clicked</h3>
<div class="not-prose">
    <x-modal close-backdrop>
        @aware(['id'])
        <x-button onclick="{{ $id }}.showModal()">Modal with close backdrop</x-button>
        <x-slot:modal>
            <x-app.modal-close />
            I'll close if you click the backdrop.
        </x-slot:modal>
    </x-modal>
</div>

<h3>Modal positions</h3>
<div class="not-prose">
    <x-modal top close-backdrop>
        @aware(['id'])
        <x-button onclick="{{ $id }}.showModal()">Modal top</x-button>
        <x-slot:modal>
            <x-app.modal-close />
            Hello, I'm up here.
        </x-slot:modal>
    </x-modal>

    <x-modal bottom close-backdrop>
        @aware(['id'])
        <x-button onclick="{{ $id }}.showModal()">Modal bottom</x-button>
        <x-slot:modal>
            <x-app.modal-close />
            Hello, I'm down here.
        </x-slot:modal>
    </x-modal>

    <x-modal close-backdrop bottom class="sm:modal-middle md:modal-top lg:modal-middle xl:modal-bottom 2xl:modal-middle">
        @aware(['id'])
        <x-button onclick="{{ $id }}.showModal()">DaisyUI responsive classes</x-button>
        <x-slot:modal>
            <x-app.modal-close />
            <p class="mb-4">Reminder that DaisyUI responsive classes are a thing.</p>
            <div class="mockup-code">
                <pre><code>class="sm:modal-middle md:modal-top ... etc"</code></pre>
            </div>
        </x-slot:modal>
    </x-modal>
</div>

<h3>Modal using alpine ref</h3>
<div class="not-prose">
    <div x-data>
        <x-modal x-ref="modal" close-backdrop>
            <x-button @click="$refs.modal.showModal()">Modal using alpine x-ref</x-button>
            <x-slot:modal>
                <x-app.modal-close />
                <div class="mockup-code">
                    <pre><code>{{ '<div x-data>' }}</code></pre>
                    <pre><code>  {{ "<x-button @click=\"\$refs.modal.showModal()\">" }}</code></pre>
                    <pre><code>  ...</code></pre>
                    <pre><code>  {{ "<x-modal x-ref=\"modal\">" }}</code></pre>
                </div>
            </x-slot:modal>
        </x-modal>
    </div>
</div>
