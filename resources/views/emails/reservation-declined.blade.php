<!DOCTYPE html>
<html>
<head>
    <title>Confirmation de réservation déclinée</title>
</head>
<body>
    <p>Bonjour {{ $utilisateur->prenom }} {{ $utilisateur->nom }},</p>

    <p>Votre réservation pour l'événement "{{ $evenement->nom }}" a été déclinée.</p>

    <p>Nous espérons vous revoir prochainement.</p>

    <p>Cordialement,<br>L'équipe</p>
</body>
</html>
