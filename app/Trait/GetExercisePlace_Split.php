<?php

namespace App\Trait;

use App\Models\Exercise;

trait GetExercisePlace_Split
{

    public function get_exercise_place_split($place)
    {

        switch ($place) {
            case 'Home':
                return
                    [
                        'shoulder' => Exercise::Home()->where('Exercise_Name', '=', 'Shoulder')->first(),
                        'chest' => Exercise::Home()->where('Exercise_Name', '=', 'Chest')->first(),
                        'back' => Exercise::Home()->where('Exercise_Name', '=', 'Back')->first(),
                        'leg' => Exercise::Home()->where('Exercise_Name', '=', 'Leg')->first(),
                        'biceps' => Exercise::Home()->where('Exercise_Name', '=', 'Biceps')->first(),
                        'triceps' => Exercise::Home()->where('Exercise_Name', '=', 'Triceps')->first(),
                        'abs' => Exercise::Home()->where('Exercise_Name', '=', 'Abs')->first(),
                        'forearm' => Exercise::Gym()->where('Exercise_Name', '=', 'Forearm')->first()
                    ];
                break;

            case 'Dumbble':
                return  [
                    'shoulder' => Exercise::Dummble()->where('Exercise_Name', '=', 'Shoulder')->first(),
                    'chest' => Exercise::Dummble()->where('Exercise_Name', '=', 'Chest')->first(),
                    'back' => Exercise::Dummble()->where('Exercise_Name', '=', 'Back')->first(),
                    'leg' => Exercise::Dummble()->where('Exercise_Name', '=', 'Leg')->first(),
                    'biceps' => Exercise::Dummble()->where('Exercise_Name', '=', 'Biceps')->first(),
                    'triceps' => Exercise::Dummble()->where('Exercise_Name', '=', 'Triceps')->first(),
                    'abs' => Exercise::Dummble()->where('Exercise_Name', '=', 'Abs')->first(),
                    'forearm' => Exercise::Gym()->where('Exercise_Name', '=', 'Forearm')->first()

                ];
                break;

            case 'Bar':
                return  [
                    'shoulder' => Exercise::Bar()->where('Exercise_Name', '=', 'Shoulder')->first(),
                    'chest' => Exercise::Bar()->where('Exercise_Name', '=', 'Chest')->first(),
                    'back' => Exercise::Bar()->where('Exercise_Name', '=', 'Back')->first(),
                    'leg' => Exercise::Bar()->where('Exercise_Name', '=', 'Leg')->first(),
                    'biceps' => Exercise::Bar()->where('Exercise_Name', '=', 'Biceps')->first(),
                    'triceps' => Exercise::Bar()->where('Exercise_Name', '=', 'Triceps')->first(),
                    'abs' => Exercise::Bar()->where('Exercise_Name', '=', 'Abs')->first(),
                    'forearm' => Exercise::Gym()->where('Exercise_Name', '=', 'Forearm')->first()

                ];
                break;

            default:
                return  [
                    'shoulder' => Exercise::Gym()->where('Exercise_Name', '=', 'Shoulder')->first(),
                    'chest' => Exercise::Gym()->where('Exercise_Name', '=', 'Chest')->first(),
                    'back' => Exercise::Gym()->where('Exercise_Name', '=', 'Back')->first(),
                    'leg' => Exercise::Gym()->where('Exercise_Name', '=', 'Leg')->first(),
                    'biceps' => Exercise::Gym()->where('Exercise_Name', '=', 'Biceps')->first(),
                    'triceps' => Exercise::Gym()->where('Exercise_Name', '=', 'Triceps')->first(),
                    'abs' => Exercise::Gym()->where('Exercise_Name', '=', 'Abs')->first(),
                    'forearm' => Exercise::Gym()->where('Exercise_Name', '=', 'Forearm')->first()
                ];
                break;
        }
    }
}
