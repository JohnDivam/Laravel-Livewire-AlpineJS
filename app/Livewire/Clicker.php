<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\User;
use Livewire\Attributes\Rule;
use Hash;

class Clicker extends Component
{
    #[Rule('required|string|min:2|max:50')]
    public $name ;

    #[Rule('required|email')]
    public $email; 

    #[Rule('required|min:6')]
    public $password;

    public function render()
    {
        $users = User::latest()->get();
        return view('livewire.clicker',compact('users'));
    }

    public function createNewUser(){
        $validated = $this->validate();

        User::create([
            'name'=>$validated['name'],
            'email'=>$validated['email'],
            'password'=> Hash::make($validated['password']),
        ]);

        $this->reset(['name','email','password']);

        session()->flash('success','User Created Successfully!');
    }

}
