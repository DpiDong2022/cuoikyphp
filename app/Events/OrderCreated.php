<?php

namespace App\Events;

use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;
use App\Models\Invoice;

class OrderCreated
{
    use Dispatchable, SerializesModels;

    public $order;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct(Invoice $order)
    {
        $this->order = $order;
    }
}

