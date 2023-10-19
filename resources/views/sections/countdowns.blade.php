<h1>Countdowns</h1>

<h2>Basic static countdown</h2>

<x-countdown :count="30" />

<h2>Basic live countdown</h2>

{{-- Countdown will always initialise as an alpine component, exposing a "count" variable. --}}
<x-countdown
    :count="10"
    x-init="setInterval(() => count = count === 0 ? 99 : count - 1, 1000)" />

<h2>Static using child components</h2>

{{-- You may use countdown-item sub-components for cases where that may be useful. --}}
<p>
    Today I am
    <x-countdown>
        <x-countdown-item :count="30" /> - <x-countdown-item :count="35" />
    </x-countdown>
    years old.
</p>

<h2>Startup effect</h2>
{{-- Without the timeout it seems that the countdown is rendered before the cloak is removed. --}}
{{-- Thereby preventing the intended startup effect. --}}
{{-- NOTE: [x-cloak] will need to be added to your styles to take effect. --}}
<p>
    Today I am
    <x-countdown
        :count="0"
        x-init="setTimeout(() => count = 30, 0)"
        x-cloak />
    -
    <x-countdown
        :count="99"
        x-init="setTimeout(() => count = 35, 0)"
        x-cloak />
    <span x-data x-show="false">30 - 35</span>
    years old.
</p>
<div class="text-base-200-content not-prose rounded-box inline-block space-y-2 bg-base-200 px-4 py-2 text-sm">
    <p>Note, in the above example noscript users will just see 00 - 99.</p>
    <p>So I recommend adding <code>x-cloak</code> on the countdown components.</p>
    <p>You can then add a correct static version via <code>&lt;noscript&gt;</code>, or using <code>&lt;span x-data x-show="false"&gt;</code></p>
</div>

<h2>Live countdown with child component</h2>

{{-- You can override the default alpine interactions to have greater control --}}
<x-countdown
    x-data="{ countdown: 10 }"
    x-init="setInterval(() => countdown = countdown === 0 ? 99 : countdown - 1, 1000)">
    <x-countdown-item
        :count="10"
        x-model="countdown" />
</x-countdown>

<h2>Countdown to display time</h2>

{{-- This example combines many of the features above --}}
<x-countdown
    class="font-mono text-2xl"
    x-data="{
        time: [],
        updateTime() {
            const d = new Date;
            this.time = [
                d.getHours(),
                d.getMinutes(),
                d.getSeconds(),
            ];
        }
    }"
    x-init="updateTime();
    setInterval(() => updateTime(), 1000);">
    <x-countdown-item :count="12" x-model="time[0]" />:<x-countdown-item :count="30" x-model="time[1]" />:<x-countdown-item :count="30" x-model="time[2]" />
</x-countdown>
