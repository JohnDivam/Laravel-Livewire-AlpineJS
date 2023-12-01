<div class="px-5 mx-auto mt-3" wire:poll.5s>
    <!-- auto update: wire:poll.5s  -->
    <h3>Users: {{$users->total()}}</h3>

    <input type="search" wire:model.debounce.500ms="search" class="form-control mt-3 mb-3" placeholder="Search...">
    <!-- wire:model.live or wire:model.debounce.100ms-->
    search:{{$search}}
    <table class="table table-bordered">
        <thead>
            <th>#</th>
            <th>image</th>
            <th>name</th>
            <th>email</th>
        </thead>
        <tbody>
            @foreach ($users as $user)
                <tr>
                    <td>{{$user->id}}</td>
                    <td>
                        <img class="rounded w-10 h-10 mt" src="{{asset('storage/'.$user->image)}}" alt="">
                    </td>
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>
                  
                </tr>
            @endforeach
        </tbody>
    </table>

    {{$users->links('vendor.livewire.tailwind')}}


    <x-modal title="Create User">
        @slot('body')
        <span>Body..</span>
        @endslot
    </x-modal>

    <button x-data x-on:click="$dispatch('open-modal')" class="px-3 py-1 bg-teal-500 text-white rounded"> Show Modal </button>
</div>
