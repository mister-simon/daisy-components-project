@php($types = collect(['neutral', 'primary', 'secondary', 'accent', 'info', 'success', 'warning', 'error']))

<h2>Basic tooltip / defaults</h2>

<div class="not-prose mt-8">
    <x-tooltip tip="Thanks for hovering">
        <x-button>Hover me</x-button>
    </x-tooltip>
</div>

<h2>Forced open tooltip</h2>

<div class="not-prose mt-8">
    <x-tooltip tip="No need to hover" force-open>
        <x-button>Hover me... Or don't.</x-button>
    </x-tooltip>
</div>

<h2>Tooltip positions</h2>

<div class="not-prose mt-8 grid w-max grid-cols-3">
    <x-tooltip
        tip="Top"
        top
        class="col-start-2">
        <x-button sm>▴</x-button>
    </x-tooltip>
    <x-tooltip
        tip="Left"
        left
        class="col-start-1">
        <x-button sm>◂</x-button>
    </x-tooltip>
    <x-tooltip
        tip="Right"
        right
        class="col-start-3">
        <x-button sm>▸</x-button>
    </x-tooltip>
    <x-tooltip
        tip="Bottom"
        bottom
        class="col-start-2">
        <x-button sm>▾</x-button>
    </x-tooltip>
</div>

<h2>Tooltip colours</h2>
<div class="not-prose mt-8 flex max-w-max flex-wrap gap-2">
    <x-tooltip tip="Default">
        <x-button>Default</x-button>
    </x-tooltip>
    <x-tooltip primary tip="Primary">
        <x-button primary>Primary</x-button>
    </x-tooltip>
    <x-tooltip secondary tip="Secondary">
        <x-button secondary>Secondary</x-button>
    </x-tooltip>
    <x-tooltip accent tip="Accent">
        <x-button accent>Accent</x-button>
    </x-tooltip>

    <x-tooltip info tip="Info">
        <x-button info>Info</x-button>
    </x-tooltip>
    <x-tooltip success tip="Success">
        <x-button success>Success</x-button>
    </x-tooltip>
    <x-tooltip warning tip="Warning">
        <x-button warning>Warning</x-button>
    </x-tooltip>
    <x-tooltip error tip="Error">
        <x-button error>Error</x-button>
    </x-tooltip>

    <x-tooltip :type="$type = $types->random()" tip="Set via :type attribute">
        <x-button :type="$type">Randomised colour</x-button>
    </x-tooltip>
</div>
