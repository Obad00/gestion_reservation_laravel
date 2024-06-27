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
use Illuminate\Support\Facades\Notification;
use App\Http\Requests\StoreReservationRequest;
use App\Http\Requests\UpdateReservationRequest;

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
    public function store(StoreReservationRequest $request)
    {
        //
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
    public function accept(Reservation $reservation)
    {
        $reservation->update(['statut' => 'acceptee']);
        // Récupérer les informations nécessaires pour l'email
       // Récupérer l'utilisateur associé à la réservation
       $utilisateur = $reservation->user;
        $evenement = Evenement::findOrFail($reservation->evenement_id)->nom; // Assurez-vous que la formation existe

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

        return redirect('/')->with('success', 'Votre reservation a été soumise avec succès.');
    }

public function decline(Reservation $reservation)
{
    try {
        $reservation->update(['statut' => 'declinee']);

        // Envoyer l'e-mail de déclinaison à l'utilisateur correspondant
        Mail::to($reservation->user->email)->send(new ReservationDeclinedMail());

        return redirect()->back()->with('success', 'Réservation déclinée.');
    } catch (\Exception $e) {
        return redirect()->back()->with('error', 'Une erreur est survenue lors du déclin de la réservation.');
    }
}
}
