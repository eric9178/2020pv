<?php

namespace App\Events;

use App\User;
use Illuminate\Broadcasting\Channel;
use Illuminate\Queue\SerializesModels;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class CallAccepted implements ShouldBroadcast
{
	use Dispatchable, InteractsWithSockets, SerializesModels;

	public $customer;
	public $advisor;
	public $chat_session_id;

	/**
	 * Create a new event instance.
	 *
	 * @return void
	 */
	public function __construct(User $customer, User $advisor, $chat_session_id)
	{
		$this->customer = $customer;
		$this->advisor = $advisor;
		$this->chat_session_id = $chat_session_id;
	}

	/**
	 * Get the channels the event should broadcast on.
	 *
	 * @return Channel|array
	 */
	public function broadcastOn()
	{
		return new PrivateChannel('chat');
	}
}
