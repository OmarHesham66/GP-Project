<?php

namespace App\Classes\StatusClient;

class client extends Status
{
    public $id;
    public $name;
    public $photo;
    public $email;
    public $age;
    public $phone;
    public $height;
    public $weight;
    public $activity;
    public $gender;
    public $exercise_level;
    public $workout_place;
    public $workout_tools;
    public $number_of_days;
    public $workout_days;
    public $body_fat;
    public $allergy;
    public $goal;
    public $my_real_calories;


    public function setData($data)
    {
        $this->id = $data->id;
        $this->goal = $data->nutrition->goal;
        $this->age = $data->age;
        $this->name = $data->name;
        $this->gender = $data->WorkoutData->gender;
        $this->body_fat = $data->WorkoutData->body_fat;
        $this->allergy = $data->nutrition->allergy;
        $this->activity = $data->WorkoutData->activity_rate;
        $this->workout_place = $data->WorkoutData->workout_place;
        $this->workout_tools = $data->WorkoutData->workout_tools;
        $this->number_of_days = $data->WorkoutData->number_of_days;
        $this->workout_days = $data->WorkoutData->workout_days;
        $this->email = $data->email;
        $this->photo = $data->photo;
        $this->phone = $data->phone;
        $this->height = $data->WorkoutData->height;
        $this->weight = $data->WorkoutData->weight;
        $this->exercise_level = $data->WorkoutData->exercise_level;
    }
    public function calc_status()
    {
        if ($this->gender == 1) {
            $this->status_for_male($this->weight, $this->height, $this->age, $this->activity);
        } else {
            $this->status_for_female($this->weight, $this->height, $this->age, $this->activity);
        }
    }
    public  function calc_mycal()
    {
        switch ($this->goal) {
            case 'Lose Fat':
                $mycal = $this->calories_with_ActivityRate - 200;
                $this->my_real_calories = $mycal;
                $this->LoseFat($mycal);
                break;

            case 'Build muscle':
                $mycal = $this->calories_with_ActivityRate + 300;
                $this->my_real_calories = $mycal;
                $this->BuildMuscle($mycal);
                break;

            default:
                $mycal = $this->calories_with_ActivityRate;
                $this->my_real_calories = $mycal;
                $this->MaintainWeight($mycal);
                break;
        }
    }
}
