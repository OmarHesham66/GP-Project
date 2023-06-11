<?php

namespace App\Classes\System;

use App\Models\Lunch;
use App\Models\Dinner;
use App\Models\breakfast;
use App\Classes\PrepareNutrition\Nutrition;

class NutritionSystem implements ISystem
{

    private Nutrition $nut;
    private $client;

    public function __construct(Nutrition $nutrition, $client)
    {
        $this->nut = $nutrition;
        $this->client = $client;
    }
    public function Build()
    {
        $macros = [
            'protein' => $this->client->protein,
            'carbs' => $this->client->carbs,
            'fats' => $this->client->fats
        ];

        $meals = [
            $this->nut->meal($macros, 1, new breakfast(), 'breakfast'),
            $this->nut->meal($macros, 1, new Lunch(), 'lunch'),
            $this->nut->meal($macros, 1, new Dinner(), 'dinner'),

        ];
        $day_meals = [
            $meals,
            $this->nut->snaks($meals, $macros, 1)
        ];

        return $day_meals;
    }
}
