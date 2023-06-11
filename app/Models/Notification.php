<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notification extends Model
{
    use HasFactory;
    protected $table = 'notifications';

    protected $fillable = [
        'data',
        'user_id',
        'read_at',
        'type',
        'comment_id',
        'follow_id',
        'post_id',
        'replay_id',
        'user_sender'
    ];
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
    public function sender()
    {
        return $this->belongsTo(User::class, 'user_sender');
    }
    public function post()
    {
        return $this->belongsTo(Post::class, 'post_id');
    }
    public function comment()
    {
        return $this->belongsTo(Comment::class, 'comment_id');
    }
    public function follow()
    {
        return $this->belongsTo(Follow::class, 'follow_id');
    }

    public function replay()
    {
        return $this->belongsTo(Replay::class, 'replay_id');
    }
}
