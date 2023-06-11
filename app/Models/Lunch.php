<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lunch extends Model
{
    use HasFactory;
    protected $table='lunches';
    public $timestamps=false;

    protected $fillable=[
        'name_meal',
        'calories_meal',
        'protein',
        'carb',
        'fat',
    ];
    public function compontent_meals(){
        return $this->hasMany(ComponentLunch::class,'lunch_id');
    }

}
