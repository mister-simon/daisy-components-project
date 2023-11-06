<p>
    <strong>Note:</strong> I'm not sure how much value this component adds, but it's here for completeness...<br>
    It might make more sense for your use-case to just use the join classes directly.<br>
    See <a href="https://daisyui.com/components/join/" target="_blank" rel="noopener noreferrer"> DaisyUI Join documentation</a>.
</p>

<h2>Join directions</h2>

{{-- Note: You still need to mark "join-item" where appropriate. --}}
<div class="flex flex-col items-start gap-4">
    <x-join>
        @for ($i = 1; $i <= 3; $i++)
            <x-button class="join-item">Button {{ $i }}</x-button>
        @endfor
    </x-join>

    <x-join horizontal>
        @for ($i = 1; $i <= 3; $i++)
            <x-button class="join-item">Button {{ $i }}</x-button>
        @endfor
    </x-join>

    <x-join vertical>
        @for ($i = 1; $i <= 3; $i++)
            <x-button class="join-item">Button {{ $i }}</x-button>
        @endfor
    </x-join>
</div>

<h2>Responsive joins</h2>

<x-join vertical class="md:join-horizontal xl:join-vertical">
    <x-button class="join-item">Vertical by default</x-button>
    <x-button class="join-item">Horizontal at md</x-button>
    <x-button class="join-item">Vertical again at xl</x-button>
</x-join>
