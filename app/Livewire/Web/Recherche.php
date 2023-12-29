<?php

namespace App\Livewire\Web;

use Livewire\Component;
use Livewire\Attributes\Layout;



#[Layout('layouts.app')]

class Recherche extends Component
{

    public function mount($word=null){


    }
    public function render()
    {
        return view('livewire.web.recherche');
    }
}
