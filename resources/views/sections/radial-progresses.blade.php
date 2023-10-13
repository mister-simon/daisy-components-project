<h1>Progress</h1>

<h2>Basic radial progress</h2>

<div class="not-prose text-neutral">
    <x-radial-progress value="80" />
    <x-radial-progress value="80">80%</x-radial-progress>
</div>

<h2>Alter size + thickness</h2>

<div class="not-prose text-neutral">
    <x-radial-progress
        value="80"
        size="10rem"
        thickness="2rem" />
</div>

<h2>Styling</h2>

<p>Restyle radial progress bars with text / bg colour utilities.</p>

<div class="not-prose inline-grid grid-cols-8 place-items-center gap-4">
    <x-radial-progress
        value="90"
        class="text-neutral"
        x-text="value" />
    <x-radial-progress
        value="90"
        class="text-primary"
        x-text="value" />
    <x-radial-progress
        value="90"
        class="text-secondary"
        x-text="value" />
    <x-radial-progress
        value="90"
        class="text-accent"
        x-text="value" />
    <x-radial-progress
        value="90"
        class="text-info"
        x-text="value" />
    <x-radial-progress
        value="90"
        class="text-success"
        x-text="value" />
    <x-radial-progress
        value="90"
        class="text-warning"
        x-text="value" />
    <x-radial-progress
        value="90"
        class="text-error"
        x-text="value" />
    <x-radial-progress
        value="90"
        class="border-8 border-neutral bg-neutral text-neutral-content"
        x-text="value" />
    <x-radial-progress
        value="90"
        class="border-8 border-primary bg-primary text-primary-content"
        x-text="value" />
    <x-radial-progress
        value="90"
        class="border-8 border-secondary bg-secondary text-secondary-content"
        x-text="value" />
    <x-radial-progress
        value="90"
        class="border-8 border-accent bg-accent text-accent-content"
        x-text="value" />
    <x-radial-progress
        value="90"
        class="border-8 border-info bg-info text-info-content"
        x-text="value" />
    <x-radial-progress
        value="90"
        class="border-8 border-success bg-success text-success-content"
        x-text="value" />
    <x-radial-progress
        value="90"
        class="border-8 border-warning bg-warning text-warning-content"
        x-text="value" />
    <x-radial-progress
        value="90"
        class="border-8 border-error bg-error text-error-content"
        x-text="value" />
</div>
<h2>Updating with alpine</h2>

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
