<?php

namespace App\Trait;

trait GetDays
{
    public function get_saturday($days)
    {
        foreach ($days as $day) {
            if ($day == 'السبت') {
                return 'yes';
            }
        }
        return 'no';
    }

    public function get_sunday($days)
    {
        foreach ($days as $day) {
            if ($day == 'الاحد') {
                return 'yes';
            }
        }
        return 'no';
    }

    public function get_monday($days)
    {
        foreach ($days as $day) {
            if ($day == 'الاثنين') {
                return 'yes';
            }
        }
        return 'no';
    }

    public function get_tuesday($days)
    {
        foreach ($days as $day) {
            if ($day == 'الثلاثاء') {
                return 'yes';
            }
        }
        return 'no';
    }

    public function get_wednesday($days)
    {
        foreach ($days as $day) {
            if ($day == 'الاربعاء') {
                return 'yes';
            }
        }
        return 'no';
    }

    public function get_thursday($days)
    {
        foreach ($days as $day) {
            if ($day == 'الخميس') {
                return 'yes';
            }
        }
        return 'no';
    }

    public function get_friday($days)
    {
        foreach ($days as $day) {
            if ($day == 'الجمعة') {
                return 'yes';
            }
        }
        return 'no';
    }
}
