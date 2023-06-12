<?php

namespace App\Http\Livewire;

use App\Models\Post;
use App\Models\User;
use App\Models\Comment;
use Livewire\Component;
use App\Trait\CheckSession;
use App\Events\PushNotification;

class InputComment extends Component
{
    use CheckSession;
    public $comment;
    public $post_id;
    public function render()
    {
        $user = User::where('id', $this->get_session()->id)->first();
        return view('livewire.input-comment', compact('user'));
    }

    public function insert_comment()
    {
        $user_id = Post::with('user')->where('id', $this->post_id)->first()->user->id;
        $comment = Comment::create([
            'text' => $this->comment,
            'post_id' => $this->post_id,
            'user_id' => $this->get_session()->id,
        ]);
        event(new PushNotification([
            'user_id' => $user_id,
            'table_id' => $this->post_id,
            'type' => 'comment',
            'user_sender' => $this->get_session()->id,
        ]));

        $this->emit('input');
    }
}
