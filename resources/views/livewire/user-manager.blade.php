<div class="flex flex-col justify-center p-4">

    <div>
        <a class="bg-stone-400 hover:bg-stone-800 text-white font-bold py-2 px-4 rounded" href="/createUser"
            wire:navigate>
            Add New User
        </a>
    </div>

    <div class="rounded overflow-hidden shadow-lg  p-8 mt-4 bg-stone-200">
        <table class="table table-auto w-full">
            <thead>
                <tr class="bg-stone-300 p-4 rounded">
                    <th>id</th>
                    <th>Name</th>
                    <th>Family</th>
                    <th>Mobile</th>
                    <th>Actions</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($users as $user)
                <tr>
                    <td>{{ $user->id }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->family }}</td>
                    <td>{{ $user->mobile }}</td>
                    <td>
                        <a href="{{ route('editUser', ['id' => $user->id]) }}">Edit</a>
                        <a class="text-red-500 mx-4"  wire:click='removeUser({{ $user->id }})' wire:confirm="Are you sure you want to delete this user?">Delete</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>

        <div class="mt-8">
            {{ $users->links() }}
        </div>
    </div>



</div>
