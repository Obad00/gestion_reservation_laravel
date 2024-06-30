{{-- <h1>Confirmation de Réservation</h1>
<p>Votre réservation a été soumise avec succès. Un email de confirmation vous a été envoyé.</p> --}}
<form method="POST" action="{{ route('reservations.confirm', $reservation) }}">
    @csrf
    <button type="submit">Confirmer la réservation</button>
</form>

<form method="POST" action="{{ route('reservations.cancel', $reservation) }}">
    @csrf
    <button type="submit">Annuler la réservation</button>
</form>