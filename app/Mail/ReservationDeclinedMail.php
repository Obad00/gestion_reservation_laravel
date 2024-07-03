<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ReservationDeclinedMail extends Mailable
{
    use Queueable, SerializesModels;

    public $utilisateur;
    public $evenement;
    /**
     * Create a new message instance.
     */
    public function __construct($utilisateur, $evenement)
    {
        //
        $this->utilisateur = $utilisateur;
        $this->evenement = $evenement;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Confirmation de réservation déclinée',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'emails.reservation-declined',
            with: [
                'utilisateur' => $this->utilisateur,
                'evenement' => $this->evenement,
            ]
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        return [];
    }
}
