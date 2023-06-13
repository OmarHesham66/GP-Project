<?php

namespace App\Http\Controllers\Profile;

use App\Models\Post;
use App\Models\User;
use App\Models\Follow;
use App\Trait\CheckSession;
use Illuminate\Http\Request;
use App\Events\PushNotification;
use App\Http\Controllers\Controller;
use App\Trait\GetData_UserProfileFollow;

class UserProfileController extends Controller
{
    use GetData_UserProfileFollow;
    public function show_profile($main_id)
    {
        $posts = Post::where('user_id', '=', $main_id)->get();
        return view('admin.Profile.userProfile', with([
            'main_id' => $main_id,
            'client' => $_SESSION['client'],
            'posts'=>$posts
        ]));
    }

    public function user_following($main_id)
    {
        $user_data = $this->get_information_user($main_id);
        // return $user_data['num_followers'];
        $arr = array();
        for ($i = 0; $i < $user_data['num_following']; $i++) {
            $arr[$i] = $user_data['following'][$i]->follower;
        }
        $users = User::whereIn('id', $arr)->get();
        return view('admin.Profile.following', with([
            'isEmpty' => $user_data['num_following'],
            'following' => $users
        ]));
    }

    public function user_followers($main_id)
    {
        $user_data = $this->get_information_user($main_id);
        $arr = array();

        for ($i = 0; $i < $user_data['num_followers']; $i++) {
            $arr[$i] = $user_data['followers'][$i]->following;
        }
        $users = User::whereIn('id', $arr)->get();
        return view('admin.Profile.followers', with([
            'isEmpty' => $user_data['num_followers'],
            'followers' => $users
        ]));
    }
}
