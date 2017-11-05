<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Queue\SerializesModels;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class RecycledEvent implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $material_id;
    public $number;
    public $percent;
    public $css_class;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct($material_id, $number, $percent)
    {
        $this->material_id = $material_id;
        $this->number = $number;
        $this->percent = $percent . '%';
        $this->css_class = 'css-bar-' . $percent;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */
    public function broadcastOn()
    {
        return new Channel('update-recycled');
    }
}
