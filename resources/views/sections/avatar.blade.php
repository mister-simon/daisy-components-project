<h1>Avatars</h1>

<h2>Basic avatar</h2>

<div class="not-prose">
    <x-avatar class="w-20">
        <img src="https://placehold.co/400" />
    </x-avatar>
</div>

<h2>Avatar with mask</h2>

<div class="not-prose">
    <x-avatar class="w-20">
        <x-slot:mask class="mask mask-hexagon">
            <img src="https://placehold.co/400" />
        </x-slot:mask>
    </x-avatar>
</div>

<h2>Avatar with presence</h2>

<div class="not-prose">
    <x-avatar class="w-20" :online="true">
        <x-slot:mask class="mask mask-squircle">
            <img src="https://placehold.co/400" />
        </x-slot:mask> arst
    </x-avatar>
    <x-avatar class="w-20" :online="false">
        <x-slot:mask class="mask mask-squircle">
            <img src="https://placehold.co/400" />
        </x-slot:mask>
    </x-avatar>
</div>

<h2>Avatar with ring</h2>

<div class="not-prose">
    <x-avatar class="w-20">
        <x-slot:mask class="rounded-full ring ring-primary ring-offset-2 ring-offset-base-100">
            <img src="https://placehold.co/400" />
        </x-slot:mask>
    </x-avatar>
</div>

<h2>Avatar with Placeholder</h2>

<div class="not-prose">
    <x-avatar>
        <x-slot:mask class="w-12 rounded-full bg-neutral-focus text-xl text-neutral-content">
            SW
        </x-slot:mask>
    </x-avatar>
</div>

<p class="text-sm">Note the width is being applied to the mask slot in this case</p>

<h2>Grouped avatars</h2>

<div class="not-prose">
    <div class="avatar-group -space-x-6">
        @for ($i = 0; $i < 5; $i++)
            <x-avatar>
                <x-slot:mask class="w-12">
                    <img src="https://placehold.co/400" />
                </x-slot:mask>
            </x-avatar>
        @endfor
        <x-avatar>
            <x-slot:mask class="w-12 bg-neutral-focus text-neutral-content">
                +99
            </x-slot:mask>
        </x-avatar>
    </div>
</div>
