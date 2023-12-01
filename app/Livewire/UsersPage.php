<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\User;
use Livewire\Attributes\On;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;

class UsersPage extends Component
{
    use WithPagination;
    
    public $search = '';
    public $user;

    #[On('user-created')]
    #[Title('Users')]
    public function render()
    {
        $users = User::latest()->when($this->search !== '',function($qr){
            $qr->where('name','like','%'.$this->search.'%');
        })->paginate(10);
        return view('livewire.users-page',compact('users'));
    }

    
}
