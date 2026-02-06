<?php

namespace App\Livewire\Admin;

use Livewire\Component;
use App\Models\User;

class Getuser extends Component
{
    public function render()
    {
        
        return view('livewire.admin.getuser', ['users' => User::all()]);
    }
}
