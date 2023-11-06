<p>You have a lot of freedom to decide how you want to layout your footer. <br>
    Refer to the
    <a href="https://daisyui.com/components/footer/" target="_blank" rel="noopener noreferrer">DaisyUI Documentation for the footer component</a>.
</p>

<h2>Basic footer</h2>

<div class="not-prose">
    <x-footer class="bg-neutral p-4 text-neutral-content">
        <nav>
            <x-footer-title>Cool Things</x-footer-title>
            @for ($i = 0; $i < 3; $i++)
                <a href="#">Item {{ $i }}</a>
            @endfor
        </nav>
        <nav>
            <x-footer-title>Stuff</x-footer-title>
            @for ($i = 0; $i < 4; $i++)
                <a href="#">Item {{ $i }}</a>
            @endfor
        </nav>
        <nav>
            <x-footer-title>Small Print</x-footer-title>
            @for ($i = 0; $i < 2; $i++)
                <a href="#">Item {{ $i }}</a>
            @endfor
        </nav>
    </x-footer>
</div>

<h2>Centred footer</h2>

<div class="not-prose">
    <x-footer
        center
        class="bg-base-300 p-4 text-base-content">
        <aside>
            <p>Copyright © 2023 - All right reserved by ACME Industries Ltd</p>
        </aside>
    </x-footer>
</div>
