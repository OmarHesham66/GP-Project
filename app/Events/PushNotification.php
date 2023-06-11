<?php

namespace App\Events;

use App\Http\Livewire\Notification;
use App\Trait\CreateNotificationByType;
use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class PushNotification implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;
    use CreateNotificationByType;

    public $user_id;
    public $table_id;
    public $type;
    public $user_sender;
    // protected $data;
    // protected $type;
    // protected $time;
    // protected $read_at;

    public function __construct($data)
    {
        $this->user_id = $data['user_id'];
        $this->table_id = $data['table_id'];
        $this->type = $data['type'];
        $this->user_sender = $data['user_sender'];
        $this->Create_Notification($this->type, $data);
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */
    public function broadcastOn()
    {
        // return new PrivateChannel('channel-name');
        return ['notification'];
    }

    public function broadcastAs()
    {
        return 'PushNotification';
    }
}
