<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;

class Users extends Component
{
    public $search;

    public function render()
    {
        return view('livewire.users',['users' =>  User::where('name','LIKE','%'.$this->search.'%')->get()
        ]);
    }

    public function agregar(){

        User::factory()->create();
    }
}
