<?php

namespace App\Trait;

use App\Models\Exercise;

trait GetExerciseType
{
    use GetExercisePlace_Split;

    public function GetExerciseType($number_days, $data, $days)
    {
        $exercises = $data;
        switch ($number_days) {
            case '1':
                return
                    [
                        $days[0] => [$exercises['shoulder'], $exercises['chest'], $exercises['triceps'], $exercises['back'], $exercises['biceps'], $exercises['leg'], $exercises['abs']],

                    ];
                break;
            case '2':
                return
                    [
                        $days[0] => [$exercises['shoulder'], $exercises['chest'], $exercises['triceps']],
                        $days[1] => [$exercises['back'], $exercises['biceps'], $exercises['leg'], $exercises['abs']],

                    ];
                break;
            case '3':
                return
                    [
                        $days[0] => [$exercises['shoulder'], $exercises['chest'], $exercises['triceps']],
                        $days[1] => [$exercises['back'], $exercises['biceps'], $exercises['forearm']],
                        $days[2] => [$exercises['leg'], $exercises['abs']]

                    ];
                break;

            case '4':
                return
                    [
                        $days[0] => [$exercises['chest'], $exercises['shoulder']],
                        $days[1] => [$exercises['back'], $exercises['biceps']],
                        $days[2] => [$exercises['forearm'], $exercises['triceps']],
                        $days[3] => [$exercises['abs'], $exercises['leg']]


                    ];
                break;
            case '5':
                return
                    [
                        $days[0] => [$exercises['chest']],
                        $days[1] => [$exercises['back'], $exercises['forearm']],
                        $days[2] => [$exercises['shoulder']],
                        $days[3] => [$exercises['triceps'], $exercises['biceps']],
                        $days[4] => [$exercises['abs'], $exercises['leg']]

                    ];
                break;


            default:
                return
                    [
                        $days[0] => [$exercises['chest']],
                        $days[1] => [$exercises['back']],
                        $days[2] => [$exercises['shoulder']],
                        $days[3] => [$exercises['biceps'], $exercises['forearm']],
                        $days[4] => [$exercises['triceps']],
                        $days[5] => [$exercises['abs'], $exercises['leg']]

                    ];
                break;
        }
    }
}
