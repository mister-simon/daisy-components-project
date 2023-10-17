<h1>Alerts</h1>

<div class="space-y-2">
    <x-alert>This is a basic alert</x-alert>
    <x-alert info>This is an info alert</x-alert>
    <x-alert success>This is a successful alert</x-alert>
    <x-alert warning>This is your last warning</x-alert>
    <x-alert error>Something went wrong</x-alert>
</div>

<h2>Alerts with custom icon</h2>

<div class="space-y-2">
    <x-alert>
        <x-slot:icon>
            <span class="inline-flex h-6 w-6 items-center justify-center leading-4">💥</span>
        </x-slot:icon>
        Kapow! The examples above have 1.5rem square svgs, but the icons could be anything really.
    </x-alert>
</div>

<h2>Auto-dismiss Alerts</h2>

<div class="flex h-36 flex-col gap-20 overflow-auto bg-neutral p-8 text-neutral-content">
    <x-alert auto-dismiss="4000">I will disappear in 4 seconds</x-alert>
    <x-alert info auto-dismiss="5000">I will disappear in 5 seconds</x-alert>
    <x-alert success auto-dismiss="6000">I will disappear in 6 seconds</x-alert>
    <x-alert warning auto-dismiss="7000">I will disappear in 7 seconds</x-alert>
    <x-alert error auto-dismiss="8000">I will disappear in 8 seconds</x-alert>
    <p>The above alerts will auto-dismiss. They might have already gone.</p>
</div>

<h2>Auto-dismiss Alerts (dismiss after visible, requires <a href="https://alpinejs.dev/plugins/intersect" target="_blank" rel="noopener noreferrer">Alpine Intersect</a>)</h2>

<div class="flex h-36 flex-col gap-20 overflow-auto bg-neutral p-8 text-neutral-content">
    <p>Scroll down to reveal alerts. Each will dismiss after a set time</p>

    <x-alert auto-dismiss="1000" dismiss-intersect>I will disappear 1 seconds after becoming fully visible</x-alert>
    <x-alert info auto-dismiss="2000" dismiss-intersect>I will disappear 2 seconds after becoming fully visible</x-alert>
    <x-alert success auto-dismiss="3000" dismiss-intersect>I will disappear 3 seconds after becoming fully visible</x-alert>
    <x-alert warning auto-dismiss="4000" dismiss-intersect>I will disappear 4 seconds after becoming fully visible</x-alert>
    <x-alert error auto-dismiss="5000" dismiss-intersect>I will disappear 5 seconds after becoming fully visible</x-alert>
</div>

<h2>Dismissable Alerts</h2>

<div class="space-y-2">
    <x-alert dismissable info>This is a basic dismissable alert</x-alert>
    <x-alert dismissable success x-transition.duration.1000ms="">This is a dismissable alert with a transition</x-alert>
</div>

<h2>Dismissable Alerts / Custom Action</h2>

<div class="space-y-2">
    <x-alert warning dismissable x-transition="">
        This is an alert with custom buttons
        <x-slot:action>
            <x-button @click="alert('Boop!')" primary sm class="shadow-md">Alert</x-button>
            <x-button @click="dismissed=true" sm>Close</x-button>
        </x-slot:action>
    </x-alert>
</div>
