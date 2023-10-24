@php($types = collect(['neutral', 'primary', 'secondary', 'accent', 'info', 'success', 'warning', 'error']))
<h1>Progress</h1>

<h2>Styles</h2>

<div class="flex flex-col gap-2">
    <x-progress class="max-w-sm" max="100" value="10" />
    <x-progress class="max-w-sm" max="100" value="20" neutral />
    <x-progress class="max-w-sm" max="100" value="30" primary />
    <x-progress class="max-w-sm" max="100" value="40" secondary />
    <x-progress class="max-w-sm" max="100" value="50" accent />
    <x-progress class="max-w-sm" max="100" value="60" info />
    <x-progress class="max-w-sm" max="100" value="70" success />
    <x-progress class="max-w-sm" max="100" value="80" warning />
    <x-progress class="max-w-sm" max="100" value="90" error />
    <x-progress class="max-w-sm" max="100" value="100" :type="$types->random()" />
</div>

<h2>Indeterminate value</h2>

<x-progress
    class="max-w-sm"
    info />

<h2>Alpine updating value</h2>

<x-progress
    class="max-w-sm"
    x-data="{ value: 0 }"
    x-init="setInterval(() => value = (value + .1) % 100, 10)"
    max="100"
    x-model="value"
    success />
