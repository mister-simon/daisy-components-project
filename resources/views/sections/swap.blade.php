<h2>Basic swap</h2>

<div class="flex flex-col items-start gap-4">
    {{-- Default slot represents the off state --}}
    <x-swap class="text-center">
        Off
        <x-slot:on>On</x-slot:on>
    </x-swap>

    <x-swap class="text-center">
        <div class="btn btn-primary">
            Inactive
        </div>
        <x-slot:on>
            <div class="btn btn-primary">
                Active!
            </div>
        </x-slot:on>
    </x-swap>

    <x-swap>
        <x-slot:off class="btn btn-neutral">Goodbye</x-slot:off>
        <x-slot:on class="btn btn-primary">Hello</x-slot:on>
    </x-swap>

    {{-- Pointer events on "inactive" supressed to prevent inactive from receiving an active focus highlight --}}
    <x-swap>
        <x-slot:off class="btn btn-primary btn-outline pointer-events-none">Inactive</x-slot:off>
        <x-slot:on class="btn btn-primary btn-outline btn-active">Active</x-slot:on>
    </x-swap>
</div>

<h2>States</h2>

<div class="flex flex-col items-start gap-4">

    <div>
        <p class="text-sm">Indeterminate state (only set via js...)</p>
        <x-swap x-init="$el.querySelector('input').indeterminate = true">
            <x-slot:indeterminate class="btn btn-neutral btn-outline">Indeterminate</x-slot:indeterminate>
            <x-slot:off class="btn btn-neutral">Off</x-slot:off>
            <x-slot:on class="btn btn-primary">On</x-slot:on>
        </x-swap>
    </div>

    <x-swap :checked="true">
        <x-slot:indeterminate class="btn btn-ghost">indeterminate</x-slot:indeterminate>
        <x-slot:off class="btn btn-neutral">Off</x-slot:off>
        <x-slot:on class="btn btn-primary">On</x-slot:on>
    </x-swap>

    <x-swap :checked="false">
        <x-slot:indeterminate class="btn btn-ghost">indeterminate</x-slot:indeterminate>
        <x-slot:off class="btn btn-neutral">Off</x-slot:off>
        <x-slot:on class="btn btn-primary">On</x-slot:on>
    </x-swap>
</div>

<h2>Animations</h2>

<x-swap rotate>
    <x-app.icon-moon />

    <x-slot:on>
        <x-app.icon-sun />
    </x-slot:on>
</x-swap>

<x-swap flip>
    <x-app.icon-moon />

    <x-slot:on>
        <x-app.icon-sun />
    </x-slot:on>
</x-swap>
