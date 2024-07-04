<?php

namespace App\Mail;

use App\Models\Evenement;
use App\Models\Reservation;
use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ReservationConfirmedMail extends Mailable
{
    use Queueable, SerializesModels;

    public $user;
    public $evenement;

    public function __construct(User $user, Evenement $evenement)
    {
        $this->user = $user;
        $this->evenement = $evenement;
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
        with: [
            'prenom' => $this->user->prenom,
            'nom' => $this->user->nom,
        ]
    );
}

    /**
     
*/
public function attachments(): array{
    return [];
}
}