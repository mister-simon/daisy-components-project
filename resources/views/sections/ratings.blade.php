<h1>Ratings</h1>

<h2>Basic rating</h2>

<div class="not-prose">
    <x-rating name="basic" />
</div>

<h2>Rating with hidden 0 value option</h2>

<div class="not-prose">
    <x-rating
        name="hidden"
        hidden />
</div>

<h2>Checked option</h2>

<div class="not-prose flex flex-col justify-start gap-4">
    <x-rating
        name="checked"
        checked="2" />

    {{-- Negative margin is applied to account for the width of the hidden 0 input --}}
    <x-rating
        name="checked"
        checked="0"
        hidden
        class="-ml-2" />
</div>

<h2>Sizes</h2>

<div class="not-prose rounded-box flex flex-col items-start gap-4">
    <x-rating lg name="size_lg" />
    <x-rating md name="size_md" />
    <x-rating sm name="size_sm" />
    <x-rating xs name="size_xs" />
</div>

<h2>Colours</h2>

<div class="not-prose flex flex-col gap-2">
    {{-- Use arbitrary selectors to style child elements --}}
    <x-rating
        name="colours"
        class="[&>input]:bg-info" />

    {{-- Use the rating slot to add classes and other attributes directly --}}
    <x-rating name="colours">
        <x-slot:rating class="bg-info" x-model="rating"></x-slot:rating>
    </x-rating>
</div>

<h2>Custom item classes</h2>

{{-- By default the rating classes will be set to "mask mask-star-2"... --}}
{{-- You may override rating classes via the rating component, to set a custom mask etc. --}}
{{-- If you want to set classes via the rating slot you should empty the rating-classes attribute. --}}
<div class="not-prose flex flex-col gap-2">
    <x-rating
        name="custom_classes"
        class="gap-1"
        rating-classes="mask mask-heart" />

    <x-rating
        name="custom_classes_2"
        class="gap-1"
        rating-classes="">
        <x-slot:rating class="mask mask-diamond"></x-slot:rating>
    </x-rating>
</div>

<h2>Custom items</h2>

{{-- The default slot can be used to create fully custom rating options. --}}
<div class="not-prose rounded-box flex w-min items-center">
    <x-rating class="gap-1 drop-shadow-sm">
        <input
            type="radio"
            name="custom_items"
            value="0"
            class="mask mask-hexagon bg-teal-900">
        <input
            type="radio"
            name="custom_items"
            value="1"
            class="mask mask-hexagon-2 bg-teal-700">
        <input
            type="radio"
            name="custom_items"
            value="2"
            class="mask mask-hexagon bg-teal-500"
            checked>
        <input
            type="radio"
            name="custom_items"
            value="3"
            class="mask mask-hexagon-2 bg-teal-700">
        <input
            type="radio"
            name="custom_items"
            value="4"
            class="mask mask-hexagon bg-teal-900">
    </x-rating>
</div>

<h2>Half ratings</h2>

<div class="not-prose">
    <x-rating half name="halves" />
</div>

<h2>Ratings out of x</h2>

<div class="not-prose flex w-min flex-col gap-2">
    @for ($i = 1; $i < 10; $i++)
        <x-rating
            :max="$i"
            :name="'max' . $i"
            :checked="$i / 2"
            half
            hidden
            class="-ml-2" />
    @endfor
</div>

<h2>Ratings with alpine</h2>

<div
    class="not-prose w-min text-center"
    x-data="{ rating: '3' }">

    {{-- Alpine attributes can be applied to the scoped rating slot --}}
    <x-rating
        max="5"
        hidden
        name="alpine"
        class="-ml-2">
        <x-slot:rating
            class="bg-green-500"
            x-model="rating">
        </x-slot:rating>
    </x-rating>

    {{-- Setting x-model on the rating component (rather than on the scoped rating slot) --}}
    {{-- will actually apply x-model to the generated inner radio buttons --}}
    <x-rating
        max="5"
        hidden
        name="alpine2"
        class="-ml-2"
        x-model="rating" />

    <p x-text="`${rating} / 5`" class="-mt-2 text-2xl"></p>
</div>
