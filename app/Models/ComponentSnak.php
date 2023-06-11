<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ComponentSnak extends Model
{
    use HasFactory;
    protected $table='component_snaks';
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
    public function snaks(){
        return $this->belongsTo(Snak::class,'snak_id');
    }

}
