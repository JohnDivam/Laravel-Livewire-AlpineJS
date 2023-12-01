<div class="">
    @if(session('success')) 
        <span class="w-100 py-3 bg-green-300 rounded">{{ session('success') }}</span>
    @endif
    <form wire:submit="createNewUser" action="" class="p-5">
        <input type="text" wire:model="name" placeholder="name" class="block rounded border border-gray-100 px-3 py-1 mb-3">
        @error('name') <span class="text-red-500 text-xs">{{$message}}</span> @enderror

        <input type="text" wire:model="email" placeholder="email" class="block rounded border border-gray-100 px-3 py-1 mb-3">
        @error('email') <span class="text-red-500 text-xs">{{$message}}</span> @enderror

        <input type="text" wire:model="password" placeholder="password" class="block rounded border border-gray-100 px-3 py-1 mb-3">
        @error('password') <span class="text-red-500 text-xs">{{$message}}</span> @enderror

        <input type="file" wire:model="image" id="image" accept="image/png, image/jpeg" class="ring-2 ring-insert ring-gray-300 text-gray-300 px-3 py-1 ">
        @error('image') <span class="text-red-500 text-xs">{{$message}}</span> @enderror
        @if($image)
        <img class="rounded w-10 h-10 mb-3" src="{{$image->temporaryUrl()}}" alt="">
        @endif

        <div wire:loading wire:target="image">
            <span class="text-green-500">Uploading...</span>
        </div>

        <div wire:loading.delay.longest wire:target=createNewUser>
            <span class="text-green-500">Sending...</span>
        </div>

        <button wire:loading.attr="disabled" wire:loading.class.remove="text-white" class="block rounded px-3 py-1 bg-success text-white mt-3"> 
            Create New User 
        </button>
    </form>

   
</div>
