<?php

namespace App\Classes\PrepareNutrition;

use App\Trait\Functions_Of_Meals;

class Nutrition
{
    use Functions_Of_Meals;

    public function meal($macros, $id, $model, $type,$allergy)
    {
        $arr=explode('-',$allergy);
        $meals = $this->culc_macros_meal($macros);
        $meal_count=$model::get()->count();
        for ($i=0;$i<$meal_count;$i++) {
            $meal = $model::find($id);
            for ($j=$i;$j<count($arr);$j++) {
                if ($meal->allergy != $arr[$j]) {
                    break;
                } else {
                    $id++;

                }
            }
        }

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
