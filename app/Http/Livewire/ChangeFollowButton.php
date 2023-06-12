<?php

namespace App\Http\Livewire;

use App\Models\Post;
use App\Models\Follow;
use Livewire\Component;
use App\Trait\CheckSession;
use App\Events\PushNotification;
use App\Trait\GetData_UserProfileFollow;

class ChangeFollowButton extends Component
{
    use CheckSession, GetData_UserProfileFollow;
    public $main_id;
    public $change_btn = 0;
    public $lol;
    protected $listeners = ['changed_follow' => '$refresh'];


    public function render()
    {
        $data = $this->get_information_user($this->main_id);
        $posts = Post::where('user_id', '=', $this->main_id)->get();
        $isFound = true;
        if (collect($posts)->isEmpty()) {
            $isFound = false;
        }
        if ($this->check_btn() == true) {
            $this->change_btn = 1;
        } else {
            $this->change_btn = 0;
        }
        return view('livewire.change-follow-button', with([
            'posts' => $posts,
            'data' => $data,
            'found' => $isFound,
            'client' => $this->get_session(),
        ]));
    }
    public function create_follow()
    {
        $follow = Follow::create([
            'following' => $this->get_session()->id,
            'follower' => $this->main_id,
        ]);

        event(new PushNotification([
            'user_id' => $this->main_id,
            'table_id' => $follow->id,
            'type' => 'follow',
            'user_sender' => $this->get_session()->id,
        ]));
        $this->change_btn = 1;
        $this->emit('changed_follow');
    }

    public function delete_follow()
    {
        Follow::where('following', '=', $this->get_session()->id)->where('follower', '=', $this->main_id)->delete();
        $this->change_btn = 0;
        $this->emit('changed_follow');
    }
    public function check_btn()
    {
        return Follow::where('following', '=', $this->get_session()->id)->where('follower', '=', $this->main_id)->exists();
    }
}
