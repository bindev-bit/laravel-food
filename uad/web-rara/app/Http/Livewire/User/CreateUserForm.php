<?php

namespace App\Http\Livewire\User;

use Livewire\Component;
use Livewire\WithFileUploads;

class CreateUserForm extends Component
{
	use WithFileUploads;

	public $state = [];

    public function render()
    {
        return view('livewire.user.create-user-form');
    }

	public function informationUser() {

	}
}
