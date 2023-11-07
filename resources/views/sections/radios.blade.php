@php($types = collect(['neutral', 'primary', 'secondary', 'accent', 'info', 'success', 'warning', 'error']))

<h2>Basic radio</h2>

<div class="not-prose">
    <x-radio name="rad1o" checked />
    <x-radio name="rad1o" />
</div>

<h2>Disabled state</h2>

<div class="not-prose">
    <x-radio disabled />
    <x-radio disabled checked />
</div>

<h2>Label + form control</h2>

<div class="not-prose max-w-sm">
    <x-form-control>
        <x-label class="cursor-pointer">
            This is a cool radio
            <x-radio name="rad2o" checked />
        </x-label>
        <x-label class="cursor-pointer">
            This is another cool radio
            <x-radio name="rad2o" />
        </x-label>
    </x-form-control>
</div>

<h2>Sizes</h2>

<div class="not-prose">
    <x-radio lg name="rad3o" checked />
    <x-radio md name="rad3o" />
    <x-radio sm name="rad3o" />
    <x-radio xs name="rad3o" />
</div>

<h2>Colours</h2>

<div class="not-prose grid max-w-max grid-flow-col grid-rows-2 gap-2">
    <x-radio lg name="raddefaulto" />
    <x-radio lg name="raddefaulto" checked />

    <x-radio lg name="radprimaryo" primary />
    <x-radio lg name="radprimaryo" primary checked />

    <x-radio lg name="radsecondaryo" secondary />
    <x-radio lg name="radsecondaryo" secondary checked />

    <x-radio lg name="radaccento" accent />
    <x-radio lg name="radaccento" accent checked />

    <x-radio lg name="radinfoo" info />
    <x-radio lg name="radinfoo" info checked />

    <x-radio lg name="radsuccesso" success />
    <x-radio lg name="radsuccesso" success checked />

    <x-radio lg name="radwarningo" warning />
    <x-radio lg name="radwarningo" warning checked />

    <x-radio lg name="raderroro" error />
    <x-radio lg name="raderroro" error checked />

    <x-radio lg name="radrandomiseo" :color="$type = $types->random()" />
    <x-radio lg name="radrandomiseo" :color="$type" checked />
</div>
