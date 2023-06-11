<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;
use App\Trait\GetNotification;
use App\Models\Notification as ModelsNotification;

class Notification extends Component
{
    use GetNotification;
    public $notifications;
    public $icon = 0;
    protected $listeners = ["notify" => 'changeColor', 'changed' => '$refresh'];

    public function render()
    {

        $this->notifications = $this->get_notification();
        $last_notify = ModelsNotification::latest()->first();
        if (isset($last_notify->user_id)) {
            if ($last_notify->user_id != $this->get_session()->id) {
                $this->icon = 0;
            }
        }

        return view('livewire.notification');
    }
    public function changeColor()
    {
        $this->icon = 1;
        $this->emit('changed');
    }
}
