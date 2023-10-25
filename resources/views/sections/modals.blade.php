<h2>Basic modal</h2>

{{-- The modal slot will be added directly after the default slot content.  --}}
{{-- Therefore, you may use nextElementSibling to target the modal dialogue --}}
{{-- if your activating element is the last content in your default slot.   --}}
<div class="not-prose">
    <x-modal>
        <x-button onclick="this.nextElementSibling.showModal()">Basic modal</x-button>
        <x-slot:modal>
            <p>Hello, I am the modal contents.</p>
            <p class="font-bold">Close me by pressing esc.</p>
        </x-slot:modal>
    </x-modal>
</div>

<h2>Cross button modal</h2>

{{-- You may provide your own dialog ID, which can be used to open the modal from anywhere. --}}
<div class="not-prose">
    <x-modal id="closableModal">
        <x-button onclick="document.getElementById('closableModal').showModal()">Modal with ✕ button</x-button>
        <x-slot:modal>
            <x-app.modal-close />
            Hello, I am the modal contents. Nice.
        </x-slot:modal>
    </x-modal>

    <x-button onclick="document.getElementById('closableModal').showModal()">
        This opens the same modal
    </x-button>
</div>

<h2>Default modal slot</h2>

{{-- If you don't provide a modal slot, the default slot will be assumed to be the modal contents. --}}
<div class="not-prose">
    <x-modal id="defaultModal">
        <x-app.modal-close />
        <div class="space-y-2">
            <p>If you don't provide a modal slot, the default slot will be assumed to be the modal contents.</p>
            <p>Make sure you provide an ID to be able to access the modal directly.</p>
        </div>
    </x-modal>

    <x-button onclick="document.getElementById('defaultModal').showModal()">
        Default slot example
    </x-button>
</div>

<h2>Using auto-generated ID</h2>

{{-- If you don't want to create IDs for all your modals --}}
{{-- An ID will be generated via UUID. --}}
{{-- You may then access the generated ID via the @aware directive. --}}
<div>
    <p>Note that using <code>@@aware</code> this way will pull that variable scope outside of your component:</p>
    <pre>$id: {{ $id ?? 'undefined' }}</pre>

    <div class="not-prose">
        <x-modal close-backdrop>

            {{-- Pull the generated $id out of the component scope into the slot. --}}
            @aware(['id'])

            <x-button onclick="document.getElementById('{{ $id }}').showModal()">Open modal: {{ $id }}</x-button>
            <x-slot:modal><x-app.modal-close />Hi</x-slot:modal>
        </x-modal>
    </div>

    <pre>$id: {{ $id ?? 'undefined' }}</pre>
    <p>This could either be very useful, or a big problem. So be aware when using aware.</p>
</div>

<h2>Modal with actions</h2>

<div class="not-prose">
    <x-modal>
        @aware(['id'])
        <x-button onclick="document.getElementById('{{ $id }}').showModal()">Modal with a close action button</x-button>
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

<h2>Modal closing when backdrop is clicked</h2>
<div class="not-prose">
    <x-modal close-backdrop>
        @aware(['id'])
        <x-button onclick="document.getElementById('{{ $id }}').showModal()">Modal with close backdrop</x-button>
        <x-slot:modal>
            <x-app.modal-close />
            I'll close if you click the backdrop.
        </x-slot:modal>
    </x-modal>
</div>

<h2>Modal positions</h2>
<div class="not-prose">
    <x-modal top close-backdrop>
        @aware(['id'])
        <x-button onclick="document.getElementById('{{ $id }}').showModal()">Modal top</x-button>
        <x-slot:modal>
            <x-app.modal-close />
            Hello, I'm up here.
        </x-slot:modal>
    </x-modal>

    <x-modal bottom close-backdrop>
        @aware(['id'])
        <x-button onclick="document.getElementById('{{ $id }}').showModal()">Modal bottom</x-button>
        <x-slot:modal>
            <x-app.modal-close />
            Hello, I'm down here.
        </x-slot:modal>
    </x-modal>

    <x-modal close-backdrop bottom class="sm:modal-middle md:modal-top lg:modal-middle xl:modal-bottom 2xl:modal-middle">
        @aware(['id'])
        <x-button onclick="document.getElementById('{{ $id }}').showModal()">DaisyUI responsive classes</x-button>
        <x-slot:modal>
            <x-app.modal-close />
            <p class="mb-4">Reminder that DaisyUI responsive classes are a thing.</p>
            <div class="mockup-code">
                <pre><code>class="sm:modal-middle md:modal-top ... etc"</code></pre>
            </div>
        </x-slot:modal>
    </x-modal>
</div>

<h2>Modal using alpine ref</h2>

{{-- Using alpine slightly simplifies access to the modal. --}}
{{-- However, it's a slightly less lightweight solution than some of the alternatives. --}}
<div class="not-prose">
    <div x-data>
        <x-button @click="$refs.modal.showModal()">Modal using alpine x-ref</x-button>
        <x-modal x-ref="modal" close-backdrop>
            <x-app.modal-close />
            <div class="mockup-code">
                <pre><code>{{ '<div x-data>' }}</code></pre>
                <pre><code>  {{ "<x-button @click=\"\$refs.modal.showModal()\">" }}</code></pre>
                <pre><code>  ...</code></pre>
                <pre><code>  {{ "<x-modal x-ref=\"modal\">" }}</code></pre>
            </div>
        </x-modal>
    </div>
</div>
