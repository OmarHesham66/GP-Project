<?php

namespace App\Http\Controllers\HomePage;

use App\Classes\System\Generate_Client_Information;
use App\Classes\StatusClient\client;
use App\Events\NewNotification;
use App\Trait\GetData;
use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use App\Models\User;


class HomePageController extends Controller
{
    use GetData;
    public function get_login()
    {

        return view('admin.Login.login');
    }

    public function post_login(LoginRequest $request)
    {


//        $password = decrypt($request->password);
        $user = User::where(['email' => $request->email, 'password' =>$request->password])->first();


        if (collect($user)->isEmpty())

            return view('admin.Login.login')->with('error', 'The Email Or Password Is Incorrect !!!');

        else {

            $_SESSION['login'] = 'on';
            $client = new Generate_Client_Information(new client(), $user->id);
            $_SESSION['client'] = $client->Generate();

            return redirect()->route('dashboard');
        }
    }
    public function logout()
    {
        session_unset();
        session_destroy();
        return view('admin.Login.login');
    }
}
