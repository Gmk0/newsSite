<?php

namespace App\Livewire\Web;

use App\Models\Comment;
use App\Models\Post;
use Livewire\Component;

use Livewire\Attributes\Layout;


#[Layout('layouts.app')]
class OneNews extends Component
{
    public $post;

    public $content;
    public $comments;

    protected $listeners=['refresh'=> '$refresh'];

    public function mount($category,$slug)
    {

        $this->post=Post::where('slug',$slug)->first();



       // dd($this->comments);



      //  dd($this->post);

        if($this->post === null)
        {
            return redirect('/');
        }

    }

    public function comment()
    {

        try{
            $this->validate(['content' => 'required']);
            // dd($this->content);
            $data = [
                'post_id' => $this->post->id,
                'user_id' => auth()->id(),
                'content' => $this->content,
            ];

            // dd($data);
            $comment = Comment::create($data);

            $this->reset('content');

            $this->dispatch('refresh');

        }catch(\Exception $e){



        }




    }
    public function render()
    {
        $this->comments = $this->post->comments->where('publier', true);
        return view('livewire.web.one-news');
    }
}
