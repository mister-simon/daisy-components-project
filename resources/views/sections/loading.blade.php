<h1>Loading</h1>

<h2>Spinner</h2>

<div class="flex items-center gap-2">
    <x-loading xs />
    <x-loading sm />
    <x-loading />
    <x-loading lg />
</div>

<h2>Dots</h2>

<div class="flex items-center gap-2">
    <x-loading dots xs />
    <x-loading dots sm />
    <x-loading dots />
    <x-loading dots lg />
</div>

<h2>Ring</h2>

<div class="flex items-center gap-2">
    <x-loading ring xs />
    <x-loading ring sm />
    <x-loading ring />
    <x-loading ring lg />
</div>

<h2>Ball</h2>

<div class="flex items-center gap-2">
    <x-loading ball xs />
    <x-loading ball sm />
    <x-loading ball />
    <x-loading ball lg />
</div>

<h2>Bars</h2>

<div class="flex items-center gap-2">
    <x-loading bars xs />
    <x-loading bars sm />
    <x-loading bars />
    <x-loading bars lg />
</div>

<h2>Infinity</h2>

<div class="flex items-center gap-2">
    <x-loading infinity xs />
    <x-loading infinity sm />
    <x-loading infinity />
    <x-loading infinity lg />
</div>

<h2>Colours</h2>

<p>Apply colours using <code>text-...</code> tailwind classes.</p>

<div class="flex items-center gap-2">
    @foreach (['', 'text-neutral', 'text-primary', 'text-secondary', 'text-accent', 'text-success', 'text-info', 'text-warning', 'text-error'] as $style)
        <x-loading :class="$style" />
    @endforeach
</div>
