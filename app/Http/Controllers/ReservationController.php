<?php

namespace App\Http\Controllers;

use App\Models\Evenement;
use App\Models\Reservation;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\View;
use App\Mail\ReservationAcceptedMail;
use App\Mail\ReservationDeclinedMail;
use App\Mail\ReservationConfirmedMail;
use App\Mail\ReservationCancelledMail;
use Illuminate\Support\Facades\Notification;
use App\Http\Requests\StoreReservationRequest;
use App\Http\Requests\UpdateReservationRequest;
use Illuminate\Support\Facades\Auth;



class ReservationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreReservationRequest $request, Evenement $evenement)
    {
        $user = Auth::user();

        // Vérifiez si l'utilisateur a le rôle "user"
        if (!$user->hasRole('user')) {
            return redirect()->back()->with('error', 'Seuls les utilisateurs peuvent réserver un événement.');
        }

        // Vérifiez si l'utilisateur a déjà une réservation pour cet événement
        $existingReservation = Reservation::where('user_id', $user->id)
                                          ->where('evenement_id', $evenement->id)
                                          ->first();

        if ($existingReservation) {
            return redirect()->back()->with('error', 'Vous avez déjà réservé cet événement.');
        }

        // Créez une nouvelle réservation
        $reservation = new Reservation();
        $reservation->user_id = $user->id;
        $reservation->evenement_id = $evenement->id;
        $reservation->statut = 'en attente';
        $reservation->save();

        return redirect()->route('associations.reservations.confirmation', $reservation);
    }

    public function confirmation(Reservation $reservation)
    {
        return view('associations.reservations.confirmation', compact('reservation'));
    }

    public function confirm(Request $request, Reservation $reservation)
{
    $reservation->update(['statut' => 'confirmee']);

    // Envoyer un email de confirmation
    Mail::to($reservation->user->email)->send(new ReservationConfirmedMail($reservation->user, $reservation->evenement));

    return redirect()->route('evenements.detail', $reservation->evenement)->with('success', 'Votre réservation a été confirmée.');
}

public function cancel(Request $request, Reservation $reservation)
{
    $reservation->update(['statut' => 'annulee']);

    // Envoyer un email d'annulation
    Mail::to($reservation->user->email)->send(new ReservationCancelledMail($reservation->user, $reservation->evenement));


    return redirect()->route('evenements.detail', $reservation->evenement)->with('success', 'Votre réservation a été annulée.');
}





    /**
     * Display the specified resource.
     */
    public function show(Reservation $reservation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Reservation $reservation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateReservationRequest $request, Reservation $reservation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Reservation $reservation)
    {
        //
    }

    public function listeReservation(){
        return view('admins.reservations.listeReservation');
    }

    public function accept(Reservation $reservation)
    {
        $reservation->update(['statut' => 'acceptee']);
        // Récupérer les informations nécessaires pour l'email
       // Récupérer l'utilisateur associé à la réservation
       $utilisateur = $reservation->user;
        $evenement = Evenement::findOrFail($reservation->evenement_id);




        // Envoyer un email de confirmation au candidat
        Mail::to($utilisateur->email)->send(new ReservationAcceptedMail($utilisateur, $evenement));
          // Récupérer le contenu de la vue de l'email
        //   $contenu = View::make('emails.reservation-accepted', [
        //     'prenom' => $reservation->utilisateur->prenom,
        //     'nom' => $reservation->utilisateur->nom,
        //     'evenement' => $evenement
        // ])->render();

        // Créer une notification
        // Notification::create([
        //     'reservation_id' => $reservation->id,
        //     'contenu' => $contenu,
        //     'objet' => 'reservation Envoyé'
        // ]);


        return redirect()->back()->with('success', 'Votre avez accepté la réservation de '.$utilisateur->nom);
    }

public function decline(Reservation $reservation)
{
    $reservation->update(['statut' => 'declinee']);
        // Récupérer les informations nécessaires pour l'email
       // Récupérer l'utilisateur associé à la réservation
       $utilisateur = $reservation->user;
        $evenement = Evenement::findOrFail($reservation->evenement_id); // Assurez-vous que la formation existe

        // Envoyer un email de confirmation au candidat
        Mail::to($utilisateur->email)->send(new ReservationDeclinedMail($utilisateur, $evenement));
          // Récupérer le contenu de la vue de l'email
        //   $contenu = View::make('emails.reservation-accepted', [
        //     'prenom' => $reservation->utilisateur->prenom,
        //     'nom' => $reservation->utilisateur->nom,
        //     'evenement' => $evenement
        // ])->render();

        // Créer une notification
        // Notification::create([
        //     'reservation_id' => $reservation->id,
        //     'contenu' => $contenu,
        //     'objet' => 'reservation Envoyé'
        // ]);

        return redirect()->back()->with('success', 'Votre avez décliné la réservation de '.$utilisateur->nom);
}
}
