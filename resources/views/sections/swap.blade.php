<h2>Swap</h2>

<h3>Basic swap</h3>

<div class="flex flex-col items-start gap-4">

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

    <x-swap>
        <x-slot:off class="btn btn-primary btn-outline">Inactive</x-slot:off>
        <x-slot:on class="btn btn-primary btn-outline btn-active">Active</x-slot:on>
    </x-swap>
</div>

<h3>States</h3>

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

<h3>Animations</h3>

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
