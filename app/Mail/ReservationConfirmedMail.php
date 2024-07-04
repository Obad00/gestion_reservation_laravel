<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ReservationConfirmedMail extends Mailable
{
    use Queueable, SerializesModels;

    public $utilisateur;
    public $reservation;

    public function __construct($utilisateur, $reservation)
    {
        $this->utilisateur = $utilisateur;
        $this->reservation = $reservation;
    }
    
     
// Get the message envelope.
  public function envelope(): Envelope{
      return new Envelope(
          subject: 'Confirmation de réservation soumise',
        );
    }

    
     
// Get the message content definition.
  public function content(): Content{
    return new Content(
        view: 'emails.reservation-confirmed',
        // with: [
        //     'prenom' => $this->utilisateur->prenom,
        //     'nom' => $this->utilisateur->nom,
        //     'reservation' => $this->reservation,
        // ]
    );
}

    /**
     
*/
public function attachments(): array{
    return [];
}
}