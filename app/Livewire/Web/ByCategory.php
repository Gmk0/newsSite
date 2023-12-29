<?php

namespace App\Livewire\Web;

use Livewire\Component;

use Livewire\Attributes\Layout;


#[Layout('layouts.app')]
class ByCategory extends Component
{
    public function mount($category)
    {

    }


    public function render()
    {
        return view('livewire.web.by-category');
    }
}
