<?php

namespace Cuitcode\Friendships\Events;

use Illuminate\Queue\SerializesModels;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;

class FriendshipsDenied
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    /**
     * The sender instance.
     *
     */
    public $sender;

    /**
     * The recipient instance.
     *
     */
    public $recipient;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct($sender, $recipient)
    {
        $this->sender = $sender;
        $this->recipient = $recipient;
    }
}
