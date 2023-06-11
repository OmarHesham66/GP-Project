<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dinner extends Model
{
    use HasFactory;
    protected $table='dinners';
    public $timestamps=false;


    protected $fillable=[
        'name_meal',
        'calories_meal',
        'protein',
        'carb',
        'fat',
    ];
    public function compontent_meals(){
        return $this->hasMany(ComponentDinner::class,'dinner_id');
    }

}
