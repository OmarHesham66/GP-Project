<?php

namespace App\Http\Controllers\api;


use App\Http\Controllers\Controller;

class ApiStatusController extends Controller
{

    public function apiShowStatus()
    {
        session_start();
//        if(!isset($_SESSION['client'])){
//            return response('try login again');
//        }
        $client=$_SESSION['client'];
        if($client->gender==1){
            $gender='Male';
        }
        else{
            $gender='Female';
        }
         return response([
             'Weight' =>$client->weight,
             'Height' =>$client->height,
             'age'=>$client->age,
             'bodyfat'=>$client->body_fat,
             'gender'=>$gender,
             'allergy'=>$client->allergy,
             'goal'=>$client->goal,
             'Bmr'=>$client->bmr,
             'Bmi'=>$client->bmi,
             'Your calories'=>$client->my_real_calories,
             'Protein'=>$client->protein,
             'carb'=>$client->carbs,
             'fat'=>$client->fats
           ]);
    }
}
