<div>
    <form wire:submit="createNewUser" action="" >
        <input type="text" wire:model="name" placeholder="name">
        <input type="text" wire:model="email" placeholder="email">
        <input type="text" wire:model="password" placeholder="password">
        <button> Create New User </button>
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
