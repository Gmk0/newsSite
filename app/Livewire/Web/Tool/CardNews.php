<?php

namespace App\Livewire\Web\Tool;

use App\Models\Post;
use Livewire\Component;

class CardNews extends Component
{
    public Post $post;
    public function render()
    {
        return view('livewire.web.tool.card-news');
    }
}
