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

        <input type="file" wire:model="image" id="image" accept="image/png, image/jpeg" class="ring-2 ring-insert ring-gray-300 text-gray-300 px-3 py-1 mb-1">
        @error('image') <span class="text-red-500 text-xs">{{$message}}</span> @enderror
        @if($image)
        <img class="rounded w-10 h-10 mt" src="{{$image->temporaryUrl()}}" alt="">
        @endif

        <div wire:loading wire:target="image">
            <span class="text-green-500">Uploading...</span>
        </div>

        <button class="block rounded px-3 py-1 bg-gray-400 text-white"> Create New User </button>
    </form>

    <table>
        <thead>
            <th>#</th>
            <th>image</th>
            <th>name</th>
        </thead>
        <tbody>
            @foreach ($users as $user)
                <tr>
                    <td>{{$user->id}}</td>
                    <td>
                        <img class="rounded w-10 h-10 mt" src="{{asset('storage/'.$user->image)}}" alt="">
                    </td>
                    <td>{{$user->name}}</td>
                  
                </tr>
            @endforeach
        </tbody>
    </table>

    {{$users->links('vendor.livewire.bootstrap')}}
</div>
