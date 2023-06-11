<?php

namespace App\Classes\StatusClient;

abstract class Macronutrients
{
    public $protein;
    public $carbs;
    public $fats;

    public  function LoseFat($myCal)
    {
        $this->protein = round(($myCal * 0.175) / 4, 1);
        $this->carbs = round(($myCal * 0.60) / 4, 1);
        $this->fats = round(($myCal * 0.225) / 9, 1);
    }

    public function MaintainWeight($myCal)
    {
        $this->protein = round(($myCal * 0.15) / 4, 1);
        $this->carbs = round(($myCal * 0.60) / 4, 1);
        $this->fats = round(($myCal * 0.25) / 9, 1);
    }


    public function BuildMuscle($myCal)
    {
        $this->protein = round(($myCal * 0.20) / 4, 1);
        $this->carbs = round(($myCal * 0.55) / 4, 1);
        $this->fats = round(($myCal * 0.25) / 9, 1);
    }
}
