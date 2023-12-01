<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;

#[Layout('layouts.app')]
#[Title('Home')]
class HomePage extends Component
{
    public function render()
    {
        return view('livewire.home-page');
    }
}
