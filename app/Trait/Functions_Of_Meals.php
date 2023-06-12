<?php

namespace App\Trait;

use App\Models\Dinner;
use App\Models\Lunch;
use App\Models\Meal;
use App\Models\Snak;

trait Functions_Of_Meals
{



    public function culc_macros_meal($macros)
    {
        //        switch ($plan_meals) {
        //            case '3 Meals':
        //                return
        //                    [
        //                        'protein_meal_1' => round($macros['protein'] * 0.2, 1),
        //                        'protein_meal_2' => round($macros['protein'] * 0.5, 1),
        //                        'protein_meal_3' => round($macros['protein'] * 0.2, 1),
        //                        'carb_meal_1'    => round($macros['carbs'] * 0.27, 1),
        //                        'carb_meal_2'    => round($macros['carbs'] * 0.35, 1),
        //                        'carb_meal_3'    => round($macros['carbs'] * 0.3, 1),
        //                        'fat_meal_1'    =>  round($macros['fats'] * 0.25, 1),
        //                        'fat_meal_2'    =>  round($macros['fats'] * 0.35, 1),
        //                        'fat_meal_3'    =>  round($macros['fats'] * 0.3, 1),
        //                    ];
        //break;
        // case '3 Meals - 1 Snacks':
        //     return
        //     [
        //     'protein_1'=>($macros['protein']*0.3),
        //     'protein_2'=>($macros['protein']*0.45),
        //     'protein_3'=>($macros['protein']*0.2),
        //     'protein_4'=>($macros['protein']*0.05),
        //     'carb_1'   =>($macros['carbs']*0.3),
        //     'carb_2'   =>($macros['carbs']*0.3),
        //     'carb_3'   =>($macros['carbs']*0.25),
        //     'carb_4'   =>($macros['carbs']*0.15),
        //     'fats_1'   =>($macros['fats']*0.3),
        //     'fats_2'   =>($macros['fats']*0.3),
        //     'fats_3'   =>($macros['fats']*0.3),
        //     'fats_4'   =>($macros['fats']*0.10),
        //     ];
        //     break;
        //            default:
        return
            [
                'breakfast' => [
                    'protein' => ($macros['protein'] * 0.20),
                    'carb' => ($macros['carbs'] * 0.27),
                    'fat' => ($macros['fats'] * 0.25),
                    'cals' => (($macros['protein'] * 0.20) * 4) +
                        (($macros['carbs'] * 0.27) * 4) +
                        (($macros['fats'] * 0.25) * 9)
                ],
                'lunch' => [
                    'protein' => ($macros['protein'] * 0.40),
                    'carb' => ($macros['carbs'] * 0.30),
                    'fat' => ($macros['fats'] * 0.28),
                    'cals' => (($macros['protein'] * 0.40) * 4) +
                        (($macros['carbs'] * 0.30) * 4) +
                        (($macros['fats'] * 0.28) * 9)
                ],
                'dinner' => [
                    'protein' => ($macros['protein'] * 0.23),
                    'carb' => ($macros['carbs'] * 0.23),
                    'fat' => ($macros['fats'] * 0.24),
                    'cals' => (($macros['protein'] * 0.23) * 4) +
                        (($macros['carbs'] * 0.23) * 4) +
                        (($macros['fats'] * 0.24) * 9)
                ],
                //                        'snak'=>[
                //                                    'protein' =>($macros['protein'] * 0.17),
                //                                    'carb' =>($macros['carbs'] * 0.20),
                //                                    'fat' =>($macros['fats'] * 0.23),
                //                                    'cals'=>(($macros['protein'] * 0.17)*4)+
                //                                            (($macros['carbs'] * 0.20)*4)+
                //                                            (($macros['fats'] * 0.23)*9)
                //                                ],
            ];
        // break;
    }
    private function culc_protein($meal, $units_meal, $needed_protein)
    {
        if ($needed_protein < $meal->protien) {
            $range = ($needed_protein - $meal->protein) * (-1);
            $protein = $units_meal->max('protein');
            $row_of_big_protein = $units_meal->where('protein', '=', $protein)->first();
            $row_of_big_protein->protein -= $range;
            $row_of_big_protein->carb = $row_of_big_protein->carb - (($range / $protein) * $row_of_big_protein->carb);
            $row_of_big_protein->fat = $row_of_big_protein->fat - (($range / $protein) * $row_of_big_protein->fat);
            $row_of_big_protein->weight = $row_of_big_protein->weight - (($range / $protein) * $row_of_big_protein->weight);
        } else {
            $range = $needed_protein - $meal->protein;

            $protein = $units_meal->max('protein');

            $row_of_big_protein = $units_meal->where('protein', '=', $protein)->first();
            $row_of_big_protein->protein += $range;

            $row_of_big_protein->carb = (($protein + $range) / $protein) * $row_of_big_protein->carb;
            $row_of_big_protein->fat = (($protein + $range) / $protein) * $row_of_big_protein->fat;
            $row_of_big_protein->weight = (($protein + $range) / $protein) * $row_of_big_protein->weight;
        }
        $row_of_big_protein->calories = ($row_of_big_protein->carb * 4) + ($row_of_big_protein->protein * 4) + ($row_of_big_protein->fat * 9);

        $meal->protein = $units_meal->sum('protein');
        $meal->carb = $units_meal->sum('carb');
        $meal->fat = $units_meal->sum('fat');
        $meal->calories_meal = ($units_meal->sum('protein') * 4) + ($units_meal->sum('carb') * 4) + ($units_meal->sum('fat') * 9);
    }

    private function culc_carb($meal, $units_meal, $needed_carb)
    {
        if ($needed_carb < $meal->carb) {
            $range = ($needed_carb - $meal->carb) * (-1);
            $carb = $units_meal->max('carb');
            $row_of_big_carb = $units_meal->where('carb', '=', $carb)->first();
            $row_of_big_carb->carb -= $range;
            $row_of_big_carb->protein = $row_of_big_carb->protein - (($range / $carb) * $row_of_big_carb->protein);
            $row_of_big_carb->fat = $row_of_big_carb->fat - (($range / $carb) * $row_of_big_carb->fat);
            $row_of_big_carb->weight = $row_of_big_carb->weight - (($range / $carb) * $row_of_big_carb->weight);
        } else {
            $range = $needed_carb - $meal->carb;

            $carb = $units_meal->max('carb');

            $row_of_big_carb = $units_meal->where('carb', '=', $carb)->first();
            $row_of_big_carb->carb += $range;

            $row_of_big_carb->protein = (($carb + $range) / $carb) * $row_of_big_carb->protein;
            $row_of_big_carb->fat = (($carb + $range) / $carb) * $row_of_big_carb->fat;
            $row_of_big_carb->weight = (($carb + $range) / $carb) * $row_of_big_carb->weight;
        }
        $row_of_big_carb->calories = ($row_of_big_carb->carb * 4) + ($row_of_big_carb->protein * 4) + ($row_of_big_carb->fat * 9);
        $meal->protein = $units_meal->sum('protein');
        $meal->carb = $units_meal->sum('carb');
        $meal->fat = $units_meal->sum('fat');
        $meal->calories_meal = ($units_meal->sum('protein') * 4) + ($units_meal->sum('carb') * 4) + ($units_meal->sum('fat') * 9);
    }

    private function culc_fat($meal, $units_meal, $needed_fat)
    {
        if ($needed_fat < $meal->fat) {
            $range = 0;
        } else {
            $range = $needed_fat - $meal->fat;
        }
        $fat = $units_meal->max('fat');

        $row_of_big_fat = $units_meal->where('fat', '=', $fat)->first();
        $row_of_big_fat->fat += $range;

        $row_of_big_fat->protein = (($fat + $range) / $fat) * $row_of_big_fat->protein;
        $row_of_big_fat->carb = (($fat + $range) / $fat) * $row_of_big_fat->carb;
        $row_of_big_fat->weight = (($fat + $range) / $fat) * $row_of_big_fat->weight;
        $row_of_big_fat->calories = ($row_of_big_fat->carb * 4) + ($row_of_big_fat->protein * 4) + ($row_of_big_fat->fat * 9);

        $meal->protein = $units_meal->sum('protein');
        $meal->carb = $units_meal->sum('carb');
        $meal->fat = $units_meal->sum('fat');
        $meal->calories_meal = ($units_meal->sum('protein') * 4) + ($units_meal->sum('carb') * 4) + ($units_meal->sum('fat') * 9);
    }
    public function snaks($meals, $macros, $id,$allergy)
    {
        $arr=explode('-',$allergy);
        $meal_count=Snak::get()->count();
        for ($i=0;$i<$meal_count;$i++) {
            $meal = Snak::find($id);
            for ($j=$i;$j<count($arr);$j++) {
                if ($meal->allergy != $arr[$j]) {
                    break;
                } else {
                    $id++;

                }
            }
        }
        $units_meal = $meal->compontent_meals;

        $full_protein = 0;
        $full_carb = 0;
        $full_fat = 0;
        $full_cals = 0;
        foreach ($meals as $unit) {
            $full_cals += $unit['meal']['calories_meal'];
            $full_fat += $unit['meal']['fat'];
            $full_protein += $unit['meal']['protein'];
            $full_carb += $unit['meal']['carb'];
        }
        $protein_of_snak = $macros['protein'] - $full_protein;
        $carb_of_snak = $macros['carbs'] - $full_carb;
        $fat_of_snak = $macros['fats'] - $full_fat;
        $calories = $macros['protein'] * 4 + $macros['carbs'] * 4 + $macros['fats'] * 9;
        $check_cals = $calories - $full_cals;

        if ($check_cals < $meal->calories_meal) {
            if($carb_of_snak<=0||$carb_of_snak > $meal->carb) {
                    return
                    [
                        'meal' => $meal->setHidden(['compontent_meals', 'created_at', 'updated_at']),
                        'compontent_meal' => $units_meal,


                    ];
                }
                else {
                    $this->culc_carb($meal, $units_meal, $carb_of_snak);
                }

//                else ($carb_of_snak < $meal->carb) {
//                $this->culc_carb($meal, $units_meal, $carb_of_snak);
//            } }if ($protein_of_snak < $meal->protein) {
//                $this->culc_protein($meal, $units_meal, $protein_of_snak);
//            } else {
//                return
//                    [
//                        'meal' => $meal->setHidden(['compontent_meals', 'created_at', 'updated_at']),
//                        'compontent_meal' => $units_meal,
//
//
//                    ];
//            }
        } else {
            if ($protein_of_snak > $meal->protein)  {
                $this->culc_protein($meal, $units_meal, $protein_of_snak);
            } elseif ($carb_of_snak > $meal->carb) {
                $this->culc_carb($meal, $units_meal, $carb_of_snak);
            } else {
                $this->culc_fat($meal, $units_meal, $fat_of_snak);
            }
        }
        return
            [
                'meal' => $meal->setHidden(['compontent_meals', 'created_at', 'updated_at']),
                'compontent_meal' => $units_meal,
            ];
    }

}
