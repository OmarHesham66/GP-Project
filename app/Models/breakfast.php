<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class breakfast extends Model
{
    use HasFactory;


    protected $table = 'breakfast';
    public $timestamps = false;

    protected $hidden = [
        'created_at',
        'updated_at',
    ];
    protected $fillable = [
        'name_meal',
        'calories_meal',
        'protein',
        'carb',
        'fat',
    ];
    public function compontent_meals()
    {
        return $this->hasMany(CompontentBreakfast::class, 'breakfast_id');
    }
}
