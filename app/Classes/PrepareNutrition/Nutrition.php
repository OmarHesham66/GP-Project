<?php

namespace App\Classes\PrepareNutrition;

use App\Trait\Functions_Of_Meals;

class Nutrition
{
    use Functions_Of_Meals;

    public function meal($macros, $id, $model, $type)
    {

        $meals = $this->culc_macros_meal($macros);
        $meal = $model::find($id);
        $units_meal = $meal->compontent_meals;
        $this->culc_protein($meal, $units_meal, $meals[$type]['protein']);
        $this->culc_carb($meal, $units_meal, $meals[$type]['carb']);
//       $this->culc_fat($meal, $units_meal, $meals[$type]['fat']);
        return
            [
                'meal' => $meal->setHidden(['compontent_meals', 'created_at', 'updated_at']),
                'compontent_meal' => $units_meal,

            ];
    }
}
