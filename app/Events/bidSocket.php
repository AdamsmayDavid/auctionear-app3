<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class bidSocket implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    /**
     * Create a new event instance.
     */
 
    public $bid_price;
    public $bidder;
    public $channel;
    public function __construct($bid_price, $bidder, $channel)
    {
        //
        $this->bid_price = $bid_price;
        $this->bidder = $bidder;
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
            new Channel('myPrivateChannel.user.'.$this->channel),

            // Private channel are using the user id. I try to use Private channels but 
            // its not working so I tried public channel which is the "Channel" only instead of 
            // "PrivateChannel" and it works. I also change the "private" to "channel" on 
            // bidding.blade.php
            // new PrivateChannel('myPrivateChannel.user.3'),
        ];
    }

    public function broadcastAs()
    {
        return 'private_msg';
    }
    public function broadcastWith(): array
    {
        return [
            'bid_price' => $this->bid_price,
            'bidder' => $this->bidder,
            // 'profile_img'=> $this->profile_img,
            // 'bid_on' => $this->on_time,
            // //'user' => auth()->user()->name,
        ];
    }
}
