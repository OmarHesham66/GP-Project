<?php

namespace App\Trait;

use App\Models\User;
use App\Models\Follow;

trait GetData_UserProfileFollow
{

    public function get_information_user($main_id)
    {
        $main_user = User::where('id', '=', $main_id)->first();
        $main_following_user = Follow::select('follower')->where('following', '=', $main_id)->get();
        $number_following = Follow::select('follower')->where('following', '=', $main_id)->get()->count();
        $main_followers_user = Follow::select('following')->where('follower', '=', $main_id)->get();
        $number_followers = Follow::select('following')->where('follower', '=', $main_id)->get()->count();
        return
            [
                'user' => $main_user,
                'following' => $main_following_user,
                'num_following' => $number_following,
                'followers' => $main_followers_user,
                'num_followers' => $number_followers
            ];
    }
}
