<p>
    <strong>Note:</strong> I'm not sure how much value this component adds, but it's here for completeness...<br>
    It might make more sense for your use-case to just use the stack classes directly.<br>
    See <a href="https://daisyui.com/components/stack/" target="_blank" rel="noopener noreferrer"> DaisyUI Mask documentation</a>.
</p>

<h2>Basic toast</h2>

<div class="not-prose" x-data="{ show: false }">
    <x-button
        x-on:click="show = true; setTimeout(() => show = false, 3000)">
        Toast with a couple of alerts
    </x-button>
    <x-toast class="z-50" x-show="show">
        <x-alert info>Something happened!</x-alert>
        <x-alert success>That's lovely.</x-alert>
    </x-toast>
</div>

<h2>Toast locations</h2>

<div
    class="not-prose grid w-max grid-cols-3 gap-4"
    x-data="{ timeout: null }"
    x-on:toast="
        clearTimeout(timeout);
        timeout = setTimeout(() => $dispatch('dismiss'), 3000);
    ">
    <x-button
        x-on:click="$dispatch('toast', 'ts')">
        Top Start
    </x-button>
    <x-button
        x-on:click="$dispatch('toast', 'tc')">
        Top Center
    </x-button>
    <x-button
        x-on:click="$dispatch('toast', 'te')">
        Top End
    </x-button>

    <x-button
        x-on:click="$dispatch('toast', 'ms')">
        Middle Start
    </x-button>
    <x-button
        x-on:click="$dispatch('toast', 'mc')">
        Middle Center
    </x-button>
    <x-button
        x-on:click="$dispatch('toast', 'me')">
        Middle End
    </x-button>

    <x-button
        x-on:click="$dispatch('toast', 'bs')">
        Bottom Start
    </x-button>
    <x-button
        x-on:click="$dispatch('toast', 'bc')">
        Bottom Center
    </x-button>
    <x-button
        x-on:click="$dispatch('toast', 'be')">
        Bottom End
    </x-button>

    <x-toast
        top
        start
        class="z-50"
        x-data="{ show: false }"
        x-show="show"
        x-on:toast.window="show = $event.detail === 'ts'"
        x-on:dismiss.window="show = false">
        <x-alert info>Top Start</x-alert>
    </x-toast>
    <x-toast
        top
        center
        class="z-50"
        x-data="{ show: false }"
        x-show="show"
        x-on:toast.window="show = $event.detail === 'tc'"
        x-on:dismiss.window="show = false">
        <x-alert info>Top Center</x-alert>
    </x-toast>
    <x-toast
        top
        end
        class="z-50"
        x-data="{ show: false }"
        x-show="show"
        x-on:toast.window="show = $event.detail === 'te'"
        x-on:dismiss.window="show = false">
        <x-alert info>Top End</x-alert>
    </x-toast>

    <x-toast
        middle
        start
        class="z-50"
        x-data="{ show: false }"
        x-show="show"
        x-on:toast.window="show = $event.detail === 'ms'"
        x-on:dismiss.window="show = false">
        <x-alert info>Middle Start</x-alert>
    </x-toast>
    <x-toast
        middle
        center
        class="z-50"
        x-data="{ show: false }"
        x-show="show"
        x-on:toast.window="show = $event.detail === 'mc'"
        x-on:dismiss.window="show = false">
        <x-alert info>Middle Center</x-alert>
    </x-toast>
    <x-toast
        middle
        end
        class="z-50"
        x-data="{ show: false }"
        x-show="show"
        x-on:toast.window="show = $event.detail === 'me'"
        x-on:dismiss.window="show = false">
        <x-alert info>Middle End</x-alert>
    </x-toast>

    <x-toast
        bottom
        start
        class="z-50"
        x-data="{ show: false }"
        x-show="show"
        x-on:toast.window="show = $event.detail === 'bs'"
        x-on:dismiss.window="show = false">
        <x-alert info>Bottom Start</x-alert>
    </x-toast>
    <x-toast
        bottom
        center
        class="z-50"
        x-data="{ show: false }"
        x-show="show"
        x-on:toast.window="show = $event.detail === 'bc'"
        x-on:dismiss.window="show = false">
        <x-alert info>Bottom Center</x-alert>
    </x-toast>
    <x-toast
        bottom
        end
        class="z-50"
        x-data="{ show: false }"
        x-show="show"
        x-on:toast.window="show = $event.detail === 'be'"
        x-on:dismiss.window="show = false">
        <x-alert info>Bottom End</x-alert>
    </x-toast>
</div>

<h2>Alpine powered toast stacks</h2>

{{-- You can make use of custom window events to power a stack of toasts. --}}
{{-- This implementation also adds an auto-timeout feature. --}}
{{-- To allow alpine to properly render the toasts the toast wrapper increments an id to use as a loop key. --}}
<div
    class="not-prose"
    x-data="{
        id: 0,
        timeout: 3000,
        toasts: [],
        addToast(toast) {
            console.log(toast);
            let id = this.id++;
            this.toasts.push({ id, ...toast });
            setTimeout(() => this.removeToast(id), toast.timeout || this.timeout);
        },
        removeToast(id) {
            const index = this.toasts.findIndex((toast) => toast.id === id);
            this.toasts.splice(index, 1);
        },
        init() {
            this.addToast({ type: 'alert-success', message: 'Something good happened!', timeout: 1600 });
            this.addToast({ type: 'alert-error', message: 'Oh no... Something silly also happened.', timeout: 4500 });
        }
    }"
    x-on:add-toast.window="addToast($event.detail)">
    <x-toast
        bottom
        end
        class="z-40 items-end justify-end">
        <template x-for="({ id, type, message }) in toasts">
            <x-alert
                class="w-min"
                x-bind:key="id"
                x-bind:class="type"
                x-text="message" />
        </template>
    </x-toast>
</div>

{{-- You can dispatch "add-toast" from any alpine component on your page. --}}

<form
    class="join flex-wrap items-end"
    x-data="{
        message: 'Mmmm, toast.',
        type: 'alert-success',
        timeout: 3000
    }"
    @submit.prevent="
        $dispatch(
            'add-toast',
            { type, message, timeout }
        )
    ">
    <x-form-control>
        <x-label
            text="Message"
            for="message" />
        <x-input
            bordered
            id="message"
            class="join-item"
            x-model="message" />
    </x-form-control>

    <x-form-control>
        <x-label
            text="Type"
            for="type" />
        <x-select
            :options="['default' => 'Default', 'alert-info' => 'Info', 'alert-success' => 'Success', 'alert-warning' => 'Warning', 'alert-error' => 'Error']"
            bordered
            id="type"
            class="join-item"
            x-model="type" />
    </x-form-control>

    <x-form-control>
        <x-label
            text="Timeout (ms)"
            for="timeout" />
        <x-input
            bordered
            type="number"
            min="500"
            id="timeout"
            class="join-item"
            x-model="timeout" />
    </x-form-control>

    <x-button
        success
        class="join-item">
        Pop more toast
    </x-button>
</form>

{{-- You can also preload the events from Laravel by dispatching events to the window after alpine's main init event. --}}
@php($messages = [['message' => 'Hello from laravel', 'type' => 'alert-info', 'timeout' => 1000], ['message' => 'Woohoo!', 'type' => 'alert-success', 'timeout' => 2000]])

@foreach ($messages as $message)
    <template x-init="$dispatch('add-toast', {
        message: '{{ $message['message'] }}',
        type: '{{ $message['type'] }}',
        timeout: {{ $message['timeout'] }},
    })"></template>
@endforeach

{{-- An alternate method of preloading messages to avoid dom pollution: --}}
<script>
    function addToast(toast) {
        window.dispatchEvent(
            new CustomEvent('add-toast', {
                'detail': toast
            })
        )
    }

    window.addEventListener(
        'alpine:initialized',
        () => {
            @foreach ($messages as $message)
                addToast(@json($message));
            @endforeach
        }
    );
</script>
