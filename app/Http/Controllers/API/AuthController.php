<?php

namespace App\Http\Controllers\API;

use App\Classes\StatusClient\client;
use App\Classes\System\Generate_Client_Information;
use App\Http\Controllers\Controller;
use App\Models\Nutrition;
use App\Models\User;
use App\Models\WorkoutData;
use App\Trait\TestApi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
//    public function __construct() {
//        $this->middleware('auth:api', ['except' => ['login', 'register']]);
//    }
    /**
     * Get a JWT via given credentials.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function login(Request $request){
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required|string|min:6',
        ]);
        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }
        $token = auth('api')->attempt($validator->validated());
        if (!$token) {
            return response()->json(['error' => 'Unauthorized'], 401);
        }
        session_start();
        $user=User::where('email','=',$request->email)->first();
        $client = new Generate_Client_Information(new client(), $user->id);
        $_SESSION['client']=$client->Generate();
//        setcookie('token',$token,time()+60*60);
        return $this->createNewToken($token);
    }
 /**
     * Register a User.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function register(Request $req) {
        $validator = Validator::make($req->all(), [
            'name' => 'required|string|between:2,100',
            'email' => 'required|string|email|max:100|unique:users',
            'password' => 'required|string|min:6',
            'phone'=> 'required|numeric|min:11',
        ]);
        if($validator->fails()){
            return response()->json($validator->errors()->toJson(), 400);
        }
        $password=bcrypt($req->password);
        $user= User::create([
            'name' => $req->name,
            'email' => $req->email,
            'password' => $password,
            'phone' => $req->phone,
            'age' => $req->age
        ]);
        if($user) {
            if ($req->gender == 'male') {
                $gender = 1;
            } else {
                $gender = 0;
            }
           $workout= WorkoutData::create([
                'height' => $req->height,
                'weight' => $req->weight,
                'gender' => $gender,
                'activity_rate' => $req->activity,
                'exercise_level' => $req->exercise_level,
                'workout_place' => $req->workout_place,
                'workout_days' => $req->workout_days,
                'workout_tools' => $req->workout_tools,
                'number_of_Days' => $req->number_of_days,
                'body_fat' => $req->bodyfat,
                'user_id' => $user->id,
                ]);
         $nutrition= Nutrition::create([
                'nutrition_system' => $req->food,
                'goal' => $req->goal,
                'allergy' => $req->allergy,
                'plan_meals' => $req->plan_meals,
                'user_id' => $user->id,
            ]);
        }
        return response()->json([
            'message' => 'User successfully registered',
            'user' => $user,
            'workout'=> $workout,
            'nutrition'=>$nutrition
        ], 201);
    }

    /**
     * Log the user out (Invalidate the token).
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function logout() {
        auth()->logout();
        session_start();
        session_unset();
        session_destroy();
        return response()->json(['message' => 'User successfully signed out']);
    }
    /**
     * Refresh a token.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function refresh() {
        return $this->createNewToken(auth()->refresh());
    }
    /**
     * Get the authenticated User.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function userProfile() {
        return response()->json(auth()->user());
    }
    /**
     * Get the token array structure.
     *
     * @param  string $token
     *
     * @return \Illuminate\Http\JsonResponse
     */
    protected function createNewToken($token){
        return response()->json([
            'access_token' => $token,
            'token_type' => 'bearer',
            'expires_in' => auth('api')->factory()->getTTL() * 60,
            'user' => auth()->user()
        ]);
    }
}
