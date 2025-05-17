<div class="flex justify-center p-4">


    <div class="rounded overflow-hidden shadow-lg  p-8 mt-8 bg-stone-200">
        <table class="table table-auto w-full p-8 ">

            <thead class="bg-stone-400 m-4 rounded">
                <tr>
                    <th>id</th>
                    <th>Name</th>
                    <th>Family</th>
                    <th>Mobile</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($users as $user)
                    <tr>
                        <td>{{ $user->id }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->family }}</td>
                        <td>{{ $user->mobile }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <div class="mt-8">
            {{ $users->links() }}
        </div>
    </div>



</div>
