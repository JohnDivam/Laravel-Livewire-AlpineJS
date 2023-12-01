<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\User;
use Livewire\Attributes\On;

class UsersList extends Component
{
    use WithPagination;
    
    public $search = '';

    public function mount($search){
        $this->search = $search;
    }
    
    #[On('user-created')]
    public function render()
    {
        $users = User::latest()->when($this->search !== '',function($qr){
            $qr->where('name','like','%'.$this->search.'%');
        })->paginate(10);
        return view('livewire.users-list',compact('users'));
    }
}
