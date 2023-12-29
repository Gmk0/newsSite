<?php

namespace App\Livewire\Web;

use App\Models\Category;
use App\Models\Post;
use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout('layouts.app')]
class Home extends Component
{

    public $politiques;
    public $societes;
    public $alaUne;
    public $landing;
    public $fourNews;
    public $categoryPolitique= "Politique";
    public $forSlider;
    public $mostPopular;
    public function mount()
    {
        $this->landing = Post::where('is_featured',true)->first();
        $this->forSlider=Category::inRandomOrder()->first();

        $this->fourNews=Post::where('id', '!=', $this->landing?->id)->latest()->take(4)->get();

        
    }
    public function render()
    {
        $this->politiques = Post::where('category_id', 3)->latest()->get();

        $this->societes=Post::where('category_id',4 )->latest()->get();
        $this->alaUne= Post::latest()->take(4)->get();
        return view('livewire.web.home',[
            'lastPolitique'=>Post::whereHas('category', function($q){
                $q->where('name','Like','%'.$this->categoryPolitique.'%');
            })->latest()->get(),
            'lastPostFor3section'=>Post::where('category_id', $this->forSlider?->id)->latest()->get(),
            ]);

    }
}
