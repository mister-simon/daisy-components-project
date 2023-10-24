<!-- head -->
<thead x-data>
    <tr>
        <th>
            <label>
                <input type="checkbox" class="checkbox" @click="$dispatch('select-all', $el.checked)" />
            </label>
        </th>
        <th>Name</th>
        <th>Job</th>
        <th>Favorite Color</th>
        <th>Actions</th>
    </tr>
</thead>
<!-- body -->
<tbody x-data>
    @for ($i = 0; $i < 4; $i++)
        <tr>
            <th>
                <label>
                    <input type="checkbox" class="checkbox" @select-all.window="$el.checked = $event.detail" />
                </label>
            </th>
            <td>
                <div class="flex items-center space-x-3">
                    <div class="avatar">
                        <div class="mask mask-squircle h-12 w-12">
                            <img src="https://placekitten.com/{{ rand(290, 300) }}" alt="Avatar Tailwind CSS Component" />
                        </div>
                    </div>
                    <div>
                        <div class="font-bold">Name Namerton</div>
                        <div class="text-sm opacity-50">Placeland</div>
                    </div>
                </div>
            </td>
            <td>
                Company Existingness
                <br />
                <span class="badge badge-ghost badge-sm">Company Existence Technician</span>
            </td>
            <td>Purple</td>
            <th>
                <a href="#" class="btn btn-ghost btn-xs">Details</a>
            </th>
        </tr>
    @endfor
</tbody>
<!-- foot -->
<tfoot>
    <tr>
        <th></th>
        <th>Name</th>
        <th>Job</th>
        <th>Favorite Color</th>
        <th></th>
    </tr>
</tfoot>
