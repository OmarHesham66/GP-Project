<?php

namespace App\Trait;

use App\Classes\Female;
use App\Classes\Male;
use App\Models\User;
use App\Models\WorkoutData;

trait TestApi
{

    public function ReturnRespone($data=null,$status=null,$message=null){
        $array=[
            'data'=>$data,
            'status'=>$status,
            'messages'=>$message
        ];
        return response($array);
    }
}
