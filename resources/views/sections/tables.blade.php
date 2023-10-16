<h1>Stats</h1>

<h2>Basic table</h2>

<div class="not-prose">
    <div class="overflow-x-auto">
        <x-table>
            <x-app.table-example-inner />
        </x-table>
    </div>
</div>

<h2>Table with active row</h2>

<div class="not-prose">
    <div class="overflow-x-auto">
        <x-table>
            <x-app.table-example-inner :rows="2">
                <tr class="active">
                    <th>0</th>
                    <td>Miss Brooke Beier Jr.</td>
                    <td>Medical Equipment Repairer</td>
                    <td>Feest-Wyman</td>
                    <td>1 week ago</td>
                    <td class="bg-accent bg-opacity-70 text-accent-content">accent</td>
                </tr>
            </x-app.table-example-inner>
        </x-table>
    </div>
</div>

<h2>Hover table</h2>

<div class="not-prose">
    <div class="overflow-x-auto">
        <x-table>
            <x-app.table-example-inner class="hover" />
        </x-table>
    </div>
</div>

<h2>Zebra table</h2>

<div class="not-prose">
    <div class="overflow-x-auto">
        <x-table zebra>
            <x-app.table-example-inner :rows="4" />
        </x-table>
    </div>
</div>

<h2>Visual table</h2>

<div class="not-prose">
    <div class="overflow-x-auto">
        <x-table zebra>
            <x-app.table-visual-example-inner :rows="4" />
        </x-table>
    </div>
</div>

<h2>Pinned row / col</h2>

<div class="not-prose">
    <div class="max-h-96 max-w-sm overflow-x-auto">
        <x-table pin-rows pin-cols>
            <x-app.table-example-inner :rows="20" />
        </x-table>
    </div>
</div>

<h2>Sizes</h2>

<div class="not-prose grid gap-4 md:grid-cols-2 lg:grid-cols-4">
    <div class="overflow-x-auto border">
        <x-table lg>
            <x-app.table-example-inner />
        </x-table>
    </div>
    <div class="overflow-x-auto border">
        <x-table md>
            <x-app.table-example-inner />
        </x-table>
    </div>
    <div class="overflow-x-auto border">
        <x-table sm>
            <x-app.table-example-inner />
        </x-table>
    </div>
    <div class="overflow-x-auto border">
        <x-table xs>
            <x-app.table-example-inner />
        </x-table>
    </div>
</div>
