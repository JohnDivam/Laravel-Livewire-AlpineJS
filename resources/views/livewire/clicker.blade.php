<div class="">
    @if(session('success')) 
        <span class="w-100 py-3 bg-green-300 rounded">{{ session('success') }}</span>
    @endif
    <form wire:submit="createNewUser" action="" class="p-5">
        <input type="text" wire:model="name" placeholder="name" class="block rounded border border-gray-100 px-3 py-1 mb-1">
        @error('name') <span class="text-red-500 text-xs">{{$message}}</span> @enderror

        <input type="text" wire:model="email" placeholder="email" class="block rounded border border-gray-100 px-3 py-1 mb-1">
        @error('email') <span class="text-red-500 text-xs">{{$message}}</span> @enderror

        <input type="text" wire:model="password" placeholder="password" class="block rounded border border-gray-100 px-3 py-1 mb-1">
        @error('password') <span class="text-red-500 text-xs">{{$message}}</span> @enderror

        <button class="block rounded px-3 py-1 bg-gray-400 text-white"> Create New User </button>
    </form>

    <table>
        <thead>
            <th>name</th>
        </thead>
        <tbody>
            @foreach ($users as $user)
                <tr>
                    <td>{{$user->name}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
