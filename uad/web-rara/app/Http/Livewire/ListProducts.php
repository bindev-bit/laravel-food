<?php

namespace App\Http\Livewire;

use App\Models\Menu;
use Livewire\Component;

class ListProducts extends Component
{
    public function render()
    {
        $top = Menu::all()->first();
        $menu = Menu::all();
        return view('livewire.list-products', compact(['menu', 'top']));
    }
}
