<?php

namespace App\Trait;

trait CheckSession
{

    public function get_session()
    {
        if (isset($_SESSION['client'])) {
            return $_SESSION['client'];
        } else {
            session_start();
            return $_SESSION['client'];
        }
    }
}
