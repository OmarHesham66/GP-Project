<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Exercise extends Model
{
    use HasFactory;

    protected $table = 'exercises';
    public $timestamps = false;

    protected $fillable = [
        'Exercise_Name',
        'Exercise_Details',
    ];

    public function muscle()
    {
        return $this->hasMany(Muscle::class, 'Exercise_id');
    }
    public function scopeHome($query)
    {
        return $query->with(['muscle' => function ($q) {
            $q->where('Exercise_Place', '=', 'Home');
        }]);
    }
    public function scopeGym($query)
    {
        return $query->with(['muscle' => function ($q) {
            $q->where('Exercise_Place', '=', 'Gym');
        }]);
    }
    public function scopeBar($query)
    {
        return $query->with(['muscle' => function ($q) {
            $q->where('Exercise_Place', '=', 'Bar');
        }]);
    }
    public function scopeDummble($query)
    {
        return $query->with(['muscle' => function ($q) {
            $q->where('Exercise_Place', '=', 'Dummble');
        }]);
    }
}
