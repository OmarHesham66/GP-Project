<?php

namespace App\Http\Livewire;

use App\Models\Comment;
use Livewire\Component;

class ShowComment extends Component
{
    protected $listeners = ['addComment' => '$refresh'];
    public $newComment;
    public $postId;
    public $photo;

    public function render()
    {

        $comments = Comment::with('user')->where('post_id', '=', $this->postId)->get();
        return view('livewire.show-comment', compact('comments'));
    }
    public function storeComment()
    {
        session_start();
        \App\Models\Comment::create([
            'text' => $this->newComment,
            'user_id' => $_SESSION['client']->id,
            'post_id' => $this->postId
        ]);
        $this->newComment = '';
        $this->emit('input');
        $this->emit('addComment');
    }


    //    public function refreshComments()
    //    {
    //
    //        $comments = Comment::with('user')->where('post_id', '=', $this->postId)->get();
    //     dd ($comments);
    //    }
}
