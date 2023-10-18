<h1>Ratings</h1>

<h2>Basic rating</h2>

<div class="not-prose">
    <x-rating name="basic" />
</div>

<h2>Rating with hidden 0 value option</h2>

<div class="not-prose">
    <x-rating name="hidden" hidden />
</div>

<h2>Checked option</h2>

<div class="not-prose flex flex-col justify-start gap-4">
    <x-rating
        name="checked"
        checked="2" />
    <x-rating
        name="checked"
        checked="0"
        hidden />
</div>

<h2>Sizes</h2>

<div class="not-prose rounded-box flex flex-col items-start gap-4">
    <x-rating lg name="size_lg" />
    <x-rating md name="size_md" />
    <x-rating sm name="size_sm" />
    <x-rating xs name="size_xs" />
</div>

<h2>Colours</h2>

<div class="not-prose">
    <x-rating
        name="colours"
        class="[&>input]:bg-info" />
</div>

<h2>Custom item classes</h2>

<div class="not-prose">
    <x-rating
        name="custom_classes"
        class="gap-1"
        rating-classes="mask mask-heart" />
</div>

<h2>Custom items</h2>

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
