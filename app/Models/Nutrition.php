<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nutrition extends Model
{
    use HasFactory;

    protected $table='nutrition';
    public $timestamps=false;

    protected $fillable=[
        'nutrition_system',
        'allergy',
        'user_id',
        'goal',
        'plan_meals',
    ];


    public function users(){
        return $this->belongsTo(User::class,'user_id');
    }

}
