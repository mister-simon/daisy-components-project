<p>
    <strong>Note:</strong> I'm not sure how much value this component adds, but it's here for completeness...<br>
    It might make more sense for your use-case to just use the stack classes directly.<br>
    See <a href="https://daisyui.com/components/stack/" target="_blank" rel="noopener noreferrer"> DaisyUI Mask documentation</a>.
</p>

<h2>Basic stack</h2>

<x-stack>
    @for ($i = 0; $i < 3; $i++)
        <x-card compact bordered class="bg-base-100 shadow">
            <div>Hello {{ $i }}</div>
        </x-card>
    @endfor
</x-stack>

<h2>Dismissable stack</h2>

{{-- Note: I'm not entirely happy with this implementation... --}}
{{-- I would prefer to use x-on:transitionend, but there are some odd barriers to that approach --}}
{{-- Since the daisy "stack" class doesn't seem to apply transforms via tailwind variables --}}
{{-- and does so with higher specificity. --}}
{{-- Anyway... This does work and it's something to revisit or for someone to help solving. --}}
<x-stack>
    @for ($i = 0; $i < 5; $i++)
        <x-card
            compact
            bordered
            class="aspect-video w-80 bg-base-100 shadow transition-transform"
            x-data="{
                show: true,
                hide() {
                    this.show = false;
                    setTimeout(() => this.$el.remove(), 150);
                }
            }"
            x-transition.duration.150ms=""
            x-show="show"
            x-on:click="hide">
            <div>Click to dismiss {{ $i }}</div>
        </x-card>
    @endfor
</x-stack>
