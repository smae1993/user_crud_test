<div class="flex  justify-center p-4">


    <div class="max-w-sm rounded overflow-hidden shadow-lg  p-8 mt-4 bg-stone-200">
        <h4 class="font-bold mb-8">Add User</h4>
        <form wire:submit="save">
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2">
                    Name
                </label>
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" wire:model="form.name" type="text" placeholder="Name">

                <div>
                    @error('form.name') <span class="error">{{ $message }}</span> @enderror
                </div>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2">
                    Family
                </label>
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" wire:model="form.family" type="text" placeholder="Family">

                <div>
                    @error('form.family') <span class="error">{{ $message }}</span> @enderror
                </div>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2">
                    Mobile
                </label>
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" wire:model="form.mobile" type="text" placeholder="Mobile">

                <div>
                    @error('form.mobile') <span class="error">{{ $message }}</span> @enderror
                </div>
            </div>

            <div class="flex justify-center mt-4">
                <button class="bg-stone-400 hover:bg-stone-800 text-white font-bold py-2 px-4 mx-4 rounded"
                    type="submit">Save</button>

                    <a class="bg-red-400 hover:bg-stone-800 text-white font-bold py-2 px-4 mx-4 rounded" href="/" wire:navigate >Back</a>
            </div>
        </form>
    </div>
</div>
