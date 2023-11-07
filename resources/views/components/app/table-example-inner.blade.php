@props(['rows' => 3])
@php($colours = collect(['neutral', 'primary', 'secondary', 'accent', 'info', 'success', 'warning', 'error']))
<thead>
    <tr>
        <th></th>
        <th>Name</th>
        <th>Job</th>
        <th>Company</th>
        <th>Last Login</th>
        <th>Favourite Colour</th>
    </tr>
</thead>
<tbody>
    {{ $slot }}
    @foreach (\App\Models\User::factory($rows)->make() as $user)
        @php($colour = $colours->random())
        <tr {{ $attributes }}>
            <th>{{ $loop->iteration }}</th>
            <td>{{ $user->name }}</td>
            <td>{{ $user->job }}</td>
            <td>{{ $user->company }}</td>
            <td>{{ $user->last_login->diffForHumans() }}</td>
            <td>
                <div class="flex items-center gap-2">
                    {{ $colour }}
                    <x-badge :color="$colour" xs />
                </div>
            </td>
        </tr>
    @endforeach
</tbody>
