<?php

namespace App\Http\Livewire;

use App\Events\Push_like_comment;
use App\Models\Comment;
use App\Models\Like as likes;
use App\Trait\CheckSession;
use Livewire\Component;

class Like extends Component
{
    use CheckSession;
    public $counter_like = 0;
    public $counter_comment = 0;
    public $post_id;
    public $like_btn;
    protected $listeners = ["input" => '$refresh'];


    public function render()
    {
        $this->counter_like = likes::where('post_id', '=', $this->post_id)->get()->count();
        $this->counter_comment = Comment::where('post_id', '=', $this->post_id)->get()->count();
        $this->like_btn = $this->is_liked();

        return view('livewire.like');
    }

    public function insert_like()
    {
        $like = $this->is_liked();
        if ($like == false) {
            likes::create([
                'user_id' => $_SESSION['client']->id,
                'post_id' => $this->post_id,
                'is_like' => 1
            ]);
        } else {
            likes::where('user_id', '=', $_SESSION['client']->id)->where('post_id', '=', $this->post_id)->delete();
        }
    }

    public function is_liked()
    {
        return likes::select('is_like')->where('post_id', '=', $this->post_id)->where('user_id', '=', $this->get_session()->id)->exists();
    }
}
