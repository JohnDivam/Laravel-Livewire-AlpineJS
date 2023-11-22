<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\User;

class Clicker extends Component
{
    public $name , $email, $password;

    public function render()
    {
        $users = User::latest()->get();
        return view('livewire.clicker',compact('users'));
    }

    public function createNewUser(){
        User::create([
            'name'=>$this->name,
            'email'=>$this->email,
            'password'=>$this->password,
        ]);
    }

}
