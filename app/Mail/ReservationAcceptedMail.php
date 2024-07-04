<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;
use Illuminate\Mail\Mailables\Attachment;


class ReservationAcceptedMail extends Mailable
{
    use Queueable, SerializesModels;

    public $utilisateur;
    public $evenement;

    public function __construct($utilisateur, $evenement)
    {
        $this->utilisateur = $utilisateur;
        $this->evenement = $evenement;
    }
    
     
// Get the message envelope.
  public function envelope(): Envelope{
      return new Envelope(
          subject: 'Confirmation de réservation acceptée',
        );
    }

    
     
// Get the message content definition.
  public function content(): Content{
    return new Content(
        view: 'emails.reservation-accepted',
        with: [
            'utilisateur' => $this->utilisateur,
            'evenement' => $this->evenement,
        ]
    );
}

    /**
     
*/
public function attachments(): array{
    return [];}
}