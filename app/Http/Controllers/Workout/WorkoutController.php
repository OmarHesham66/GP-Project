<?php

namespace App\Http\Controllers\Workout;


use App\Models\Muscle;
use App\Trait\GetData;
use App\Trait\GetDays;
use App\Models\Exercise;
use App\Trait\CheckSession;
use App\Models\Notification;
use Illuminate\Http\Request;
use App\Trait\GetNotification;
use App\Http\Controllers\Controller;
use App\Classes\System\WorkoutSystem;
use Illuminate\Support\Facades\Session;

class WorkoutController extends Controller
{
    use GetNotification, CheckSession, GetDays;
    public function workout_register_show()
    {
        return view('admin.Registration.Workout-Register');
    }

    public function insert_workout_data(Request $req)
    {

        Session::put('data_workout', [
            'height' => $req->height,
            'weight' =>  $req->weight,
            'gender' =>   $req->gender,
            'activity_rate' =>   $req->activity,
            'exercise_level' =>    $req->exercise_level,
            'bodyfat' => $req->bodyfat,
        ]);
        return view('admin.Registration.Workout-Register2');
    }

    public function insert_workout_data2(Request $req)
    {

        Session::put('data_workout2', [
            'workout_place' => $req->workout_place,
            'workout_days' =>  $req->workout_days,
            'workout_tools' =>   $req->workout_tool,
        ]);
        return view('admin.Registration.Nutrition-Register');
    }
    public function Plan_Workout()
    {
        // return Notification::with('follow', 'sender', 'comment', 'replay', 'user', 'post')->where('user_id', '=', $this->get_session()->id)->get();

        $client = $this->get_session();

        $days = $this->get_session()->workout_days;
        $days = explode('-', $days);
        // return $days;
        $sunday = $this->get_sunday($days);
        $saturday = $this->get_saturday($days);
        $monday = $this->get_monday($days);
        $tuesday = $this->get_tuesday($days);
        $wednesday = $this->get_wednesday($days);
        $thursday = $this->get_thursday($days);
        // return $thursday;
        $friday = $this->get_friday($days);

        $workout_system = new WorkoutSystem($client, $days);
        $system_arr = $workout_system->Build();
        // return $system_arr;
        $arr_number = $this->numbers_of_workout();
        return view('admin.Workout.workout', compact(
            'system_arr',
            'arr_number',
            'days',
            'client',
            'sunday',
            'saturday',
            'monday',
            'tuesday',
            'wednesday',
            'thursday',
            'friday'
        ));
    }

    public function numbers_of_workout()
    {
        if ($this->get_session()->number_of_days == 1) {
            return
                [
                    'Chest' => 1,
                    'Shoulder' => 1,
                    'Back' => 1,
                    'Triceps' => 1,
                    'Biceps' => 1,
                    'Leg' => 1,
                    'Forearm' => 1,
                    'Abs' => 1
                ];
        } elseif ($this->get_session()->number_of_days == 2) {
            return
                [
                    'Chest' => 2,
                    'Shoulder' => 2,
                    'Back' => 3,
                    'Triceps' => 2,
                    'Biceps' => 2,
                    'Leg' => 3,
                    'Forearm' => 1,
                    'Abs' => 1
                ];
        } elseif ($this->get_session()->number_of_days == 3) {
            return
                [
                    'Chest' => 3,
                    'Shoulder' => 3,
                    'Back' => 4,
                    'Triceps' => 3,
                    'Biceps' => 4,
                    'Leg' => 7,
                    'Forearm' => 2,
                    'Abs' => 2
                ];
        } elseif ($this->get_session()->number_of_days == 4) {
            return
                [
                    'Chest' => 4,
                    'Shoulder' => 4,
                    'Back' => 4,
                    'Triceps' => 4,
                    'Biceps' => 4,
                    'Leg' => 7,
                    'Forearm' => 3,
                    'Abs' => 5
                ];
        } elseif ($this->get_session()->number_of_days == 5) {
            return
                [
                    'Chest' => 8,
                    'Shoulder' => 8,
                    'Back' => 4,
                    'Triceps' => 4,
                    'Biceps' => 4,
                    'Leg' => 7,
                    'Forearm' => 4,
                    'Abs' => 6
                ];
        } else {
            return
                [
                    'Chest' => 9,
                    'Shoulder' => 9,
                    'Back' => 9,
                    'Triceps' => 9,
                    'Biceps' => 4,
                    'Leg' => 7,
                    'Forearm' => 4,
                    'Abs' => 7
                ];
        }
    }
}
