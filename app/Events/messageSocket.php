<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class messageSocket implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    /**
     * Create a new event instance.
     */
 
    public $message;
    public $sender;
    public $channel;
    public function __construct($message, $sender, $channel)
    {
        //
        $this->message = $message;
        $this->sender = $sender;
        $this->channel = $channel;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return array<int, \Illuminate\Broadcasting\Channel>
     */
    public function broadcastOn(): array
    {
        return [
            new Channel('messageSender.user.'.$this->channel),

            // Private channel are using the user id. I try to use Private channels but 
            // its not working so I tried public channel which is the "Channel" only instead of 
            // "PrivateChannel" and it works. I also change the "private" to "channel" on 
            // bidding.blade.php
            // new PrivateChannel('myPrivateChannel.user.3'),
        ];
    }

    public function broadcastAs()
    {
        return 'message';
    }
    public function broadcastWith(): array
    {
        return [
            'message' => $this->message,
            'sender' => $this->sender,
            // 'profile_img'=> $this->profile_img,
            // 'bid_on' => $this->on_time,
            // //'user' => auth()->user()->name,
        ];
    }
}
