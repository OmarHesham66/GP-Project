<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CompontentBreakfast extends Model
{
    use HasFactory;

    protected $table = 'compontent_breakfast';
    public $timestamps = false;
    protected $hidden = [
        'created_at',
        'updated_at',
    ];

    protected $fillable = [
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
    public function breakfasts()
    {
        return $this->belongsTo(breakfast::class, 'breakfast_id');
    }
}
