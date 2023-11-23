<?php

namespace App\Livewire\Web;

use App\Models\Post;
use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout('layouts.app')]
class Home extends Component
{

    public $politiques;
    public $societes;
    public function render()
    {
        $this->politiques = Post::where('category_id', 3)->latest()->get();
        $this->societes=Post::where('category_id',4 )->latest()->get();
        return view('livewire.web.home',);
    }
}
