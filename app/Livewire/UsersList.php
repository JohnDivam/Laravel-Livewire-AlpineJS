<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\User;
use Livewire\Attributes\On;

class UsersList extends Component
{
    use WithPagination;
    

    public function updateList($user=null){
        
    }

    #[On('user-created')]
    public function render()
    {
        $users = User::latest()->paginate(5);
        return view('livewire.users-list',compact('users'));
    }
}
