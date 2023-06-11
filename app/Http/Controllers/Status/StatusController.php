<?php

namespace App\Http\Controllers\Status;


use App\Models\Exercise;
use App\Models\Notification;
use App\Events\NewNotification;
use App\Http\Controllers\Controller;

class StatusController extends Controller
{
    public function get_status()
    {

        $client = $_SESSION['client'];
        return view('admin.Dashboard.Status.status', with(['client' => $client]));
    }
}
