<div class="px-5 mx-auto mt-3" >
    <!-- auto update: wire:poll.5s  -->
    <div class="grid grid-cols-2">
        <div class="">
            <h3>Users: {{$users->total()}}</h3>

            <input type="search" wire:model.live="search" class="form-control mt-3 mb-3" placeholder="Search...">
            <!-- wire:model.live or wire:model.debounce.100ms-->
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


            <x-modal title="Create User" name="modal1">
                @slot('body')
                    <span>Body 1..</span>
                @endslot
            </x-modal>

            <x-modal title="Create User" name="modal2">
                @slot('body')
                    <span>Body 2..</span>
                @endslot
            </x-modal>

            <button x-data x-on:click="$dispatch('open-modal',{name:'modal1'})" class="px-3 py-1 bg-teal-500 text-white rounded"> 
                Show Modal 
            </button>
            <button x-data x-on:click="$dispatch('open-modal',{name:'modal2'})" class="px-3 py-1 bg-teal-500 text-white rounded">
                Show Modal  2
            </button>
        </div><!-- end col -->
        <div class="">
            @livewire('create-user')
        </div>
    </div>
</div>
