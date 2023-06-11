<?php

namespace App\Http\Controllers\api;

use App\Classes\PrepareNutrition\Nutrition as ClassesNutrition;
use App\Classes\System\NutritionSystem;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ApiNutritionController extends Controller
{

    public function apiBuildNitritionSystem()
    {
        session_start();
        $client=($_SESSION['client']);
        $nutrition_system = new NutritionSystem(new ClassesNutrition(), $client);
        return $nutrition_system->Build();
    }
}
