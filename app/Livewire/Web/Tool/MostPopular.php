<?php

namespace App\Livewire\Web\Tool;

use App\Models\Post;
use Livewire\Component;

class MostPopular extends Component
{
    public function render()
    {

        return view('livewire.web.tool.most-popular',['mostPopular'=> Post::orderBy('views_count', 'desc')->take(5)->get(),]);
    }
}
