<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Snak extends Model
{
    use HasFactory;
    protected $table='snaks';
    public $timestamps=false;
    protected $fillable=[
        'name_meal',
        'calories_meal',
        'protein',
        'carb',
        'fat',
    ];
    public function compontent_meals(){
        return $this->hasMany(ComponentSnak::class,'snak_id');
    }

}
