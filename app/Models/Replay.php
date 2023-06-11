<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Replay extends Model
{
    use HasFactory;
    protected $table = 'replays';

    protected $fillable = [
        'text',
        'user_id',
        'post_id',
        'comment_id'
    ];
    public function comment()
    {
        return $this->belongsTo(Comment::class, 'comment_id');
    }
}
