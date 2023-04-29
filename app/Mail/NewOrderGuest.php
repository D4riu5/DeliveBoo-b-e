<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class NewOrderGuest extends Mailable
{
    use Queueable, SerializesModels;

    public $guest;
    public $order;
    public $restaurant;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($guest, $order, $restaurant)
    {
        $this->guest = $guest;
        $this->order = $order;
        $this->restaurant = $restaurant;
        
    }

    /**
     * Get the message envelope.
     *
     * @return \Illuminate\Mail\Mailables\Envelope
     */
    public function envelope()
    {
        return new Envelope(
            replyTo: 'noreply@test.com',
            subject: 'Il tuo ordine è in preparazione!',
        );
    }

    /**
     * Get the message content definition.
     *
     * @return \Illuminate\Mail\Mailables\Content
     */
    public function content()
    {
        return new Content(
            view: 'emails.orders.created-guest',
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array
     */
    public function attachments()
    {
        return [];
    }
}
