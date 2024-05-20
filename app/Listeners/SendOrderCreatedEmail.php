<?php

namespace App\Listeners;

use App\Events\OrderCreated;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;
use App\Mail\OrderDetailMail;

class SendOrderCreatedEmail
{
    public function handle(OrderCreated $event)
    {
        $invoice = $event->invoice;
        $email = $invoice->user->email;

        Mail::to($email)->send(new OrderDetailMail($invoice));
    }
}


