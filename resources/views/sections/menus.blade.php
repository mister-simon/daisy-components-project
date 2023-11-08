<h2>Basic menu</h2>

<div class="not-prose rounded-box max-w-max bg-base-200 p-4">
    {{-- Menu acts as a <ul> --}}
    <x-menu>
        <li><a href="#">Home</a></li>
        <li><a href="#">About</a></li>
        <li><a href="#">Services</a></li>
        <li><a href="#">Pricing</a></li>
        <li><a href="#">The Boop Zone</a></li>
    </x-menu>
</div>

<h2>Menu with titles</h2>

<div class="not-prose rounded-box max-w-max bg-base-200 p-4">
    <x-menu>
        <x-menu-title>Things</x-menu-title>
        <li><a href="#">About</a></li>
        <li><a href="#">Services</a></li>
        <li><a href="#">Pricing</a></li>
        <li><a href="#">The Boop Zone</a></li>
    </x-menu>
</div>

<h2>Menu with subsection titles</h2>

<div class="not-prose rounded-box max-w-max bg-base-200 p-4">
    <x-menu>
        <li>
            <x-menu-title tag="h3">Dank links</x-menu-title>
            <ul>
                <li><a href="#">About</a></li>
                <li><a href="#">Services</a></li>
            </ul>
        </li>
        <li>
            <x-menu-title tag="h3">Cap links</x-menu-title>
            <ul>
                <li><a href="#">Pricing</a></li>
                <li><a href="#">The Boop Zone</a></li>
            </ul>
        </li>
    </x-menu>
</div>

<h2>Other styles</h2>
<p>
    There's lots of ways to design your menu using standard HTML, which isn't repeated here.<br>
    Check out some of the other examples in the <a href="https://daisyui.com/components/menu/" target="_blank" rel="noopener noreferrer"> DaisyUI Menu documentation</a>.
</p>
