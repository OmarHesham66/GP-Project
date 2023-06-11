<?php

namespace App\Http\Controllers\User;

use App\Models\User;
use App\Http\Requests\EmailRequest;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    public function email_register_show()
    {
        return view('admin.Registration.Email-Register');
    }

    public function insert_email_data(EmailRequest $req)
    {

        Session::put('data_user', [
            'name' => $req->name,
            'email' => $req->email,
            'password' => $req->password,
            'phone' => $req->phone,
            'age' => $req->age,
        ]);
        return view('admin.Registration.Workout-Register');
    }
}
