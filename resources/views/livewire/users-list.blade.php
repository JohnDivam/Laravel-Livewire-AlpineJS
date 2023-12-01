<div>
    <table class="table table-bordred">
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

    {{$users->links('vendor.livewire.bootstrap')}}
</div>
