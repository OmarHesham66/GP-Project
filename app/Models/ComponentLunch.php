<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ComponentLunch extends Model
{
    use HasFactory;
    protected $table='component_lunches';
    public $timestamps=false;

    protected $fillable=[
        'compontent_meals',
        'compontent_lunches',
        'measruing_unit',
        'weight',
        'meal_id',
        'protein',
        'carb',
        'fat',
        'calories',
        'photo'
    ];
    public function lunches(){
        return $this->belongsTo(Lunch::class,'lunch_id');
    }
}
