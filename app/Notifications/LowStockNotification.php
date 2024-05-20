<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Messages\DatabaseMessage;

class LowStockNotification extends Notification
{
    use Queueable;

    protected $varient;

    /**
     * Create a new notification instance.
     *
     * @param  \App\Models\Varient  $varient
     * @return void
     */
    public function __construct($varient)
    {
        $this->varient = $varient;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['database'];
    }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        return [
            'varient_id' => $this->varient->id,
            'product_id' => $this->varient->product_id,
            'quantity' => $this->varient->quantity,
            'minimum_qty' => $this->varient->minimum_qty,
            'message' => 'The stock for variant ' . $this->varient->id . ' is low.',
        ];
    }
}
