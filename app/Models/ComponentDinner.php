<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ComponentDinner extends Model
{
    use HasFactory;
    protected $table='component_dinners';
    public $timestamps=false;


    protected $fillable=[
        'compontent_meals',
        'measruing_unit',
        'weight',
        'meal_id',
        'protein',
        'carb',
        'fat',
        'calories',
        'photo'
    ];
    public function dinners(){
        return $this->belongsTo(Dinner::class,'dinner_id');
    }
}
