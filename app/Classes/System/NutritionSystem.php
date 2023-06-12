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
            $this->nut->meal($macros, 1, new breakfast(), 'breakfast',$this->client->allergy),
            $this->nut->meal($macros, 1, new Lunch(), 'lunch',$this->client->allergy),
            $this->nut->meal($macros, 1, new Dinner(), 'dinner',$this->client->allergy),

        ];
        $day_meals = [
            $meals,
            $this->nut->snaks($meals, $macros, 3,$this->client->allergy)
        ];

        return $day_meals;
    }
}
