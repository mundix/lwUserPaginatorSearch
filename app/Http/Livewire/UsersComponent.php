<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;

use App\Models\User;
use App\Models\Category;

class UsersComponent extends Component
{

    use WithPagination;
    public function render()
    {
        return view('livewire.users-component');
    }
}
