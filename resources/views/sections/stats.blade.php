<h1>Stats</h1>

<h2>Basic stats</h2>

<div class="not-prose flex flex-col items-start gap-4">
    {{-- Pass attributes directly to the stats component --}}
    <x-stats
        class="border"
        title="One single stat can be displayed"
        value="50 / 50"
        description="Might be useful?" />

    {{-- Or nest stat components within the stats to create adjoined items --}}
    {{-- You may still pass attributes to individual stat components --}}
    {{-- Or you can make use of scoped slots for more control --}}
    <x-stats class="border">
        <x-stat
            title="Amount of ice cream"
            value="10,000 litres"
            description="Oh, wow that's a lot." />

        <x-stat>
            <x-slot:title>Ice Cream Consumed</x-slot:title>
            <x-slot:value>1 Litre</x-slot:value>
            <x-slot:description>That's pretty doable.</x-slot:description>
        </x-stat>
    </x-stats>
</div>

<h2>Vertical stats</h2>

<div class="not-prose">
    <x-stats vertical>
        <x-stat
            title="Verticality"
            value="100%"
            description="So vertical?!" />

        <x-stat
            title="Number of stats on this page"
            value="Several"
            description="Suitably unspecific" />
    </x-stats>
</div>

<h2>Stats with additional slots / styles</h2>

<div class="not-prose">
    <x-stats class="place-items-start">
        <x-stat
            title="Time spent online"
            value="4043 hours"
            description="You didn't want to know did you.">
            <x-slot:figure>
                <x-avatar online class="w-16">
                    <img src="https://placekitten.com/300" alt="" class="rounded-full" />
                </x-avatar>
            </x-slot:figure>
        </x-stat>
        <x-stat
            title="Time spent offline"
            value="214 hours"
            description="Priorities hahah">
            <x-slot:figure>
                <x-avatar :online="false" class="w-16">
                    <img src="https://placekitten.com/100" alt="" class="rounded-full" />
                </x-avatar>
            </x-slot:figure>
            <x-slot:actions>
                <x-button sm>Log Out?</x-button>
            </x-slot:actions>
        </x-stat>
    </x-stats>
</div>

<h2>Responsive styles</h2>

<div class="not-prose">
    <x-stats vertical class="md:stats-horizontal">
        <x-stat
            title="Verticality"
            value="50%"
            description="Only vertical at mobile sizes" />

        <x-stat
            title="Direction after md breakpoint"
            value="Horizontal"
            description="That's at about 768px" />
    </x-stats>
</div>

<h2>Other styles</h2>

<div class="not-prose">
    <x-stats vertical class="bg-secondary text-secondary-content md:stats-horizontal">
        <x-stat
            title="Title"
            value="Value"
            description="Description" />

        <x-stat class="bg-primary text-primary-content">
            <x-slot:title class="text-primary-content/60">
                Title with custom colour
            </x-slot:title>
            <x-slot:value>Cool value</x-slot:value>
            <x-slot:description>Descriptiveness</x-slot:description>
        </x-stat>

        <x-stat
            title="These colours were"
            value=" set on the "
            description="stats component" />
    </x-stats>
</div>

<h2>Default slot</h2>

<div class="not-prose">
    <x-stats class="border">
        <x-stat
            title="Verticality"
            value="50%"
            description="Only vertical at mobile sizes" />

        <x-stat class="place-content-center">
            <p>This is using the default slot.</p>
            <p>Just in case you happen to need that.</p>
        </x-stat>

        <x-stat
            title="Direction after md breakpoint"
            value="Horizontal"
            description="That's at about 768px" />
    </x-stats>
</div>

<h2>Stats with alpine</h2>

<x-stats
    class="border"
    x-data="{
        stat: null,
        getTime() {
            this.stat = (new Date()).toLocaleTimeString();
        },
        init() {
            this.getTime();
            setInterval(() => this.getTime(), 500);
        }
    }">
    <x-stat>
        <x-slot:title x-text="'Your Current Time'">Time in UTC</x-slot:title>
        <x-slot:value x-text="stat">{{ now()->toTimeString() }}</x-slot:value>
    </x-stat>
</x-stats>
