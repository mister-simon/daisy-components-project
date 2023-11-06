<p>You have a lot of freedom to decide how you want to layout your hero.<br>
    Refer to the
    <a href="https://daisyui.com/components/hero/" target="_blank" rel="noopener noreferrer">DaisyUI Documentation for the Hero component</a>.
</p>

<h2>Basic hero</h2>

<x-hero class="min-h-[50vh]">
    <div class="max-w-md">This hero content is very good. Very exciting.</div>
</x-hero>

<h2>Hero with overlay</h2>

<div class="space-y-8">
    <x-hero overlay class="min-h-[50vh] text-white">
        <div class="max-w-md">Your content can go in the middle of the hero area. That's pretty cool.</div>
    </x-hero>

    <x-hero class="min-h-[50vh]">
        <x-slot:overlay class="bg-opacity-20"></x-slot:overlay>
        <div class="max-w-md">You can use the overlay slot to restyle the overlay element. In this case we have altered the background opacity to lighten it.</div>
    </x-hero>
</div>

<h2>Hero with image</h2>

<x-hero
    overlay
    class="min-h-[50vh] bg-[url(https://placekitten.com/800)] text-center text-neutral-content">
    <x-slot:overlay class="bg-opacity-75"></x-slot:overlay>
    <div class="max-w-md">
        <h3 class="text-5xl text-neutral-content">Example Hero Title</h3>
        <p>Yeah, this is the website. Don't worry about it.</p>
    </div>
</x-hero>
