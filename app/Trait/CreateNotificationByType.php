<?php

namespace App\Trait;

use App\Models\Notification;

trait CreateNotificationByType
{

    public function Create_Notification($type, $notification_data)
    {
        switch ($type) {
            case 'comment':
                return Notification::create([
                    'user_id' => $notification_data['user_id'],
                    'data' => 'Commented To Your Post',
                    'post_id' => $notification_data['table_id'],
                    'read_at' => now(),
                    'type' => $type,
                    'user_sender' => $notification_data['user_sender']
                ]);
                break;
            case 'like':
                return Notification::create([
                    'user_id' => $notification_data['user_id'],
                    'data' => 'Reacted To Your Post',
                    'post_id' => $notification_data['table_id'],
                    'read_at' => now(),
                    'type' => $type,
                    'user_sender' => $notification_data['user_sender']
                ]);
                break;
            case 'replay':
                return Notification::create([
                    'user_id' => $notification_data['user_id'],
                    'data' => 'Replayed To Your Post',
                    'replay_id' => $notification_data['table_id'],
                    'read_at' => now(),
                    'type' => $type,
                    'user_sender' => $notification_data['user_sender']
                ]);
                break;
            case 'post':
                return Notification::create([
                    'user_id' => $notification_data['user_id'],
                    'data' => 'Created Post',
                    'post_id' => $notification_data['table_id'],
                    'read_at' => now(),
                    'type' => $type,
                    'user_sender' => $notification_data['user_sender']
                ]);
                break;
            default:
                return Notification::create([
                    'user_id' => $notification_data['user_id'],
                    'data' => 'Started Following You',
                    'follow_id' => $notification_data['table_id'],
                    'read_at' => now(),
                    'type' => $type,
                    'user_sender' => $notification_data['user_sender']
                ]);
                break;
        }
    }
}
