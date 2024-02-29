<?php

namespace Fintech\Banco\Events;

use Fintech\Auth\Models\User;
use Fintech\Banco\Models\Beneficiary;
use Illuminate\Broadcasting\Channel;
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
     * @param  User  $user
     * @param  Beneficiary  $beneficiary
     */
    public function __construct($user, $beneficiary)
    {
        $this->user = $user;
        $this->beneficiary = $beneficiary;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return array<int, Channel>
     */
    public function broadcastOn(): array
    {
        return [
            new PrivateChannel('channel-name'),
        ];
    }
}
