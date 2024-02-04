<?php

namespace Fintech\Banco\Events;

use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class BeneficiaryAdded
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $user;

    public $beneficiary;

    /**
     * Create a new event instance.
     *
     * @param  \Fintech\Auth\Models\User  $user
     * @param  \Fintech\Banco\Models\Beneficiary  $beneficiary
     */
    public function __construct($user, $beneficiary)
    {
        $this->user = $user;
        $this->beneficiary = $beneficiary;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return array<int, \Illuminate\Broadcasting\Channel>
     */
    public function broadcastOn(): array
    {
        return [
            new PrivateChannel('channel-name'),
        ];
    }
}
