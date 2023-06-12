<?php

namespace App\Http\Controllers\Profile;

use App\Http\Controllers\Controller;
use App\Http\Requests\EmailRequest;
use App\Models\Follow;
use App\Models\Post;
use App\Models\User;
use App\Trait\GetData_UserProfileFollow;
use App\Trait\Media;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    use Media;
    use GetData_UserProfileFollow;
    public function showProfile()
    {
        $client = $_SESSION['client'];
        $follow_data = $this->get_information_user($client->id);
        $posts = Post::where('user_id', '=', $client->id)->get();
        $numOfPosts = Post::where('user_id', '=', $client->id)->get()->count();
        $isFound = true;
        if (collect($posts)->isEmpty()) {
            $isFound = false;
        }
        return view('admin.Profile.profile ', with([
            'client' => $client,
            'posts' => $posts,
            'num_followers' => $follow_data['num_followers'],
            'num_following' => $follow_data['num_following'],
            'num_posts' => $numOfPosts,
            'found' => $isFound

        ]));
    }

    public function following()
    {
        $client = $_SESSION['client'];
        $main_following_user = Follow::select('follower')->where('following', '=', $client->id)->get();
        $arr = array();
        for ($i = 0; $i < count($main_following_user); $i++) {
            $arr[$i] = $main_following_user[$i]->follower;
        }
        $users = User::whereIN('id', $arr)->get();
        return view('admin.Profile.followers', with([
            'isEmpty' => count($main_following_user),
            'followers' => $users
        ]));
    }

    public function follower()
    {
        $client = $_SESSION['client'];
        $main_followers_user = Follow::select('following')->where('follower', '=', $client->id)->get();
        $arr = array();
        for ($i = 0; $i < count($main_followers_user); $i++) {
            $arr[$i] = $main_followers_user[$i]->following;
        }
        $users = User::whereIn('id', $arr)->get();
        return view('admin.Profile.following', with([
            'isEmpty' => count($main_followers_user),
            'following' => $users
        ]));
    }
    public function showEdit()
    {
        $client = $_SESSION['client'];
        return view('admin.Profile.editProfile', compact('client'));
    }
    public function edit(Request $request)
    {
        $request->validate([
            'name' => ['required', 'max:255'],
            'phone' => ['required', 'min:11', 'numeric'],
            'email' => ['required', 'max:255'],
            'password' => ['required', 'min:8', 'max:16', 'confirmed'],
            'age' => ['required'],
            'media' => 'mimes:jpeg,png,jpg',
        ]);
        $file_name='Profile-PNG-File.png';
        if ($request->media) {
            $file_name = $this->editImageProfile($request->media);
        }
        $user = User::where('id', '=', $_SESSION['client']->id)->first();
        $user->update([
            'photo' => $file_name,
            'name' => $request->name,
            'password' => $request->password,
            'email' => $request->email,
            'age' => $request->age,
        ]);
        return redirect()->route('logout') ;
    }
}
