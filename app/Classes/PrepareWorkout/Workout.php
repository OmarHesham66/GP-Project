<?php

namespace App\Classes\PrepareWorkout;

use App\Trait\GetExercisePlace;
use App\Trait\GetExercisePlace_Split;
use App\Trait\GetExerciseType;

class Workout
{
    use GetExercisePlace_Split, GetExerciseType;

    private $place;
    private $num_days;
    private $days;

    public function __construct($place, $num_days, $days)
    {
        $this->place = $place;
        $this->num_days = $num_days;
        $this->days = $days;
    }

    public function Culculate_Workout()
    {
        $data = $this->get_exercise_place_split($this->place);
        return $this->GetExerciseType($this->num_days, $data, $this->days);
    }
}
