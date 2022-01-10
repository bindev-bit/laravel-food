<?php

namespace App\Http\Livewire;

use App\Models\Menu;
use Livewire\Component;

class Home extends Component
{
    public function render()
    {
        $top = Menu::all()->first();
        $menu = Menu::all();
        return view('home', compact(['menu', 'top']));
    }
}
