<h1>Progress</h1>

<h2>Basic radial progress</h2>

{{-- Use the slot to display content in the centre of the radial component. --}}
<div class="not-prose text-neutral">
    <x-radial-progress value="80" aria-label="80%" />
    <x-radial-progress value="80">80%</x-radial-progress>
</div>

<h2>Alter size + thickness</h2>

{{-- Value, size, and thickness, are applied via css variables. --}}
<div class="not-prose text-neutral">
    <x-radial-progress
        value="80"
        size="10rem"
        thickness="2rem" />
</div>

<h2>Styling</h2>

{{-- Any text / bg styles can be applied to the radial progress component. --}}
{{-- Text colour applies to the radial curve as well as inner text. --}}
<div class="not-prose inline-grid grid-cols-8 place-items-center gap-4">
    @foreach (['text-neutral', 'text-primary', 'text-secondary', 'text-accent', 'text-info', 'text-success', 'text-warning', 'text-error', 'border-8 border-neutral bg-neutral text-neutral-content', 'border-8 border-primary bg-primary text-primary-content', 'border-8 border-secondary bg-secondary text-secondary-content', 'border-8 border-accent bg-accent text-accent-content', 'border-8 border-info bg-info text-info-content', 'border-8 border-success bg-success text-success-content', 'border-8 border-warning bg-warning text-warning-content', 'border-8 border-error bg-error text-error-content'] as $classes)
        <x-radial-progress
            value="90"
            :class="$classes">
            90
        </x-radial-progress>
    @endforeach
</div>

<h2>Updating with alpine</h2>

{{-- Everything can be hooked into via alpine in a greater or lesser extent. --}}
{{-- However, everything can be overriden to give full control. --}}
<div
    class="not-prose text-neutral"
    x-data="{ progress: 50 }"
    x-init="setInterval(() => progress = (progress + .1) % 100, 10)">
    <x-radial-progress
        x-model="progress"
        x-text="Math.round(value) + '%'" />

    <x-radial-progress
        class="text-xs"
        x-model="progress"
        x-text="Math.round(value)"
        x-bind:style="{
            '--value': value,
            '--size': Math.max(1, value * 0.05) + 'rem',
            '--thickness': Math.max(2, value * 0.10) + 'px',
        }" />
</div>
