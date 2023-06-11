<?php

namespace App\Trait;

use App\Models\User;

trait GetData
{
    public static function data_of_workout_and_nutrition($id)
    {
        $data = User::with('WorkoutData', 'nutrition')->find($id);
        return $data;
    }
}
