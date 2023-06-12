<?php

namespace App\Http\Livewire;

use App\Models\Post;
use App\Models\Comment;
use Livewire\Component;
use App\Trait\CheckSession;
use App\Models\Like as likes;
use App\Events\PushNotification;
use App\Events\Push_like_comment;

class Like extends Component
{
    use CheckSession;
    public $counter_like = 0;
    public $counter_comment = 0;
    public $likes;
    public $comments;
    public $post_id;
    public $like_btn;
    protected $listeners = ["input" => '$refresh'];


    public function render()
    {
        $id = $this->get_session()->id;
        $this->likes = likes::with('user')->where('post_id', '=', $this->post_id)->get();
        $this->counter_like = $this->likes->count();
        // return dd($this->likes[0]->users->name);
        $this->comments = Comment::with('user')->where('post_id', '=', $this->post_id)->get();
        $this->counter_comment = $this->comments->count();
        $this->like_btn = $this->is_liked();

        return view('livewire.like', compact('id'));
    }

    public function insert_like()
    {
        $user_id = Post::with('user')->where('id', $this->post_id)->first()->user->id;

        $like = $this->is_liked();
        if ($like == false) {
            likes::create([
                'user_id' => $_SESSION['client']->id,
                'post_id' => $this->post_id,
                'is_like' => 1
            ]);
            event(new PushNotification([
                'user_id' => $user_id,
                'table_id' => $this->post_id,
                'type' => 'like',
                'user_sender' => $_SESSION['client']->id,
            ]));
        } else {
            likes::where('user_id', '=', $_SESSION['client']->id)->where('post_id', '=', $this->post_id)->delete();
        }
    }

    public function is_liked()
    {
        return likes::select('is_like')->where('post_id', '=', $this->post_id)->where('user_id', '=', $this->get_session()->id)->exists();
    }
}
