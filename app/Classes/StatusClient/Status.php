<?php

namespace App\Classes\StatusClient;

abstract class  Status extends Macronutrients
{
    public $bmr;
    public $calories_with_ActivityRate;
    public $bmi;

    public function status_for_male($weight, $height, $age, $activity_rate)
    {
        $this->bmr = round(66.47 + (13.7 * $weight) + (5 * $height) - (6.8 * $age), 2);
        $this->calories_with_ActivityRate = round($this->bmr * $activity_rate, 2);
        $this->bmi = round($weight / (($height / 100) * ($height / 100)), 2);
    }

    public  function status_for_female($weight, $height, $age, $activity_rate)
    {

        $this->bmr = round(655.1 + (9.6 * $weight) + (1.8 * $height) - (4.7 * $age), 2);
        $this->calories_with_ActivityRate = round($this->bmr * $activity_rate, 2);
        $this->bmi = round($weight / (($height / 100) * ($height / 100)), 2);
    }
}
