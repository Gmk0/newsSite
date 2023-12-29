<?php

namespace App\Livewire\Web;

use App\Models\Category;
use Livewire\Component;

class Header extends Component
{
    public function render()
    {
        $categories=Category::limit(4)->get();
        return view('livewire.web.header',['categories'=>$categories]);
    }
}
