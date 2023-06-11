<?php

namespace App\Http\Livewire;

use App\Models\Comment;
use App\Trait\CheckSession;
use Livewire\Component;

class InputComment extends Component
{
    use CheckSession;
    public $comment;
    public $post_id;
    public function render()
    {
        return view('livewire.input-comment');
    }

    public function insert_comment()
    {
        Comment::create([
            'text' => $this->comment,
            'post_id' => $this->post_id,
            'user_id' => $this->get_session()->id,
        ]);

        $this->emit('input');
    }
}
