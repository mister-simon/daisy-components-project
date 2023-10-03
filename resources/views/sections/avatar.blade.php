<h2>Avatars</h2>

<h3>Basic avatar</h3>

<div class="not-prose">
    <x-avatar class="w-20">
        <img src="https://placehold.co/400" />
    </x-avatar>
</div>

<h3>Avatar with mask</h3>

<div class="not-prose">
    <x-avatar class="w-20">
        <x-slot:mask class="mask mask-hexagon">
            <img src="https://placehold.co/400" />
        </x-slot:mask>
    </x-avatar>
</div>

<h3>Avatar with presence</h3>

<div class="not-prose">
    <x-avatar class="w-20" :online="true">
        <x-slot:mask class="mask mask-squircle">
            <img src="https://placehold.co/400" />
        </x-slot:mask>
    </x-avatar>
    <x-avatar class="w-20" :online="false">
        <x-slot:mask class="mask mask-squircle">
            <img src="https://placehold.co/400" />
        </x-slot:mask>
    </x-avatar>
</div>

<h3>Avatar with Placeholder</h3>

<div class="not-prose">
    <x-avatar>
        <x-slot:mask class="w-12 rounded-full bg-neutral-focus text-xl text-neutral-content">
            SW
        </x-slot:mask>
    </x-avatar>
</div>

<p class="text-sm">Note the width is being applied to the mask slot in this case</p>
