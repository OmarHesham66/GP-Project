<?php

namespace App\Http\Controllers\api;

use App\Classes\PrepareNutrition\Nutrition as ClassesNutrition;
use App\Classes\System\NutritionSystem;
use App\Classes\System\WorkoutSystem;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ApiWorkoutController extends Controller
{

    public function apiBuildWorkoutSystem()
    {
        session_start();
        $client=($_SESSION['client']);
        $workout_system = new WorkoutSystem($_SESSION['client']);
        return $workout_system->Build();
    }
}
