@php($types = collect(['neutral', 'primary', 'secondary', 'accent', 'info', 'success', 'warning', 'error']))
@php($fakeTimes = [now()->subHour(), now()->subMinute(), now()->subSecond()])

<h2>Basic chat bubble</h2>

<div class="not-prose rounded-box max-w-2xl bg-base-200 p-8">
    <x-chat>Hello there?</x-chat>
    <x-chat end>Oh, hi. I thought I was the only one here.</x-chat>
    <x-chat>Oh! I hope you weren't alone here too long.</x-chat>
</div>

<h2>Full chat bubble</h2>

<div class="not-prose rounded-box max-w-2xl bg-base-200 p-8">
    <x-chat>
        <x-slot:image>
            <x-avatar class="w-10">
                <img src="https://placekitten.com/150" alt="" class="rounded-full" />
            </x-avatar>
        </x-slot:image>
        <x-slot:header>
            Someone
            <time
                datetime="{{ $fakeTimes[0]->toW3cString() }}"
                class="text-xs opacity-50">
                {{ $fakeTimes[0]->diffForHumans() }}
            </time>
        </x-slot:header>
        I was here.
        <x-slot:footer class="opacity-50">
            New
        </x-slot:footer>
    </x-chat>

    <x-chat end>
        <x-slot:image>
            <x-avatar class="w-10">
                <img src="https://placekitten.com/155" alt="" class="rounded-full" />
            </x-avatar>
        </x-slot:image>
        <x-slot:header>
            You
            <time
                datetime="{{ $fakeTimes[1]->toW3cString() }}"
                class="text-xs opacity-50">
                {{ $fakeTimes[1]->diffForHumans() }}
            </time>
        </x-slot:header>
        I'm here too.
        <x-slot:footer class="opacity-50">
            Seen
            <time
                datetime="{{ $fakeTimes[2]->toW3cString() }}"
                class="text-xs">
                {{ $fakeTimes[2]->diffForHumans() }}
            </time>
        </x-slot:footer>
    </x-chat>
</div>

<h2>Bubble colours</h2>

<div class="not-prose rounded-box max-w-2xl bg-base-200 p-8">
    <x-chat>Neutral</x-chat>
    <x-chat primary>Primary</x-chat>
    <x-chat secondary>Secondary</x-chat>
    <x-chat accent>Accent</x-chat>

    <x-chat info end>Info</x-chat>
    <x-chat success end>Success</x-chat>
    <x-chat warning end>Warning</x-chat>
    <x-chat error end>Error</x-chat>
    <x-chat :color="$types->random()">Set via :color</x-chat>
</div>

<h2>Bubble contents + additional styling</h2>

<div class="not-prose rounded-box max-w-2xl bg-base-200 p-8">
    <x-chat>If you need extra style options, you can handle that using:
        <pre><code>&lt;x-slot:bubble class="blah"&gt;</code></pre>
    </x-chat>
    <x-chat>
        <x-slot:bubble class="p-4">
            <img src="https://placekitten.com/200/100" alt="" class="rounded-lg">
        </x-slot:bubble>
    </x-chat>
</div>
