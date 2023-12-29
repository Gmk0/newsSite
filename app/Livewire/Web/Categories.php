<?php

namespace App\Livewire\Web;

use Livewire\Component;
use Livewire\Attributes\Layout;


#[Layout('layouts.app')]
class Categories extends Component
{
    public function render()
    {
        return view('livewire.web.categories');
    }
}
