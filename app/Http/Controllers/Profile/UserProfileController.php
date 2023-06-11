<?php

namespace App\Http\Controllers\Profile;

use App\Events\PushNotification;
use App\Models\Post;
use App\Models\Follow;
use App\Trait\CheckSession;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Trait\GetData_UserProfileFollow;

class UserProfileController extends Controller
{
    use GetData_UserProfileFollow;


    public function show_profile($main_id)
    {
        return view('admin.Profile.userProfile', with([
            'main_id' => $main_id,
            'client' => $_SESSION['client']
        ]));
    }
}
