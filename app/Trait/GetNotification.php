<?php

namespace App\Trait;

use App\Models\Notification;

trait GetNotification
{
    use CheckSession;
    public function get_notification()
    {
        return Notification::with('follow', 'sender', 'comment', 'replay', 'user', 'post')->where('user_id', '=', $this->get_session()->id)->where('user_sender', '!=', $this->get_session()->id)->get();
    }
}
